<?php
/*
 * majorak/Component/DomainPayload.php
 * -----------
 * blabla
 */

namespace Majorak\Component;

class DomainPayload {
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
