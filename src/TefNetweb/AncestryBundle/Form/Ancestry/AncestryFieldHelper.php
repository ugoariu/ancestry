<?php
/**
 *
 * released under the terms of the gpl2 licence
 * you can get a copy of the licence from http://www.gnu.org/licenses/gpl-2.0.txt
 * @author Ugo Ariu <ugoariu@gmail.com>
 *
 */
namespace TefNetweb\AncestryBundle\Form\Ancestry;

class AncestryFieldHelper
{
    /**
     * @param array $merge_into
     * @return array
     */
    public static function getDefaultMaritalStatusWidgetArrayExpression(array $merge_into)
    {

        return array_merge($merge_into,
            ['required' => false],
            ['empty_value' => '-- not set --',
                'empty_data' => null],
            ['choices' => self::getMaritalStatusChoices(),
                'multiple' => false,
                'expanded' => true
            ]);
    }

    /**
     * the function returns the set of marital status states
     * useful for translation from controllers
     * @return array marital status choices
     */
    public static function getMaritalStatusChoices()
    {
        return array(
            0 => 'Not Married',
            1 => 'Married',
            2 => 'Widowed',
            3 => 'Divorced');
    }

    /**
     * @param array $merge_into
     * @return array
     */
    public static function getSexChoiceWidgetArrayExpression(array $merge_into)
    {
        return array_merge($merge_into,
            ['choices' => self::getSexChoices(),
                'multiple' => false,
                'expanded' => true
            ],
            ['data' => 'm']
        );
    }

    /**
     * note: it may be resemble superfluous but it turns very helpful for translations when
     * i have a language whose sex do not start with m or f (en it fr do but other languages do not)
     * function returns sex choices
     * @return array
     */
    public static function getSexChoices()
    {
        return array(
            'm' => 'Male',
            'f' => 'Female');
    }

    /**
     * @param array $merge_into
     * @return array
     */
    public static function getBirthExitusChoiceWidgetArrayExpression(array $merge_into)
    {

        return array_merge($merge_into,
            ['required' => true],
            ['choices' => self::getBirthExitusChoices(),
                'multiple' => false,
                'expanded' => true
            ],
            ['data' => 1]);
    }

    /**
     * function returns the choices for the birth exitus field to being used for translation
     * @return array
     */
    public static function getBirthExitusChoices()
    {
        return array(
            '1' => 'Live Born',
            '0' => 'Still Born',
            '2' => 'Spontaneous Abortion');
    }
}
