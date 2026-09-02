<?php

class DigitalBook extends Book
{
    private $fileSize;

    public function __construct($title, $author, $fileSize)
    {
        parent::__construct($title, $author);

        $this->fileSize = $fileSize;
    }

    public function getInfo()
    {
        return parent::getInfo() .
               " | Ukuran File: " . $this->fileSize;
    }

    public function downloadBook()
    {
        return "Buku digital \"" .
               $this->getTitle() .
               "\" berhasil diunduh.";
    }

    public function getFileSize()
    {
        return $this->fileSize;
    }
}

?>