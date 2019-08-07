<?php

require_once('Document.php');

class DocumentPage extends Document {

    # Construtor protegido
    protected function __construct (DocumentPage $document) {
        
    }

    # Nova instância
    public function clone () {
        return new DocumentPage();
    }

}

?>