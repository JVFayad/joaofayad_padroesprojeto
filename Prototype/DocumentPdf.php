<?php

require_once('Document.php');

class DocumentPdf extends Document {

    # Construtor protegido
    protected function __construct (DocumentPdf $document) {
        
    }

    # Nova instância
    public function clone () {
        return new DocumentPdf();
    }

}

?>