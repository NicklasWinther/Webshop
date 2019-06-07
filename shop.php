<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">
    <title>Webshop</title>
</head>

<body>
    <div class="wrapper">
        <aside>
            <img src="img/logo.png" alt="">
            <nav>
                <ul>
                    <li><a href="index.php">Forside</a></li>
                    <li><a href="shop.php" class="active">Shop</a></li>
                    <li><a href="#">Garanti</a></li>
                    <li><a href="#">Om os</a></li>
                    <li><a href="#">Kontak</a></li>
                    <li><a href="#">Log ind</a></li>
                    <li><a href="#">Opret bruger</a></li>
                </ul>
            </nav>
        </aside>
        <div class="container">
            <header>
                <div class="top">
                    <div class="social">
                        <a href="http://"><i class="fab fa-facebook-f"></i></a>
                        <a href="http://"><i class="fab fa-instagram"></i></a>
                        <a href="http://"><i class="fab fa-twitter"></i></a>
                        <a href="http://"><i class="fab fa-youtube"></i></a>
                    </div>
                    <div class="basket">
                        <a href="#">Min konto</a>

                        <a href="#"><i class="fas fa-shopping-cart"></i> Min kurv</a>
                    </div>
                </div>
                <img src="img/header.jpg" alt="">
            </header>
            <h1>Velkommen til min frugt og grøntbutik!</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quaerat autem est, rem at voluptatum explicabo optio consequatur molestias qui neque saepe labore, voluptas, accusantium esse eius. Perferendis, et cum.
                Ducimus animi eligendi reiciendis, doloribus aliquam ratione tempore omnis porro mollitia possimus error atque laborum dolores necessitatibus fugiat voluptas magnam natus voluptate unde veniam tenetur similique impedit! Quaerat, veritatis sed!
                Sunt accusamus asperiores animi molestias explicabo omnis molestiae.</p>
            <main>
                <h3>Kategori</h3>
                <select name="" id="">
                    <option value="">-</option>
                    <option value="">Frugt</option>
                    <option value="">Grønt</option>
                </select>
                <div class="products">
                    <?php require "getArticles.php" ?>
                </div>
            </main>
        </div>
    </div>
    <footer>
        <article>
            <p><a href="#">Kundeservice</a></p>
            <p><a href="#">Handelsbetingelser</a></p>
            <p><a href="#">Firsk frugt</a></p>
            <p><a href="#">FAQ</a></p>
        </article>
        <article>
            <p><a href="#">Presse</a></p>
            <p><a href="#">Kontakt</a></p>
            <p>Følg os:</p>
            <p><a href="#">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-youtube"></i>
                </a></p>
        </article>
        <form action="">
            <p>Nyhedsbrev</p>
            <input type="text" placeholder="Fornavn" required><br>
            <input type="text" placeholder="Efternavn" required><br>
            <input type="text" placeholder="Email" required><br>
            <input type="submit" value="Tilmeld">
        </form>
        <article>
            <p>"INDSÆT NAVN HER" - Sindalvej 81, 9981 Jerup</p>
            <p>- lavet af en vildt dygtig frontend-udvikler!</p>
        </article>
    </footer>
    <script src="js/script.js"></script>
</body>

</html>