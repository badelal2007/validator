<?php

namespace validator\Rules;

use validator\Arguments;
use validator\Rules\Contracts\RuleInterface;

/**
 * Class Boolean
 *
 * @package validator\Rules
 */
class Boolean implements RuleInterface
{

    /**
     * @param $field
     * @param $value
     * @param Arguments $args
     * @return mixed
     */
    public function validate($field, $value, Arguments $args)
    {
        if (!isset($args[ 'variables' ][ 0 ])) {
            return is_bool($value);
        }

        $expected = $args[ 'variables' ][ 0 ] == 'true' ? true : false;
        return $value === $expected;
    }

    /**
     * @return mixed
     */
    public function message()
    {
        return '{field} must be boolean';
    }
}