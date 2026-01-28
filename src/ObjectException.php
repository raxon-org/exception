<?php
/**
 * @author          Remco van der Velde
 * @since           2026-01-28
 * @copyright       (c) Remco van der Velde
 * @license         MIT
 * @version         1.0
 */
namespace Exception;
use Exception;

class ObjectException extends Exception {


    public function __toString()
    {
        $string = parent::__toString();
        $string .= PHP_EOL;
        $string .= $this->getMessage();

        $string .= PHP_EOL;
        return $string;
    }

}
