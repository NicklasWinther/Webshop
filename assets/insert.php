<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    $text = $_POST['text'];
    $category = $_POST['category'];
    $imgUrl = $_POST['imgUrl'];
    $imgAlt = $_POST['imgAlt'];
    $price = $_POST['price'];
    $date = time();

    session_start();
    $authorId = $_SESSION['id'];
    require_once "connect.php";

    $statement = $dbh->prepare("INSERT INTO products (title, text, category, authorId, imgUrl, imgAlt, price, date)
VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
    $statement->bindParam(1, $title);
    $statement->bindParam(2, $text);
    $statement->bindParam(3, $category);
    $statement->bindParam(4, $authorId);
    $statement->bindParam(5, $imgUrl);
    $statement->bindParam(6, $imgAlt);
    $statement->bindParam(7, $price);
    $statement->bindParam(8, $date);
    $statement->execute();

    header("location: ../shop.php");
} else {
    header("location: ../shop.php");
}
