<?php

namespace validator\Rules;


use validator\Arguments;
use validator\Rules\Contracts\RuleInterface;

/**
 * Class AlNum
 *
 * @package validator\Rules
 */
class AlNum implements RuleInterface
{

    /**
     * @param $field
     * @param $value
     * @param Arguments $args
     * @return mixed
     */
    public function validate($field, $value, Arguments $args)
    {
        if (preg_match('#^([a-zA-Z0-9\s])+$#', $value)) {
            return true;
        }
        return false;
    }

    /**
     * @return mixed
     */
    public function message()
    {
        return '{field} must be alpha numeric';
    }
}