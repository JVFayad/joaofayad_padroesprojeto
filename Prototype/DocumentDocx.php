<?php

require_once('Document.php');

class DocumentDocx extends Document {

    # Construtor protegido
    protected function __construct (DocumentDocx $document) {

    }

    # Nova instância
    public function clone () {
        return new DocumentDocx();
    }

}

?>