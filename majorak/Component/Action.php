<?php
/*
 * majorak/Component/Action.php
 * -----------
 * blabla
 */

namespace Majorak\Component;

class Action {
    protected $request;

    public function __construct(
        \Majorak\Http\Request $request
    ) {
        $this->request = $request;
    }
}

?>
