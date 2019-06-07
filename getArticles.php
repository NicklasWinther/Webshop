<?php
require_once "connect.php";
$statement = $dbh->prepare("SELECT * FROM products");
$statement->execute();

while ($row = $statement->fetch()) { ?>
    <article>
        <h2><?php echo $row['title'] ?></h2>
        <img src="img/<?php echo $row['imgUrl'] ?>" alt="<?php echo $row['imgAlt'] ?>">
        <p><?php echo $row['text'] ?></p>
        <p><span>Pris: </span><?php echo $row['price'] ?> kr.</p>
        <p><span>Kategori: </span><?php echo $row['category'] ?></p>
        <p><span>Dato: </span><?php echo $row['date'] ?></p>
        <p><span>Oprettet af: </span><?php echo $row['authorId'] ?></p>
        <button>KØB</button>
    </article>
<?php
}
?>