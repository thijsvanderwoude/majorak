<?php
/*
 * majorak/Component/Action.php
 * -----------
 * blabla
 */

namespace Majorak\Component;

class Action {
    protected $domain, $responder;

    public function __construct(
        \Majorak\Component\Domain $domain,
        \Majorak\Component\Responder $responder
    ) {
        $this->domain = $domain;
        $this->responder = $responder;
    }
}

?>
