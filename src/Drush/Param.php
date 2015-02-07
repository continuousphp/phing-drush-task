<?php
/**
 * Param.php
 *
 * @date        07/02/2015
 * @author      Frederic Dewinne <frederic@continuousphp.com>
 * @copyright   Copyright (c) 2015 continuousphp (http://continuousphp.com)
 * @file        Param.php
 * @link        http://github.com/continuousphp/phing-drush-task for the canonical source repository
 * @license     http://opensource.org/licenses/MIT MIT License
 */

namespace Drush;

/**
 * Param
 * A Drush CLI parameter.
 *
 * @package     Drush
 * @author      Frederic Dewinne <frederic@continuousphp.com>
 * @license     http://opensource.org/licenses/MIT MIT License
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