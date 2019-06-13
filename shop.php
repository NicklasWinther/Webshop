<?php
$title = "Shop";
$metaDescription = "Her kan du købe alt mit frugt og så'n";
require "header.php" ?>
<main>
    <?php if (isset($_SESSION['username'])) { ?>
        <form action="assets/insert.php" method="post">
            <label for="title">Titel</label>
            <input type="text" id="title" name="title" placeholder="Titel" required>

            <label for="imgUrl">Billedets URL</label>
            <input type="text" id="imgUrl" name="imgUrl" placeholder="Url" required>

            <label for="imgAlt">Billedets alttekst</label>
            <input type="text" id="imgAlt" name="imgAlt" placeholder="Alt" required>

            <label for="text">Brødtekst</label>
            <textarea type="text" id="text" name="text" placeholder="Brødtekst" required></textarea>

            <label for="price">Pris</label>
            <input type="text" id="price" name="price" placeholder="Pris" required>

            <label for="category">Kategori</label>
            <select id="category" name="category" required>
                <option value="Frugt">Frugt</option>
                <option value="Grønt">Grønt</option>
            </select>

            <input type="submit" value="Opret produkt">
        </form>
    <?php } ?>
    <h3>Kategori</h3>
    <select name="" id="">
        <option value="">-</option>
        <option value="">Frugt</option>
        <option value="">Grønt</option>
    </select>
    <div class="products">
        <?php require "assets/getArticles.php" ?>
    </div>
</main>
<?php require "footer.php" ?>