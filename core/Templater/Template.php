<?php
/*
 * Template.php
 * -----------
 * Template class that allows for easy template building.
 */

namespace Majorak\Templater;

class Template {
    protected $content;

    function __construct(string $content = "") {
        $this->content = $content;
    }
}

?>
