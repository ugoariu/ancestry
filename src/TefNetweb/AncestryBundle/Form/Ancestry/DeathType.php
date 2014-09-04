<?php
/**
 *
 * released under the terms of the gpl2 licence
 * you can get a copy of the licence from http://www.gnu.org/licenses/gpl-2.0.txt
 * @author Ugo Ariu <ugoariu@gmail.com>
 *
 */
namespace TefNetweb\AncestryBundle\Form\Ancestry;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DeathType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $param = array(
            'years' => range(1400, (new \DateTime ())->format("Y"))
        );
        $param['horizontal_input_wrapper_class'] = 'col-sm-3';
        $param['horizontal_label_class'] = 'col-sm-3';
        $param['horizontal'] = 'row-sm';

        $width['horizontal_input_wrapper_class'] = 'col-sm-9';
        $width['horizontal_label_class'] = 'col-sm-3';
        $width['horizontal'] = 'row-sm';

        $p['horizontal_input_wrapper_class'] = 'col-lg-4';
        $p['horizontal_label_class'] = 'col-sm-4';
        $p['horizontal'] = 'row-sm';
        $builder
            ->add('deathDate', 'date', array_merge($param, ['widget' => 'text', 'format' => 'ddMMyyyy']))
            ->add('deathTime', 'time', array_merge($p, ['required' => false]))
            ->add('registrationDate', 'date', array_merge($param, ['widget' => 'text', 'format' => 'ddMMyyyy']))
            ->add('DeathPlace', null, $width)
            ->add('Parish', null, $width)
            ->add('probandSurname', null, $width)
            ->add('probandName', null, $width)
            ->add('probandName2', null, $width)
            ->add('probandName3', null, $width)
            ->add('probandSex', 'choice', AncestryFieldHelper::getSexChoiceWidgetArrayExpression($width))
            ->add('probandStatus', 'choice', AncestryFieldHelper::getDefaultMaritalStatusWidgetArrayExpression($width))
            ->add('probandAge', null, $width)
            ->add('birthDate', 'date', array_merge($param, ['widget' => 'text', 'format' => 'ddMMyyyy']))
            ->add('probandBirthPlace', null, $width)
            ->add('probandResidence', null, $width)
            ->add('probandResidenceParish', null, $width)
            ->add('probandProfession', null, $width)
            ->add('fatherSurname', null, $width)
            ->add('fatherName', null, $width)
            ->add('fatherName2', null, $width)
            ->add('fatherName3', null, $width)
            ->add('IsFatherDead', null, $width)
            ->add('fatherAge', null, $width)
            ->add('fatherStatus', 'choice', AncestryFieldHelper::getDefaultMaritalStatusWidgetArrayExpression($width))
            ->add('fatherResidence', null, $width)
            ->add('fatherProfession', null, $width)
            ->add('motherSurname', null, $width)
            ->add('motherName', null, $width)
            ->add('motherName2', null, $width)
            ->add('motherName3', null, $width)
            ->add('IsMotherDead', null, $width)
            ->add('motherAge', null, $width)
            ->add('motherStatus', 'choice', AncestryFieldHelper::getDefaultMaritalStatusWidgetArrayExpression($width))
            ->add('motherResidence', null, $width)
            ->add('motherProfession', null, $width)
            ->add('notes', null, $width);
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TefNetweb\AncestryBundle\Entity\Ancestry\Death',
            'translation_domain' => 'messages'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tefnetweb_ancestrybundle_ancestry_death';
    }
}
