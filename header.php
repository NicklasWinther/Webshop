<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php echo $metaDescription ?>">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">
    <title>Webshop | <?php echo $title ?></title>
</head>

<body>
    <div class="wrapper">
        <aside>
            <img src="img/logo.png" alt="">
            <nav>
                <ul>
                    <li><a href="index.php" <?php echo $title == "Forside" ? "class='active'" : ""; ?>>Forside</a></li>
                    <li><a href="shop.php" <?php echo $title == "Shop" ? "class='active'" : ""; ?>>Shop</a></li>
                    <li><a href="#">Garanti</a></li>
                    <li><a href="#">Om os</a></li>
                    <li><a href="#">Kontakt</a></li>
                    <?php if (isset($_SESSION['username'])) { ?>
                        <li><a href="assets/logout.php?url=<?php echo basename($_SERVER['PHP_SELF']) ?>">Log ud</a></li>
                    <?php } else { ?>
                        <li><a class="login">Log ind</a></li>
                        <li class="form">
                            <form action="assets/login.php?url=<?php echo basename($_SERVER['PHP_SELF']) ?>" method="post">
                                <label for="formUsername">Brugernavn</label><br>
                                <input type="text" name="formUsername" id="formUsername" placeholder="Brugernavn"><br>
                                <label for="formPassword">Adgangskode</label><br>
                                <input type="password" name="formPassword" id="formPassword" placeholder="Adgangskode"><br>
                                <input type="submit" value="Log ind">
                            </form>
                        </li>
                    <?php }
                if (!isset($_SESSION['username'])) { ?>
                        <li><a href="register.php" <?php echo $title == "Opret bruger" ? "class='active'" : ""; ?>>Opret bruger</a></li>
                    <?php } ?>
                </ul>
            </nav>
        </aside>
        <div class="container">
            <header>
                <div class="top">
                    <i class="fas fa-bars"></i>
                    <div class="social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                    <div class="basket">
                        <a href="#">Min konto</a>

                        <a href="#"><i class="fas fa-shopping-cart"></i> Min kurv</a>
                    </div>
                </div>
                <img src="img/header.jpg" alt="">
            </header>
            <h1>Velkommen <?php if (isset($_SESSION['username'])) {
                                echo $_SESSION['username'] . ", ";
                            } ?> til min frugt og grønt butik!</h1>
            <p>Lorem ipsum dolor sit amet consectetur adip isicing elit. Repudiandae quaerat autem est, rem at voluptatum explicabo optio consequatur molestias qui neque saepe labore, volu ptas, accusantium es se eius. Perferendis, et cum.
                Ducimus animi eligendi reiciendis, doloribus aliquam ratione tempore omnis porro mollitia possimus error atque laborum dolores necessitatibus fugiat voluptas magnam natus voluptate unde ve niam tenetur similique impedit Quaerat, veritatis sed!Suntaccus amus asperiores animi molestias explicabo omnis molestiae.</p>