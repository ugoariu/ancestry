<?php
/**
 *
 * released under the terms of the gpl2 licence
 * you can get a copy of the licence from http://www.gnu.org/licenses/gpl-2.0.txt
 * @author Ugo Ariu <ugoariu@gmail.com>
 *
 */
namespace TefNetweb\AncestryBundle\Controller\Ancestry;

use APY\DataGridBundle\Grid\Action\RowAction;
use APY\DataGridBundle\Grid\Grid;
use APY\DataGridBundle\Grid\Row;
use APY\DataGridBundle\Grid\Source\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TefNetweb\AncestryBundle\Entity\Ancestry\Death;
use TefNetweb\AncestryBundle\Form\Ancestry\AncestryFieldHelper;
use TefNetweb\AncestryBundle\Form\Ancestry\DeathType;

/**
 * Ancestry\Death controller.
 *
 */
class DeathController extends Controller
{

    /**
     * Lists all Ancestry\Death entities.
     *
     */
    public function indexAction()
    {

        $grid_source = new Entity('TefNetwebAncestryBundle:Ancestry\Death');

        $grid = $this->get('grid');
        $grid->setSource($grid_source);
        /* @var $grid Grid */

        $grid->hideColumns(
            array(
                'id',
                # 'deathDate',
                'deathTime',
                'registrationDate',
                # 'DeathPlace',
                'Parish',
                # 'probandSurname',
                # 'probandName',
                'probandName2',
                'probandName3',
                # 'probandSex',
                # 'probandStatus',
                # 'probandAge',
                'birthDate',
                'probandBirthPlace',
                'probandResidence',
                'probandResidenceParish',
                # 'probandProfession',
                'fatherSurname',
                # 'fatherName',
                'fatherName2',
                'fatherName3',
                'IsFatherDead',
                'fatherAge',
                'fatherStatus',
                'fatherResidence',
                'fatherProfession',
                'motherSurname',
                # 'motherName',
                'motherName2',
                'motherName3',
                'IsMotherDead',
                'motherAge',
                'motherStatus',
                'motherResidence',
                'motherProfession',
                'notes',

            )
        );

        $grid->getColumn('id')->setFilterable(false);
        $grid->getColumn('probandSex')->manipulateRenderCell(
            function ($value, Row $row, $router) {
                return $this->get('translator')->trans(AncestryFieldHelper::getSexChoices()[$value]);
            }
        );
        $grid->getColumn('probandStatus')->manipulateRenderCell(
            function ($value, Row $row, $router) {
                return $this->get('translator')->trans(AncestryFieldHelper::getMaritalStatusChoices()[$value]);
            }
        );
        $rowAction = new RowAction('Show', 'death_show');
        $grid->addRowAction($rowAction);
        $rowAction = new RowAction('Edit', 'death_edit');
        $grid->addRowAction($rowAction);
        $rowAction = new RowAction('Delete', 'death_delete');
        $grid->addRowAction($rowAction);

        return $grid->getGridResponse('TefNetwebAncestryBundle:Ancestry/Death:index.html.twig');
    }

    /**
     * Creates a new Ancestry\Death entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Death();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('death_show', array('id' => $entity->getId())));
        }

        return $this->render('TefNetwebAncestryBundle:Ancestry/Death:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Ancestry\Death entity.
     *
     * @param Death $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Death $entity)
    {
        $form = $this->createForm(new DeathType(), $entity, array(
            'action' => $this->generateUrl('death_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Ancestry\Death entity.
     *
     */
    public function newAction()
    {
        $entity = new Death();
        $form = $this->createCreateForm($entity);

        return $this->render('TefNetwebAncestryBundle:Ancestry/Death:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Ancestry\Death entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TefNetwebAncestryBundle:Ancestry\Death')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ancestry\Death entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        $masked_entity = array();
        $masked_entity['probandSex'] = $this->get('translator')
            ->trans(AncestryFieldHelper::getSexChoices()[$entity->getProbandSex()]);
        $masked_entity['probandStatus'] = $this->get('translator')
            ->trans(
                is_null($entity->getProbandStatus()) ? '' : AncestryFieldHelper::getMaritalStatusChoices()[$entity->getProbandStatus()]
            );
        $masked_entity['fatherStatus'] = $this->get('translator')
            ->trans(
                is_null($entity->getFatherStatus()) ? '' : AncestryFieldHelper::getMaritalStatusChoices()[$entity->getFatherStatus()]
            );
        $masked_entity['IsFatherDead'] = $this->get('translator')
            ->trans(
                is_null($entity->getIsFatherDead()) ? '' : ($entity->getIsFatherDead() == 1 ? 'Yes' : 'No')
            );
        $masked_entity['IsMotherDead'] = $this->get('translator')
            ->trans(
                is_null($entity->getIsMotherDead()) ? '' : ($entity->getIsMotherDead() == 1 ? 'Yes' : 'No')
            );
        $masked_entity['motherStatus'] = $this->get('translator')
            ->trans(
                is_null($entity->getMotherStatus()) ? '' : AncestryFieldHelper::getMaritalStatusChoices()[$entity->getMotherStatus()]
            );

        return $this->render('TefNetwebAncestryBundle:Ancestry/Death:show.html.twig', array(
            'entity' => $entity, 'trans_entity' => $masked_entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to delete a Ancestry\Death entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('death_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm();
    }

    /**
     * Displays a form to edit an existing Ancestry\Death entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TefNetwebAncestryBundle:Ancestry\Death')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ancestry\Death entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TefNetwebAncestryBundle:Ancestry/Death:edit.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Ancestry\Death entity.
     *
     * @param Death $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Death $entity)
    {
        $form = $this->createForm(new DeathType(), $entity, array(
            'action' => $this->generateUrl('death_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Ancestry\Death entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TefNetwebAncestryBundle:Ancestry\Death')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ancestry\Death entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('death_edit', array('id' => $id)));
        }

        return $this->render('TefNetwebAncestryBundle:Ancestry/Death:edit.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Ancestry\Death entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TefNetwebAncestryBundle:Ancestry\Death')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Ancestry\Death entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('death'));
    }
}
