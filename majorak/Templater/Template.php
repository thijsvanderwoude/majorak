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
        $this->setContent($content);
    }

    function __toString() {
        return $this->content;
    }

    public function getContent() {
        return $this->content;
    }

    public function setContent(string $content = "") {
        $this->content = $content;
        return $this;
    }

    public function appendContent(string $content = "") {
        $this->content .= $content;
        return $this;
    }
}

?>
