<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://rkloppenburg.gc-webhosting.nl/theme/style/style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha3e.-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .search-container form input {
            margin-left: 400px;
            width: 500px;
        }

        #shop {
            padding-left: 130px;
            font-size: 30px;
        }

        .shop {
            border: none;
            background-color: white;
            width: 10px;
            height: 34px;
        }
    </style>
</head>
<body>
<header id="header">
    <div class="container">
        <div class="container" >
            <div id="logo" class="pull-left">
                <h1><i class="fas fa-bicycle"></i><a href="https://rkloppenburg.gc-webhosting.nl/?page=index.php" class="scrollto">My_Bicycle</a></h1>
            </div>
        </div>
        <div class="search-container">
            <form action="#">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
                <button type="submit" class="shop"><i id="shop" class="fas fa-shopping-basket"></i></button>
            </form>
        </div>
        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li><a style="padding-right: 160px">Ga is lekker fietsen man!!</a></li>
                <?php
                if($_SESSION['logged_in']) {
                    ?>
                    <li><a href="https://rkloppenburg.gc-webhosting.nl/?page=loguit">Loguit</a></li>
                    <?php
                } else {
                    ?>
                    <li <?php if ($_GET['page'] == "login") {
                        echo 'class="menu-active"';
                    } ?>><a href="https://rkloppenburg.gc-webhosting.nl/?page=login">Log in</a></li>
                    <?php
                }
                ?>
                <li <?php if($_GET['page'] == "main_categorie"){echo 'class="menu-active"';}?>><a href="https://rkloppenburg.gc-webhosting.nl/?page=main_categorie">Mannen fietsen</a></li>
                <li><a href="https://rkloppenburg.gc-webhosting.nl/?page=main_categorie">Vrouwen fietsen</a></li>
                <li><a href="https://rkloppenburg.gc-webhosting.nl/?page=main_categorie">Kinder fietsen</a></li>
                <li><a href="">Account</a></li>
                <li><a href="https://rkloppenburg.gc-webhosting.nl/?page=OverOns">Over ons</a></li>
                <li><a href="">Niewsbrief</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->


    </div>
</header><!-- #header -->
