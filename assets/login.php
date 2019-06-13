<?php
$formUsername = $_POST['formUsername'];
$formPassword = $_POST['formPassword'];

require_once 'connect.php';

$statement = $dbh->prepare("SELECT * FROM users WHERE dbUsername = ? && dbPassword = ?");
$statement->bindParam(1, $formUsername);
$statement->bindParam(2, $formPassword);
$statement->execute();

if (empty($row = $statement->fetch())) {
    //Forkert login
    $dbh = null;
    header("location: ../index.php");
} else {
    //Korrekt login
    session_start();
    $_SESSION['username'] = $row['dbUsername'];
    $_SESSION['accessLevel'] = $row['accessLevel'];
    $_SESSION['id'] = $row['userId'];
    $dbh = null;
    header("location: ../index.php");
}
