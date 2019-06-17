<?php
$title = "Forside";
$metaDescription = "Jeg sælger frugt og så'n";
require "header.php";
?>
<main>
    <h2>Nyeste produkter</h2>
    <hr>
    <div class="products">
        <?php require "assets/getLatestArticles.php" ?>

    </div>
</main>
<?php require "footer.php" ?>