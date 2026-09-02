<?php

require_once "Book.php";
require_once "Member.php";
require_once "DigitalBook.php";

// Object Book
$book1 = new Book("Doraemon", "Dhawi");
$book2 = new Book("Bolang", "Tambem");

// Object DigitalBook
$book3 = new DigitalBook(
    "Algoritma dan Struktur Data",
    "Budi Santoso",
    "5 MB"
);

// Object Member
$member1 = new Member("Andi", "M001");

echo "=== INFORMASI BUKU ===<br>";

echo $book1->getInfo() . "<br>";
echo $book2->getInfo() . "<br>";
echo $book3->getInfo() . "<br>";

echo "<br>";

echo "=== INFORMASI MEMBER ===<br>";

echo $member1->getInfo() . "<br>";

echo "<br>";

echo "=== SIMULASI PEMINJAMAN ===<br>";

echo $member1->borrowBook($book1) . "<br>";

echo "Buku yang sedang dipinjam: " .
     $member1->getBorrowedBook();

?>