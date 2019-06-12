<?php
/**
 * Created by PhpStorm.
 * User: jiand
 * Date: 22-5-2019
 * Time: 09:53
 */
if(isset($_POST['1']))
{
    $_POST = ['1'];
}
if(isset($_POST['2']))
{
    $_POST = ['2'];
}
?>

<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content</title>
    <base target="_self">
    <meta name="description" content="How to make a multi item carousel with cards in Bootstrap 4.">
    <meta name="google" value="notranslate">


    <!--stylesheets / link tags loaded here-->



    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="Scrum.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .r
        {
            padding-right: 43px;
        }
        h1
        {
            text-align: center;
        }

    </style>

</head>
<body>

<!--SLIDER MET ACTIES-->
<section class="container p-t-3">
    <div class="row">
        <div class="col-lg-12 h1">
            <br>
            <br>
            <h1>Acties</h1>
        </div>
    </div>
</section>
<section class="carousel slide" data-ride="carousel" id="postsCarousel">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 text-md-left lead l">
                <a class="btn btn-outline-secondary prev" href="" title="go back"><i class="fa fa-lg fa-chevron-left"></i></a>
            </div>
            <div class="col-xs-6 text-md-right lead r">
                <a class="btn btn-outline-secondary next" href="" title="more"><i class="fa fa-lg fa-chevron-right"></i></a>

            </div>
        </div>
    </div>
    <div class="container p-t-0 m-t-2 carousel-inner">
        <div class="row row-equal carousel-item m-t-0 active">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="images/fiets.jpg" alt="Carousel 1">
                    </div>
                    <div class="card-block p-t-2">
                        <h6 class="small text-wide p-b-2">Insight</h6>
                        <h2>
                            <a href="">Why Stuff Happens Every Year.</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="images/fiets.jpg" alt="Carousel 2">
                    </div>
                    <div class="card-block p-t-2">
                        <h6 class="small text-wide p-b-2">Development</h6>
                        <h2>
                            <a href="">How to Make Every Line Count.</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="images/fiets.jpg" alt="Carousel 3">
                    </div>
                    <div class="card-block p-t-2">
                        <h6 class="small text-wide p-b-2">Design</h6>
                        <h2>
                            <a href="">Responsive is Essential.</a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-equal carousel-item m-t-0">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="images/fiets.jpg" alt="Carousel 4">
                    </div>
                    <div class="card-block p-t-2">
                        <h6 class="small text-wide p-b-2">Another</h6>
                        <h2>
                            <a href="">Tagline or Call-to-action.</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="images/fiets.jpg" alt="Carousel 5">
                    </div>
                    <div class="card-block p-t-2">
                        <h6 class="small text-wide p-b-2"><span class="pull-xs-right">12.04</span> Category 1</h6>
                        <h2>
                            <a href="">This is a Blog Title.</a>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 fadeIn wow">
                <div class="card">
                    <div class="card-img-top card-img-top-250">
                        <img class="img-fluid" src="images/fiets.jpg" alt="Carousel 6">
                    </div>
                    <div class="card-block p-t-2">
                        <h6 class="small text-wide p-b-2">Category 3</h6>
                        <h2>
                            <a href="">Catchy Title of a Blog Post.</a>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="album py-5 bg-light">
    <div class="container">
        <!--PRODUCTEN-->
        <h1 style=" text-align: center;">Nieuwste producten</h1>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div style="height: 550px;" class="card mb-4 box-shadow">
                    <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="images/Giant%20Fathom.jpg" data-holder-rendered="true">
                    <div class="card-body">
                        <h5>Giant Fathom 2 LTD 29 2019</h5>
                        <p class="card-text">De nieuwe Giant Fathom 2 LTD is een stoere 29er die klaar is voor het stevigere werk. Deze hardtail is zeer betrouwbaar ... .</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <form action="DetailPagina.php" method="post">
                                <div class="btn-group">
                                    <a href="DetailPagina.php"><button type="submit" value="vieuw1" class="btn btn-sm btn-outline-secondary" name="submit">View</button></a>
                                    <a href="DetailPagina.php"><button type="submit" value="vieuw1" class="btn btn-sm btn-outline-secondary" name="submit">lees meer</button></a>
                        </div>
                            </form>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div style="height: 550px;" class="card mb-4 box-shadow">
                    <img class="card-img-top"  src="images/Gian%20CHill.jpg" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                    <div class="card-body">
                        <h5>Giant Chill 2 2019 Dames</h5>
                        <p class="card-text">De Giant Chill 2 is ideaal voor fietsritten naar school, werk of om een middagje te toeren. Even naar de supermarkt? Ook ... </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <form action="DetailPagina.php" method="post">
                                <div class="btn-group">
                                    <a href="DetailPagina.php"><button type="submit" value="view2" class="btn btn-sm btn-outline-secondary" name="submit">View</button></a>
                                    <a href="DetailPagina.php"><button type="submit" value="view2" class="btn btn-sm btn-outline-secondary" name="submit">lees meer</button></a>
                                </div>
                            </form>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div style="height: 550px;" class="card mb-4 box-shadow">
                    <img class="card-img-top"  src="images/Sensa%20Umbria.jpg" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                    <div class="card-body">
                        <h5>Sensa Umbria 21 2018</h5>
                        <p class="card-text">Op een Sensa Umbria 21 kun je als beginnend wielrenner uitstekend uit de voeten. Deze racefiets van Hollandse bodem is p ...</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <form action="DetailPagina.php" method="post">
                                <div class="btn-group">
                                    <a href="DetailPagina.php"><button type="submit" value="view3" class="btn btn-sm btn-outline-secondary oncl" name="submit">View</button></a>
                                    <a href="DetailPagina.php"><button type="submit" value="view3" class="btn btn-sm btn-outline-secondary oncl" name="submit">lees meer</button></a>
                                </div>
                            </form>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <!--REVIEUWS-->
        <h1>Revieuws</h1>
        <br>
        <div class="row" id="Revieuws">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <i class="far fa-user-circle" id="user">Lorem Ipsum </i>
                        <h5 class="card-title">Lorem Ipsum</h5>
                        <p class="card-text">Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <i class="far fa-user-circle" id="user">Lorem Ipsum </i>
                        <h5 class="card-title">Lorem Ipsum</h5>
                        <p class="card-text">Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="Revieuws">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <i class="far fa-user-circle" id="user">Lorem Ipsum </i>
                        <h5 class="card-title">Lorem Ipsum</h5>
                        <p class="card-text">Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <i class="far fa-user-circle" id="user">Lorem Ipsum </i>
                        <h5 class="card-title">Lorem Ipsum</h5>
                        <p class="card-text">Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    // sandbox disable popups
    if (window.self !== window.top && window.name!="view1") {;
        window.alert = function(){/*disable alert*/};
        window.confirm = function(){/*disable confirm*/};
        window.prompt = function(){/*disable prompt*/};
        window.open = function(){/*disable open*/};
    }

    // prevent href=# click jump
    document.addEventListener("DOMContentLoaded", function() {
        var links = document.getElementsByTagName("A");
        for(var i=0; i < links.length; i++) {
            if(links[i].href.indexOf('#')!=-1) {
                links[i].addEventListener("click", function(e) {
                    console.debug("prevent href=# click");
                    if (this.hash) {
                        if (this.hash=="#") {
                            e.preventDefault();
                            return false;
                        }
                        else {
                            /*
                            var el = document.getElementById(this.hash.replace(/#/, ""));
                            if (el) {
                              el.scrollIntoView(true);
                            }
                            */
                        }
                    }
                    return false;
                })
            }
        }
    }, false);
</script>

<!--scripts loaded here-->

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js"></script>



<script>
    (function($) {
        "use strict";

        // manual carousel controls
        $('.next').click(function(){ $('.carousel').carousel('next');return false; });
        $('.prev').click(function(){ $('.carousel').carousel('prev');return false; });

    })(jQuery);
</script>



</body></html>
