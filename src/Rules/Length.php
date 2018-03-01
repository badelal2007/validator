<?php


namespace validator\Rules;


use validator\Arguments;
use validator\Rules\Contracts\RuleInterface;

/**
 * Class Length
 *
 * @package validator\Rules
 */
class Length implements RuleInterface
{

    /**
     * @param $field
     * @param $value
     * @param Arguments $args
     * @return mixed
     */
    public function validate($field, $value, Arguments $args)
    {
        $vars     = $args->getVariables();
        $operator = @$vars[ 0 ];
        $length   = @$vars[ 1 ];

        if (is_numeric($operator)) {
            $length   = $operator;
            $operator = "=";
        }

        return version_compare(strlen($value), $length, $operator);
    }

    /**
     * @return mixed
     */
    public function message()
    {
        return '{field} must match the requirements';
    }
}
