<!DOCTYPE html>
<html lang="en">
<head>
    <!--    <link rel="stylesheet" href="Style/Scrum.css">-->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha3e.-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- zoekbal plaatje -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        /*begin css header*/
        #header.header-scrolled {
            background: #fff;
            padding: 20px 0;
            height: 72px;
            transition: all 0.5s;
        }

        #header {
            padding-top: 20px;
            padding-right: 350px;
            height: 92px;
            left: 0;
            top: 0;
            right: 0;
            transition: all 0.5s;
            z-index: 997;
            background-color: #fff;
            box-shadow: 5px 0px 15px #c3c3c3;
        }

        #header #logo h1 {
            font-size: 34px;
            margin: 0;
            padding: 0;
            line-height: 1;
            font-family: "Montserrat", sans-serif;
            font-weight: 700;
            letter-spacing: 3px;
        }

        #header #logo h1 a, #header #logo h1 a:hover {
            color: #000;
            font-size: 30px;
            padding-left: 10px;
            border-left: 4px solid #18d26e;
        }

        #nav-menu-container {
            float: right;
            margin: 0;
        }

        .nav-menu > li {
            padding-top: 0px;
            margin-left: 10px;
            position: relative;
            white-space: nowrap;
            float: left;
        }

        .nav-menu, .nav-menu * {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .header-scrolled .nav-menu li:hover > a, .header-scrolled .nav-menu > .menu-active > a {
            color: #18d26e;
        }

        .header-scrolled .nav-menu a {
            color: black;
        }

        .nav-menu li:hover > a, .nav-menu > .menu-active > a {
            color: #18d26e;
        }

        .nav-menu a {
            text-decoration: none;
            display: inline-block;
            color: #000;
            font-family: "Montserrat", sans-serif;
            font-weight: 700;
            font-size: 14px;
            text-transform: uppercase;
            outline: none;
            padding-left: 0px;
            padding-top: 10px;;
        }

        #mobile-nav-toggle {
            display: inline;
        }

        #mobile-nav-toggle {
            position: fixed;
            right: 0;
            top: 0;
            z-index: 999;
            margin: 20px 20px 0 0;
            border: 0;
            background: none;
            font-size: 24px;
            display: none;
            transition: all 0.4s;
            outline: none;
            cursor: pointer;
        }

        #mobile-body-overly {
            width: 100%;
            height: 100%;
            z-index: 997;
            top: 0;
            left: 0;
            position: fixed;
            background: rgba(0, 0, 0, 0.7);
            display: none;
        }

        body.mobile-nav-active #mobile-nav {
            left: 0;
        }

        #mobile-nav {
            position: fixed;
            top: 0;
            padding-top: 18px;
            bottom: 0;
            z-index: 998;
            background: rgba(0, 0, 0, 0.8);
            left: -260px;
            width: 260px;
            overflow-y: auto;
            transition: 0.4s;
        }

        #mobile-nav ul {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        #mobile-nav ul li {
            position: relative;
        }

        #mobile-nav ul li a {
            color: #fff;
            font-size: 13px;
            text-transform: uppercase;
            overflow: hidden;
            padding: 10px 22px 10px 15px;
            position: relative;
            text-decoration: none;
            width: 100%;
            display: block;
            outline: none;
            font-weight: 700;
            font-family: "Montserrat", sans-serif;
        }

        #mobile-nav ul .menu-has-children i.fa-chevron-up {
            color: #18d26e;
        }

        #mobile-nav ul .menu-has-children i {
            position: absolute;
            right: 0;
            z-index: 99;
            padding: 15px;
            cursor: pointer;
            color: #fff;
        }

        #mobile-nav ul .menu-item-active {
            color: #18d26e;
        }

        #mobile-nav ul li li {
            padding-left: 30px;
        }

        .menu-has-children ul {
            display: none;
        }


        @media (max-width: 768px) {
            #nav-menu-container {
                display: none;
            }

            #mobile-nav-toggle {
                display: inline;
            }
        }

        /*end css header*/

        .search-container form input {

            margin-left: 90px;
            width: 500px;
        }

    </style>
</head>
<body>
<header>
    <div id="header">
        <div class="container">
            <div class="container">
                <div id="logo" class="pull-left">
                    <h1><i class="fas fa-bicycle"></i><a href="#intro" class="scrollto">Haas_Bicycle</a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
                </div>
            </div>
            <div class="search-container">
                <form action="#">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="">Log in</a></li>
                    <li><a href="">Mannen fietsen</a></li>
                    <li><a href="">Vrouwen fietsen</a></li>
                    <li><a href="">Kinder fietsen</a></li>
                    <li><a href="">Account</a></li>
                    <li><a href="">Over ons</a></li>
                    <li><a href="">Niewsbrief</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->


        </div>
    </div><!-- #header -->
</header>


</body>
</html>