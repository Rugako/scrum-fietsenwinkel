<?php
/**
 * Created by PhpStorm.
 * User: jiand
 * Date: 23-5-2019
 * Time: 13:31
 */

include ("Header.php");

$action = $_POST['submit'];

//database connectie
$servername = "localhost";
$username = "Jian";
$password = "";
$dbname = "fiets";

//connectie
$connection = mysqli_connect($servername, $username, $password, $dbname);

//check connectie
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}



if($action == "vieuw1")
{
    $sql = "SELECT * FROM `fiets` WHERE Fiets_ID = 1";
    $Result = $result = mysqli_query($connection, $sql);
    $Beschrijving = "Even voorstellen...
    De nieuwe Giant Fathom 2 LTD is een stoere 29er die klaar is voor het stevigere werk. Deze hardtail is zeer betrouwbaar tijdens steile beklimmingen en voelt soepel en gecontroleerd aan tijdens het afdalen. Het ALUXX SL aluminium frame met een vernieuwde geometrie zorgt voor een stabiel rijgedrag op allerlei soorten XC-trails.
    
    Hoe groter, hoe beter!
    Met de grotere 29 inch-wielen heeft de Fathon 29 een extra dosis stabiliteit in huis. Daarnaast vormen obstakels en hindernissen onderweg geen enkel probleem! Met de grote wielen rijdt hij erover heen alsof het niets is. Het lichtgewicht ALUXX SL aluminium frame heeft een 69 graden balhoofdhoek die speciaal afgestemd is op de 29er wielen. De RockShox Judy Gold vork met 100mm veerweg brengt extra controle en comfort met zich mee.
    
    Advies of vragen?
    Wil je graag meer weten over deze hardtail mountainbike of heb je andere vragen? Bel, chat of mail gerust met een van onze medewerkers!";

    $img = 'images/Giant%20Fathom.jpg';

}
elseif($action == "view2")
{

    $sql = "SELECT * FROM `fiets` WHERE Fiets_ID = 2";
    $Result = $result = mysqli_query($connection, $sql);
    $Beschrijving = "Even voorstellen...
    De Giant Chill 2 is ideaal voor fietsritten naar school, werk of om een middagje te toeren. Even naar de supermarkt? Ook dat doe je met de Chill 2!
    
    Een complete fiets
    De Chill 2 is een rijk uitgeruste stadsfiets en biedt alles wat je van een fiets mag verwachten. Wat dacht je van een comfortabel Selle Royal zadel? En 3 versnellingen? Daarnaast is de fiets volledig van aluminium, zo zijn je fietsritten licht en comfortabel. Tot slot kun je 's avonds veilig op pad gaan, dankzij de goed zichtbare fietsverlichting.
    
    Advies nodig?
    Ben je benieuwd of deze fiets bij jou past? Of heb je advies nodig gedurende je zoektocht naar een fiets? Neem contact met ons op! Onze fietsspecialisten helpen je graag verder. Bel, chat of e-mail gerust!";

    $img = 'images/Gian%20CHill.jpg';
}
elseif($action == "view3")
{
    $sql = "SELECT * FROM `fiets` WHERE Fiets_ID = 3";
    $Result = $result = mysqli_query($connection, $sql);
    $Beschrijving = "Even voorstellen...
    Op een Sensa Umbria 21 kun je als beginnend wielrenner uitstekend uit de voeten. Deze racefiets van Hollandse bodem is prima uitgerust binnen zijn segment. Deze fraaie fiets is de ideale racefiets om je eerste kilometers op het asfalt mee af te leggen. De hoogwaardige onderdelen van Supra zorgen ervoor dat je ondanks de sportieve insteek zeer comfortabel kunt rijden.
    
    Belangrijkste kenmerken
    Mooie startersfiets met comfortabele geometrie
    21 versnellingen
    10,1 kilo
    Shimano Tourney
    Triple verzet dus ruim bereik
    Inclusief Sensa bidon en bidonhouder
    Goede prijs/kwaliteitverhouding
    Sensa heeft een zeer goede prijs/kwaliteit verhouding en heeft met dit soort modellen weinig concurrentie. Een nieuwe fiets is toch fijner dan een gebruikte tenslotte. Racefietsen worden vrijwel altijd zonder pedalen geleverd, zo ook deze Sensa Umbria 21. Denk er dus aan een mooi setje pedalen uit te kiezen!";

    $img = 'images/Sensa%20Umbria.jpg';
}



if (mysqli_num_rows($Result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($Result)) {
        $naam = "" . $row["Fiets_Naam"]."<br>";
        $type = "" . $row["Fiets_Type"]."<br>";
        $prijs = "" . $row["Fiets_Prijs"]."<br>";
        $aantal = "" . $row["Fiets_AantalBeschikbaar"]."<br>";
        $gewicht = "" . $row["Fiets_Gewicht"]."<br>";
        $afmeting = "" . $row["Fiets_Afmeting"]."<br>";
        $merk = "" . $row["Fiets_Merk"]."<br>";
        $serie = "" . $row["Fiets_Serie"]."<br>";
        $frame = "" . $row["Fiets_Frametype"]."<br>";
        $jaar = "" . $row["Fiets_Collectiejaar"]."<br>";
        $wielgrootte = "" . $row["Fiets_Wielgrootte"]."<br>";
    }
}







