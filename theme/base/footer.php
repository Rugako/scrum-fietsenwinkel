</body>
<footer class="container-fluid bg-grey py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="logo-part">
                            <h1><a href="#intro" class="scrollto">My_Bicycle</a></h1>
                            <p>N315 517002 AG Doetinchem</p>
                            <p>Uw bedrijf voor nieuwe fietsen</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-3">
                        <h6> Help ons</h6>
                        <div class="row ">
                            <div class="col-md-6">
                                <ul style="margin: 0px !important; padding: 0px !important;">
                                    <li style="margin: 0px !important; padding: 0px !important;"> <a href="#"> Home</a> </li>
                                    <li> <a href="#"> About</a> </li>
                                    <li> <a href="#"> Service</a> </li>
                                    <li> <a href="#"> Team</a> </li>
                                    <li> <a href="#"> Help</a> </li>
                                    <li> <a href="#"> Contact</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h6> categorieën</h6>
                        <div class="row ">
                            <div class="col-md-6">
                                <ul>
                                    <li> <a href="#"> Mannen</a> </li>
                                    <li> <a href="#"> Vrouwen</a> </li>
                                    <li> <a href="#"> Kinder</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <h6> Nieuwsbrief</h6>
                        <form class="form-footer">
                            <input type="text"  placeholder="Zoek hier." name="search">
                            <input type="button" value="Go" >
                        </form>
                        <p>Graafschap college FTW</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</footer>

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

</html>