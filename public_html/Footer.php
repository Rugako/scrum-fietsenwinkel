<!DOCTYPE html>
<html lang="en">
<head>
    <title>Footer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <!--
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha3e.-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    -->
    <link rel="stylesheet" href="Style/Scrum.css">
    <link rel="script" href="Style/Scrum.css">
</head>
<style>
    /* footer  */

    body {
        font-family: 'Signika', sans-serif;
    }

    .bg-grey {
        padding: 30px 0;
        height: 260px;
        position: fixed;
        left: 0;
        top: 0;
        right: 0;
        transition: all 0.5s;
        z-index: 997;
        background-color: #fff;
        box-shadow: 5px 0px 15px #c3c3c3;
    }

    .logo-footer {
        margin-bottom: 40px;
    }

    footer {
        color: black;
    }

    footer p, a {
        font-size: 12px;
        font-family: 'Roboto', sans-serif;
    }

    footer h6 {
        font-family: 'Playfair Display', serif;
        margin-bottom: 40px;
        position: relative;
    }

    footer h6:after {
        position: absolute;
        content: "";
        background: #18d26e;
        width: 12%;
        height: 1px;
        left: 0;
        bottom: -20px;
    }

    .btn-footer {
        color: black;

        text-decoration: none;
        border: 1px solid #18d26e;
        border-radius: 43px;
        font-size: 13px;
        padding: 7px 30px;
        line-height: 47px;
    }

    .btn-footer:hover {

        text-decoration: none;

    }

    .form-footer input[type="text"] {
        border: 1px solid #18d26e;
        border-radius: 16px 0 0 16px;
        outline: none;
        padding-left: 0px;

    }

    ::placeholder {
        font-size: 10px;
        padding-left: 10px;
        font-style: italic;
    }

    .form-footer input[type="button"] {
        background: white;
        margin-left: -5px;
        outline: none;
        color: black;
        border: 1px solid #18d26e;
        border-radius: 0 16px 16px 0;
        padding: 1px 12px;
    }

    .social .fa {
        color: black;
        font-size: 22px;
        padding: 10px 15px;
        background: white;
        border: 1px solid #18d26e;
    }

    footer ul li {
        list-style: none;
        display: block;
    }

    footer ul {
        padding-left: 0;
    }

    footer ul li a {
        text-decoration: none;
        color: black;
    }

    a:hover {
        text-decoration: none;
        color: #f5f5f5 !important;

    }

    .logo-part {
        border-right: 1px solid #18d26e;
        height: 100%;

    }

    .logo-part a {
        color: #000;
        font-size: 30px;
        padding-left: 10px;
        border-left: 4px solid #18d26e;
    }

    .fa-bicycle:before {
        content: "\f206"
    }

    /*    end css footer*/
</style>
<body>
<div containter>

<footer class="container-fluid bg-grey py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="logo-part">
                            <h1><a href="#intro" class="scrollto">Haas_Bicycle</a></h1>
                            <p>N315 517002 AG Doetinchem</p>
                            <p>Uw bedrijf voor nieuwe fietsen</p>
                        </div>
                    </div>
                    <div class="col-md-6 px-4">
                        <h6>Over ons</h6>
                        <p>wij zijn actief sins 1932</p>
                        <a href="#" class="btn-footer"> More Info </a><br>
                        <a href="#" class="btn-footer"> Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-3 px-2">
                        <h6> Help ons</h6>
                        <div class="row ">
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="#"> Home</a></li>
                                    <li><a href="#"> About</a></li>
                                    <li><a href="#"> Service</a></li>
                                    <li><a href="#"> Team</a></li>
                                    <li><a href="#"> Help</a></li>
                                    <li><a href="#"> Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 px-2">
                        <h6> categorieën</h6>
                        <div class="row ">
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="#"> Mannen</a></li>
                                    <li><a href="#"> Vrouwen</a></li>
                                    <li><a href="#"> Kinder</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <h6> Newsletter</h6>
                        <div class="social">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                        <form class="form-footer my-3">
                            <input type="text" placeholder="search here...." name="search">
                            <input type="button" value="Go">
                        </form>
                        <p>That's technology limitation of LCD monitors</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</footer>
</div>
</body>
</html>