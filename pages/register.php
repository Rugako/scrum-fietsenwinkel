<div class="wrapper">
    <h2>Sign Up</h2>
    <p>Please fill this form to create an account.</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="">

        </div>
        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
            <label>Password</label>
            <input type="password" name="password" class="form-control" value="">

        </div>

        <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
            <label>Voornaam</label>
            <input type="text" name="voornaam" class="form-control" value="">

        </div>
        <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
            <label>Tussenvoegsel</label>
            <input type="text" name="tussenvoegsel" class="form-control" value="">

        </div>
        <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
            <label>Achternaam</label>
            <input type="text" name="achternaam" class="form-control" value="">

        </div>
        <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
            <label>Telefoon nummer</label>
            <input type="text" name="tel" class="form-control" value="">

        </div>
        <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
            <label>Postcode</label>
            <input type="text" name="postcode" class="form-control" value="">

        </div>
        <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
            <label>WoonPlaats</label>
            <input type="text" name="plaats" class="form-control" value="">

        </div>
        <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
            <label>Adres</label>
            <input type="text" name="adres" class="form-control" value="">

        </div>
        <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
            <label>Adres 2</label>
            <input type="text" name="adres2" class="form-control" value="">

        </div>

        <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
            <label>Geboortedatum</label>
            <input type="text" name="gbdatum" class="form-control" value="">

        </div>


        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Submit" name="Submit">
        </div>
        <p>Already have an account? <a href="register.php">Login here</a>.</p>
    </form>
</div>
<?php




$dbname ="fiets";
$dbuser ="root";
$dbpass="";
$dbhost="localhost";

$link = mysqli_connect($dbhost  ,$dbuser,$dbpass,$dbname)or die("Unable to Connect to '$dbhost'");
mysqli_select_db($link,$dbname)or die ("Could not open the db'$dbname'");

if(isset( $_POST['Submit']))
{

    $email=$_POST['email'];
    $password=$_POST['password'];
    $voornaam=$_POST['voornaam'];
    $tussenvoegsel=$_POST['tussenvoegsel'];
    $achternaam=$_POST['achternaam'];
    $postcode=$_POST['postcode'];
    $woonplaats=$_POST['plaats'];
    $adres=$_POST['adres'];
    $adres2=$_POST['adres2'];
    $tel=$_POST['tel'];

    $sql = "INSERT INTO klant (Klant_Naam	
,Klant_Tussenvoegsel,	Klant_Achternaam	,Klant_Postcode	
,Klant_Plaats,	Klant_Adres	,Klant_Adres2	,Klant_TelefoonNum
	,Klant_Email,	Klant_Wachtwoord)	 VALUES
            ('$voornaam', '$tussenvoegsel', '$achternaam'
            ,'$postcode','$woonplaats',
            '$adres','$adres2','$tel','$email','$password')";
      if($link->query($sql)===true)
      {
          header("Location:login.php");

      }




}
?>

