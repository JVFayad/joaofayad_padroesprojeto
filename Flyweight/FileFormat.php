<?php

require_once('FileType.php');
require_once('File.php');

class FileFormat extends FileType {

    protected $file;

    public function __construct(String $fileName) {
        $this->file = new File($fileName);
    }

    public function moveFile(Point $point) {
        $this->file->moveFile();
        echo "to point " + $point->getX() + " ," + $point->getY();
    }

}

?>