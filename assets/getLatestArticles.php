<?php
require_once "connect.php";
$statement = $dbh->prepare("SELECT * FROM products JOIN users ON products.authorId = users.userId ORDER BY products.date DESC LIMIT 3");
$statement->execute();

while ($row = $statement->fetch(PDO::FETCH_ASSOC)) { ?>
    <article>
        <h2><?php echo $row['title'] ?></h2>
        <img src="img/<?php echo $row['imgUrl'] ?>" alt="<?php echo $row['imgAlt'] ?>" onerror="this.src='img/placeholder.jpg'">
        <p><?php echo $row['text'] ?></p>
        <p><span>Pris: </span><?php echo $row['price'] ?> kr.</p>
        <?php
        if (isset($_SESSION['accessLevel'])) {
            if ($_SESSION['accessLevel'] == 1) {
                echo "<a class='delete' title='DELETE' href='deleteArticle.php?id=" . $row['productId'] . "'>&#10006</a>";
            } elseif ($_SESSION['accessLevel'] == 2 && $row['userId'] == $_SESSION['id']) {
                echo "<a class='delete' title='DELETE' href='deleteArticle.php?id=" . $row['productId'] . "'>&#10006</a>";
            }
        }
        ?>
        <button>KØB</button>
    </article>
<?php
}
?>