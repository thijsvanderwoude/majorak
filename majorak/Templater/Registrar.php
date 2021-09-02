<?php
/*
 * Template.php
 * ------------
 * Code that deals with templates and templating.
 */

namespace Majorak\Templater;

class Registrar {
    protected $array;

    public function registerTemplate(string $template, string $includePath) {
        if(array_key_exists($this->array, $template)) {
            echo "Template already registered: " . $template;
            die();
        } else {
            $this->array[$template] = $includePath;
            return $this;
        }
    }
}

?>
