<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsiveNavBar.css">
    <title>Legacy | <?php echo $title?></title>
</head>

<body>
    <header>
        <nav class="navbar hide">
            <div class="navcontent justify">
                <a href="" class="nav-logo">
                    <img src="images/logo.png" alt="logo">
                </a>
                <!--Burger Menu for Mobile, resize the screen to see it works-->
                <div class="burger navbar-toggle" id="js-navbar-toggle">
                    <div class="l1"></div>
                    <div class="l2"></div>
                    <div class="l3"></div>
                </div>
                <!--This where the nav bar menu list is -->
                <ul class="mainnav list-style-remove" id="menu">
                    <?php include'nav.html'?>
                </ul>
            </div>
        </nav>
    </header>
    <div class="banner">
        <img src="images/banner.png" alt="">
        <div class="banner-text">
            <p id="banner-text1">Education and sports for a better future</p><br>
            <!--<a id="banner-button" class="button" href="who-we-are.php">Who We Are</a><br>-->
            <p id="banner-text2">"You can't put a limit on anything, the more you dream the farther you get." Michael
                Phelps</p>
        </div>
    </div>