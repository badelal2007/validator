<?php

namespace validator\Rules\Contracts;

use validator\Arguments;

/**
 * Interface RuleContract
 *
 * @package validator\Rules\Contracts
 */
interface RuleInterface
{
    /**
     * @param $field
     * @param $value
     * @param Arguments $args
     * @return mixed
     */
    public function validate($field, $value, Arguments $args);

    /**
     * @return mixed
     */
    public function message();
}