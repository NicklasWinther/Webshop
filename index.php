<?php
$title = "Forside";
$metaDescription = "Jeg sælger frugt og så'n";
require "header.php";
?>
<main>
    <h2>Nyeste produkter</h2>
    <hr>
    <div class="products">
        <article>
            <img src="img/loeg.jpg" alt="Løg">
            <p>En masse løg!</p>
            <p><span>Pris: </span>30 kr.</p>
            <button> KØB</button>
        </article>
        <article>
            <img src="img/melon.jpg" alt="Melon">
            <p>En enkelt skive melon!</p>
            <p><span>Pris: </span>2 kr.</p>
            <button> KØB</button>
        </article>
        <article>
            <img src="img/radiser.jpg" alt="Radiser">
            <p>Bunke radiser</p>
            <p><span>Pris: </span>20 kr.</p>
            <button> KØB</button>
        </article>
    </div>
</main>
<?php require "footer.php" ?>