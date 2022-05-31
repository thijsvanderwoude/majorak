<?php
/*
 * majorak/Component/Payload.php
 * -----------
 * blabla
 */

namespace Majorak\Component;

class Payload {
    public $stack = [];

    public function addItem($item) {
        $this->stack += $item;
    }

    public function getItem($item) {
        return $this->stack[$item];
    }

    public function removeItem($item) {
        unset($stack[$item]);
    }
}

?>
