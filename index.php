<?php

require_once "Book.php";
require_once "Member.php";
require_once "DigitalBook.php";

$book1 = new Book("Doraemon", "Dhawi");
$book2 = new Book("Bolang", "Tambem");

$book3 = new DigitalBook(
    "Algoritma dan Struktur Data",
    "Budi Santoso",
    "5 MB"
);

$member1 = new Member("Andi", "M001");

echo "=== INFORMASI BUKU ===<br>";

echo $book1->getInfo() . "<br>";
echo $book2->getInfo() . "<br>";
echo $book3->getInfo() . "<br>";

echo "<br>=== INFORMASI MEMBER ===<br>";

echo $member1->getInfo() . "<br>";

echo "<br>=== SIMULASI PEMINJAMAN ===<br>";

echo $member1->borrowBook($book1) . "<br>";

echo "Buku yang sedang dipinjam: " .
     $member1->getBorrowedBook() . "<br>";

echo "<br>=== SIMULASI DIGITAL BOOK ===<br>";

echo $book3->downloadBook() . "<br>";

echo "Ukuran file: " .
     $book3->getFileSize();

?>