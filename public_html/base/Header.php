<?php
/**
 * Created by PhpStorm.
 * User: jiand
 * Date: 21-5-2019
 * Time: 08:53
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Scrum.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha3e.-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- zoekbal plaatje -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .search-container form input
        {

            margin-left: 400px;
            width: 500px;
        }

        #shop
        {
            padding-left: 130px;
            font-size: 30px;
        }

        .shop
        {
            border:none;
            background-color: white;
            width: 10px;
            height: 34px;
        }

    </style>
</head>
<body>
<header id="header">
    <div class="container">
        <div class="container">
            <div id="logo" class="pull-left">
                <h1> <i class="fas fa-bicycle"></i><a href="#intro" class="scrollto">My_Bicycle</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
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
                <li class="menu-active"><a href="">Log in</a></li>
                <li><a href="">Mannen fietsen</a></li>
                <li><a href="">Vrouwen fietsen</a></li>
                <li><a href="">Kinder fietsen</a></li>
                <li><a href="">Account</a></li>
                <li><a href="">Over ons</a></li>
                <li><a href="">Niewsbrief</a> </li>
            </ul>
        </nav><!-- #nav-menu-container -->



    </div>
</header><!-- #header -->


</body>
</html>
