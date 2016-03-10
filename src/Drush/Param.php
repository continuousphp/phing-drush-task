<?php
/**
 * @file
 * Contains \Drush\Param
 */


namespace Drush;

/**
 * Param
 * Represents a Drush CLI parameter.
 */
class Param {

    /**
     * @var string The parameter's value.
     */
    protected $value;

    /**
     * Set the parameter value from a text element.
     *
     * @param mixed $str
     *   The value of the text element.
     */
    public function addText($str) {
        $this->value = (string) $str;
    }

    /**
     * Get the parameter's value.
     *
     * return string
     *   The parameter value.
     */
    public function getValue() {
        return $this->value;
    }

}
