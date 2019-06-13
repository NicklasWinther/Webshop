<?php
$title = "Opret bruger";
$metaDescription = "Opret dig som bruger her";
require "header.php";

if (isset($_SESSION['username'])) {
    header("location: index.php");
}
?>

<main>
    <form action="" method="post">
        <label for="registerUsername">Brugernavn</label>
        <input type="text" id="registerUsername" name="registerUsername" placeholder="Indtast brugernavn" required>

        <label for="registerPassword">Password</label>
        <input type="password" id="registerPassword" name="registerPassword" placeholder="Indtast password" required>

        <label for="registerPassword2">Gentag password</label>
        <input type="password" id="registerPassword2" name="registerPassword2" placeholder="gentag password" required>

        <input type="submit" value="Opret bruger">
    </form>


    <?php
    if (isset($_POST['registerUsername'])) {
        $registerUsername = $_POST['registerUsername'];
        $registerPassword = $_POST['registerPassword'];
        $registerPassword2 = $_POST['registerPassword2'];

        require "assets/connect.php";
        $statement = $dbh->prepare("SELECT * FROM users WHERE dbUsername = ?");
        $statement->bindParam(1, $registerUsername);
        $statement->execute();

        if ($row = $statement->fetch()) {
            echo "<p>Fejl - Der findes allerede en bruger med det navn!</p>";
        } elseif ($registerPassword != $registerPassword2) {
            echo "<p>Fejl - passwords var ikke ens</p>";
        } else {
            $statement = $dbh->prepare("INSERT INTO users(dbUsername, dbPassword) VALUES(?, ?)");
            $statement->bindParam(1, $registerUsername);
            $statement->bindParam(2, $registerPassword);
            $statement->execute();
            echo "<p>Success - Bruger oprettet!</p>";
        }
    }
    echo "</main>";

    require "footer.php";
    ?>