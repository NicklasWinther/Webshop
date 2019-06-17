<?php
session_start();
if (isset($_SESSION['username'])) {
    if ($_SESSION['accessLevel'] == 1 || ($_SESSION['accessLevel'] == 2 && $row['userId'] == $_SESSION['id'])) {
        $id = $_GET["id"];
        require_once "connect.php";

        $statement = $dbh->prepare("DELETE FROM products WHERE productId = ?");
        $statement->bindParam(1, $id);
        $statement->execute();
        $dbh = null;
        header("location: ../index.php");
    } else {
        header("location: ../index.php");
    }
}
