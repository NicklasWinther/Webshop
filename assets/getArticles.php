<?php
require_once "connect.php";
$statement = $dbh->prepare("SELECT * FROM products JOIN users ON products.authorId = users.userId");
$statement->execute();

while ($row = $statement->fetch(PDO::FETCH_ASSOC)) { ?>
    <article>
        <h2><?php echo $row['title'] ?></h2>
        <img src="img/<?php echo $row['imgUrl'] ?>" alt="<?php echo $row['imgAlt'] ?>" onerror="this.src='img/placeholder.jpg'">
        <p><?php echo $row['text'] ?></p>
        <p><span>Pris: </span><?php echo $row['price'] ?> kr.</p>
        <p><span>Kategori: </span><?php echo $row['category'] ?></p>
        <p><span>Dato: </span><?php echo date("d/m-Y h:m", $row['date']) ?></p>
        <p><span>Oprettet af: </span><?php echo $row['dbUsername'] ?></p>
        <?php
        if (isset($_SESSION['accessLevel'])) {
            if ($_SESSION['accessLevel'] == 1 || ($_SESSION['accessLevel'] == 2 && $row['userId'] == $_SESSION['id'])) {
                echo "<a class='delete' title='DELETE' href='assets/deleteArticle.php?id=" . $row['productId'] . "'>&#10006</a>";
            }
        }
        ?>
        <button>KØB</button>
    </article>
    <?php
    $pdh = null;
}
?>