?>
<html>
<head>
<link href="Scrum.css">
    <style>
        #plaatje
        {
            width: 1140px;
            height: 500px;
        }
    </style>

</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<!-- Page Content -->
<div class="container">

    <!-- Portfolio Item Heading -->

    <!-- Portfolio Item Row -->
    <div class="row">
        <?php
        echo "
        <div class='col-lg-12'>
            <img id='plaatje' class='img-fluid' src='$img'>
        </div>
        ";
        ?>
    </div>
    <!-- /.row -->
    <br>
    <div>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#Summery" class="text-success"><i class="fa fa-indent"></i> Beschrijving</a></li>
            <p class="ontzichtbaarstreepje">____</p>
            <li><a data-toggle="tab" href="#Contact" class="text-success"><i class="fa fa-bookmark-o"></i>Eigenschappen fiets</a></li>
        </ul>

        <div class="tab-content">
            <div id="Summery" class="tab-pane fade in active show">

                <div class="table-responsive panel">
                    <table class="table">
                        <tbody>

                        <tr>
                            <td><?php echo $Beschrijving?></td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <div id="Address" class="tab-pane fade">
                <div class="table-responsive panel">
                    <table class="table">
                        <tbody>

                        <tr>
                            <td class="text-success"><i class="fa fa-home"></i> Address</td>
                            <td>
                                <address>
                                    <strong>
                                        C-***, Amahiya </strong><br>
                                    Kharobar, ****** <br>
                                    Gorakhpur, Utter Pradesh, India<br>
                                </address>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="Contact" class="tab-pane fade">
                <div class="table-responsive panel">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td class="text-success">Naam:</td>
                            <td><?php echo $naam  ?></td>
                        </tr>
                        <tr>
                            <td class="text-success">Type:</td>
                            <td><?php echo $type ?></td>
                        </tr>
                        <tr>
                            <td class="text-success">Prijs:</td>
                            <td><?php echo "€ ".$prijs ?></td>
                        </tr>
                        <tr>
                            <td class="text-success">Aantal beschikbaar:</td>
                            <td><?php echo $aantal ?></td>
                        </tr>
                        <tr>
                            <td class="text-success">Gewicht:</td>
                            <td><?php echo $gewicht ?></td>
                        </tr>
                        <tr>
                            <td class="text-success">Afmeting:</td>
                            <td><?php echo $afmeting ?></td>
                        </tr>
                        <tr>
                            <td class="text-success">Merk:</td>
                            <td><?php echo $merk ?></td>
                        </tr>
                        <tr>
                            <td class="text-success">Serie:</td>
                            <td><?php echo $serie ?></td>
                        </tr>
                        <tr>
                            <td class="text-success">Frametype:</td>
                            <td><?php echo $frame ?></td>
                        </tr>
                        <tr>
                            <td class="text-success">Collectiejaar:</td>
                            <td><?php echo $jaar ?></td>
                        </tr>
                        <tr>
                            <td class="text-success">Wielgrootte:</td>
                            <td><?php echo $wielgrootte ?></td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div id="General" class="tab-pane fade">
                <div class="table-responsive panel">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td class="text-success"><i class="fa fa-university"></i> Last School</td>
                            <td>Pawan Mall's School</td>
                        </tr>
                        <tr>
                            <td class="text-success"><i class="fa fa-calendar"></i> Date of Admission</td>
                            <td>March 4, 2009</td>
                        </tr>
                        <tr>
                            <td class="text-success"><i class="fa fa-home"></i> Birth Place</td>
                            <td>Delhi</td>
                        </tr>
                        <tr>
                            <td class="text-success"><i class="fa fa-calendar"></i> Academic Year</td>
                            <td>2015-2016</td>
                        </tr>
                        <tr>
                            <td class="text-success"><i class="fa fa-medkit"></i> Medical Condition</td>
                            <td>Normal</td>
                        </tr>
                        <tr>
                            <td class="text-success"><i class="fa fa-thumbs-up"></i> Active/Inactive</td>
                            <td>Student is Active</td>
                        </tr>
                        <tr>
                            <td class="text-success"><i class="glyphicon glyphicon-time"></i> Last Editing</td>
                            <td>2015-08-20 09:41:56</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>

    <!-- Related Projects Row -->
    <h3 class="my-4">Related Projects</h3>

    <div class="row">

        <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
                <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
                <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
                <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
            <a href="#">
                <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </a>
        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
<br>
<br>
<br>
<br>
<br>
<br>
</body>
</html>
<?php
include ("footer.php");
?>