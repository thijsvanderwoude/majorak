<?php
/*
 * majorak/Component/Domain.php
 * -----------
 * blabla
 */

namespace Majorak\Component;

class Domain {
    protected $request;

    public function __construct(\Majorak\Http\Request $request) {
        $this->request = $request;
    }
}

?>
