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
use APY\DataGridBundle\Grid\Source\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TefNetweb\AncestryBundle\Entity\Ancestry\Marriage;
use TefNetweb\AncestryBundle\Form\Ancestry\AncestryFieldHelper;
use TefNetweb\AncestryBundle\Form\Ancestry\MarriageType;

/**
 * Ancestry\Marriage controller.
 *
 */
class MarriageController extends Controller
{

    /**
     * Lists all Ancestry\Marriage entities.
     *
     */
    public function indexAction()
    {

        $grid_source = new Entity('TefNetwebAncestryBundle:Ancestry\Marriage');

        $grid = $this->get('grid');
        $grid->setSource($grid_source);
        /* @var $grid Grid */

        $grid->hideColumns(
            array(
                'id',
                #'husbandSurname',
                #'husbandName',
                'husbandName2',
                'husbandName3',
                'husbandAge',
                'husbandStatus',
                'husbandBirthDate',
                'husbandBirthPlace',
                'husbandParish',
                'husbandResidence',
                #'husbandProfession',
                'husbandFatherSurname',
                'husbandFatherName',
                'husbandFatherName2',
                'husbandFatherName3',
                'husbandFatherAge',
                'husbandFatherStatus',
                'husbandFatherProfession',
                'husbandMotherSurname',
                'husbandMotherName',
                'husbandMotherName2',
                'husbandMotherName3',
                'husbandMotherAge',
                'husbandMotherStatus',
                'husbandMotherProfession',
                #'wifeSurname',
                #'wifeName',
                'wifeName2',
                'wifeName3',
                'wifeAge',
                'wifeStatus',
                'wifeBirthDate',
                'wifeBirthPlace',
                'wifeParish',
                'wifeResidence',
                #'wifeProfession',
                'wifeFatherSurname',
                'wifeFatherName',
                'wifeFatherName2',
                'wifeFatherName3',
                'wifeFatherAge',
                'wifeFatherStatus',
                'wifeFatherProfession',
                'wifeMotherSurname',
                'wifeMotherName',
                'wifeMotherName2',
                'wifeMotherName3',
                'wifeMotherAge',
                'wifeMotherStatus',
                'wifeMotherProfession',
                #'marriageDate',
                'marriageTime',
                'registrationDate',
                'marriagePlace',
                'marriageParish',
                'notes',
            )
        );
        $grid->getColumn('id')->setFilterable(false);

        $grid->setColumnsOrder(
            array('id', 'marriageDate',
            ));

        $rowAction = new RowAction('Show', 'marriage_show');
        $grid->addRowAction($rowAction);
        $rowAction = new RowAction('Edit', 'marriage_edit');
        $grid->addRowAction($rowAction);
        $rowAction = new RowAction('Delete', 'marriage_delete');
        $grid->addRowAction($rowAction);

        return $grid->getGridResponse('TefNetwebAncestryBundle:Ancestry/Marriage:index.html.twig');
    }

    /**
     * Creates a new Ancestry\Marriage entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Marriage();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('marriage_show', array('id' => $entity->getId())));
        }

        return $this->render('TefNetwebAncestryBundle:Ancestry/Marriage:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Ancestry\Marriage entity.
     *
     * @param Marriage $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Marriage $entity)
    {
        $form = $this->createForm(new MarriageType(), $entity, array(
            'action' => $this->generateUrl('marriage_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Ancestry\Marriage entity.
     *
     */
    public function newAction()
    {
        $entity = new Marriage();
        $form = $this->createCreateForm($entity);

        return $this->render('TefNetwebAncestryBundle:Ancestry/Marriage:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Ancestry\Marriage entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TefNetwebAncestryBundle:Ancestry\Marriage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ancestry\Marriage entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        $masked_entity = array();
        $masked_entity['husbandStatus'] = $this->get('translator')
            ->trans(
                is_null($entity->getHusbandStatus()) ? '' : AncestryFieldHelper::getMaritalStatusChoices()[$entity->getHusbandStatus()]
            );
        $masked_entity['husbandFatherStatus'] = $this->get('translator')
            ->trans(
                is_null($entity->getHusbandFatherStatus()) ? '' : AncestryFieldHelper::getMaritalStatusChoices()[$entity->getHusbandFatherStatus()]
            );
        $masked_entity['husbandMotherStatus'] = $this->get('translator')
            ->trans(
                is_null($entity->getHusbandMotherStatus()) ? '' : AncestryFieldHelper::getMaritalStatusChoices()[$entity->getHusbandMotherStatus()]
            );
        $masked_entity['wifeStatus'] = $this->get('translator')
            ->trans(
                is_null($entity->getWifeStatus()) ? '' : AncestryFieldHelper::getMaritalStatusChoices()[$entity->getWifeStatus()]
            );
        $masked_entity['wifeFatherStatus'] = $this->get('translator')
            ->trans(
                is_null($entity->getWifeFatherStatus()) ? '' : AncestryFieldHelper::getMaritalStatusChoices()[$entity->getWifeFatherStatus()]
            );
        $masked_entity['wifeMotherStatus'] = $this->get('translator')
            ->trans(
                is_null($entity->getWifeMotherStatus()) ? '' : AncestryFieldHelper::getMaritalStatusChoices()[$entity->getWifeMotherStatus()]
            );

        return $this->render('TefNetwebAncestryBundle:Ancestry/Marriage:show.html.twig', array(
            'entity' => $entity, 'trans_entity' => $masked_entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to delete a Ancestry\Marriage entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('marriage_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm();
    }

    /**
     * Displays a form to edit an existing Ancestry\Marriage entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TefNetwebAncestryBundle:Ancestry\Marriage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ancestry\Marriage entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('TefNetwebAncestryBundle:Ancestry/Marriage:edit.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Ancestry\Marriage entity.
     *
     * @param Marriage $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Marriage $entity)
    {
        $form = $this->createForm(new MarriageType(), $entity, array(
            'action' => $this->generateUrl('marriage_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Ancestry\Marriage entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('TefNetwebAncestryBundle:Ancestry\Marriage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ancestry\Marriage entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('marriage_edit', array('id' => $id)));
        }

        return $this->render('TefNetwebAncestryBundle:Ancestry/Marriage:edit.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Ancestry\Marriage entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('TefNetwebAncestryBundle:Ancestry\Marriage')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Ancestry\Marriage entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('marriage'));
    }
}
