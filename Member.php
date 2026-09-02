<?php

class Member
{
    protected $name;
    protected $memberId;
    private $borrowedBook;

    public function __construct($name, $memberId)
    {
        $this->name = $name;
        $this->memberId = $memberId;
        $this->borrowedBook = null;
    }

    public function getInfo()
    {
        return "Nama: " . $this->name .
               " | ID Member: " . $this->memberId;
    }

    public function borrowBook($book)
    {
        if ($this->borrowedBook == null) {

            $this->borrowedBook = $book;

            return $this->name .
                   " berhasil meminjam buku \"" .
                   $book->getTitle() . "\".";
        }

        return $this->name .
               " masih memiliki buku yang sedang dipinjam.";
    }

    public function getBorrowedBook()
    {
        if ($this->borrowedBook != null) {
            return $this->borrowedBook->getTitle();
        }

        return "Tidak ada buku yang sedang dipinjam.";
    }

    public function getMemberId()
    {
        return $this->memberId;
    }
}

?>