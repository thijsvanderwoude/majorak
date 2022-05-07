<?php

namespace App\Index;

use Majorak\Component\Domain;

class indexDomain extends Domain {
    public function execute() {
        echo $_SERVER["QUERY_STRING"];
    }
}

?>
