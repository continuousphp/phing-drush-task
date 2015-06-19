<?php
/**
 * Option.php
 *
 * @date        07/02/2015
 * @author      Frederic Dewinne <frederic@continuousphp.com>
 * @copyright   Copyright (c) 2015 continuousphp (http://continuousphp.com)
 * @file        Option.php
 * @link        http://github.com/continuousphp/phing-drush-task for the canonical source repository
 * @license     http://opensource.org/licenses/MIT MIT License
 */

namespace Drush;

/**
 * Option
 * A Drush CLI option.
 *
 * @package     Drush
 * @author      Frederic Dewinne <frederic@continuousphp.com>
 * @license     http://opensource.org/licenses/MIT MIT License
 */
class Option {

    /**
     * @var string The option's name.
     */
    protected $name;

    /**
     * @var string The option's value.
     */
    protected $value;

    /**
     * Set the option's name.
     *
     * @param string $str
     *   The option's name.
     */
    public function setName($str) {
        $this->name = (string) $str;
    }

    /**
     * Get the option's name.
     *
     * @return string
     *   The option's name.
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set the option's value.
     *
     * @param string $str
     *   The option's value.
     */
    public function setValue($str) {
        $this->value = $str;
    }

    /**
     * Set the option's value from a text element.
     *
     * @param string $str
     *   The value of the text element.
     */
    public function addText($str) {
        $this->value = (string) $str;
    }

    /**
     * Get the option's value.
     *
     * @return string
     *   The option's value.
     */
    public function getValue() {
        return $this->value;
    }

    /**
     * @{inheritdoc}
     */
    public function toString() {
        $name  = $this->getName();
        $value = $this->getValue();
        $str = '--' . $name;
        if (!empty($value)) {
            $str .= '="' . escapeshellcmd($value) . '"';
        }
        return $str;
    }

}