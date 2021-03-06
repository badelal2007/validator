<?php

namespace validator\Rules;


use validator\Arguments;
use validator\Rules\Contracts\RuleInterface;

/**
 * Class Min
 *
 * @package validator\Rules
 */
class Min implements RuleInterface
{
    protected $message;

    /**
     * @param $field
     * @param $value
     * @param Arguments $args
     * @return mixed
     */
    public function validate($field, $value, Arguments $args)
    {
        $vars = $args->getVariables();

        if (!($value >= @$vars[ 0 ])) {
            $this->message = "{field} must be equal to or greater than " . $vars[ 0 ];
            return false;
        }

        return true;
    }

    /**
     * @return mixed
     */
    public function message()
    {
        return "{field} is not in required range";
    }
}