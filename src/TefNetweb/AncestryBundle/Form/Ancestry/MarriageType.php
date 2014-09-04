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

class MarriageType extends AbstractType
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

        $width['horizontal_input_wrapper_class'] = 'col-sm-9';
        $width['horizontal_label_class'] = 'col-sm-3';
        $builder
            ->add('husbandSurname', null, $width)
            ->add('husbandName', null, $width)
            ->add('husbandName2', null, $width)
            ->add('husbandName3', null, $width)
            ->add('husbandAge', null, $width)
            ->add('husbandStatus', 'choice', AncestryFieldHelper::getDefaultMaritalStatusWidgetArrayExpression($width))
            ->add('husbandBirthDate', 'date', array_merge($param, ['widget' => 'text', 'format' => 'ddMMyyyy']))
            ->add('husbandBirthPlace', null, $width)
            ->add('husbandParish', null, $width)
            ->add('husbandResidence', null, $width)
            ->add('husbandProfession', null, $width)
            ->add('husbandFatherSurname', null, $width)
            ->add('husbandFatherName', null, $width)
            ->add('husbandFatherName2', null, $width)
            ->add('husbandFatherName3', null, $width)
            ->add('husbandFatherAge', null, $width)
            ->add('husbandFatherStatus', 'choice', AncestryFieldHelper::getDefaultMaritalStatusWidgetArrayExpression($width))
            ->add('husbandFatherProfession', null, $width)
            ->add('husbandMotherSurname', null, $width)
            ->add('husbandMotherName', null, $width)
            ->add('husbandMotherName2', null, $width)
            ->add('husbandMotherName3', null, $width)
            ->add('husbandMotherAge', null, $width)
            ->add('husbandMotherStatus', 'choice', AncestryFieldHelper::getDefaultMaritalStatusWidgetArrayExpression($width))
            ->add('husbandMotherProfession', null, array_merge($width, ['required' => false]))
            ->add('wifeSurname', null, $width)
            ->add('wifeName', null, $width)
            ->add('wifeName2', null, $width)
            ->add('wifeName3', null, $width)
            ->add('wifeAge', null, $width)
            ->add('wifeStatus', 'choice', AncestryFieldHelper::getDefaultMaritalStatusWidgetArrayExpression($width))
            ->add('wifeBirthDate', 'date', array_merge($param, ['widget' => 'text', 'format' => 'ddMMyyyy']))
            ->add('wifeBirthPlace', null, $width)
            ->add('wifeParish', null, $width)
            ->add('wifeResidence', null, $width)
            ->add('wifeProfession', null, $width)
            ->add('wifeFatherSurname', null, $width)
            ->add('wifeFatherName', null, $width)
            ->add('wifeFatherName2', null, $width)
            ->add('wifeFatherName3', null, $width)
            ->add('wifeFatherAge', null, $width)
            ->add('wifeFatherStatus', 'choice', AncestryFieldHelper::getDefaultMaritalStatusWidgetArrayExpression($width))
            ->add('wifeFatherProfession', null, $width)
            ->add('wifeMotherSurname', null, $width)
            ->add('wifeMotherName', null, $width)
            ->add('wifeMotherName2', null, $width)
            ->add('wifeMotherName3', null, $width)
            ->add('wifeMotherAge', null, $width)
            ->add('wifeMotherStatus', 'choice', AncestryFieldHelper::getDefaultMaritalStatusWidgetArrayExpression($width))
            ->add('wifeMotherProfession', null, $width)
            ->add('marriageDate', 'date', array_merge($param, ['widget' => 'text', 'format' => 'ddMMyyyy']))
            ->add('marriageTime', 'time', array_merge(['horizontal_input_wrapper_class' => 'col-sm-4', 'horizontal_label_class' => 'col-sm-4'], ['required' => false]))
            ->add('registrationDate', 'date', array_merge($param, ['widget' => 'text', 'format' => 'ddMMyyyy']))
            ->add('marriagePlace', null, $width)
            ->add('marriageParish', null, $width)
            ->add('notes', null, $width);
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TefNetweb\AncestryBundle\Entity\Ancestry\Marriage',
            'translation_domain' => 'messages'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tefnetweb_ancestrybundle_ancestry_marriage';
    }
}
