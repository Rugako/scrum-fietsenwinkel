<?php

if(isset($_POST['Submit'])){

    if(empty($_POST['email']) OR empty($_POST['password'])){
        ?>
        <div class="alert alert-danger" role="alert">
            Geen email of wachtwoord ingevuld.
        </div>
<?php
    } else {
        $getUser = Database::query("SELECT * FROM klant WHERE Klant_Email = '".$_POST['email']."' && Klant_Wachtwoord = '".$_POST['password']."'");
        if($getUser->rowCount() == 0){
        ?>
            <div class="alert alert-danger" role="alert">
                Email of wachtwoord is onjuist.
            </div>
<?php
        } else {
            $_SESSION['logged_in'] = true;
            $_SESSION['user_id'] = $getUser->fetch()['Klant_ID'];
        ?>
            <script>
                setTimeout(function () {
                    window.location.href= 'https://rkloppenburg.gc-webhosting.nl/';

                },2500);
            </script>
            <div class="alert alert-success" role="alert">
                Succesvol ingelogd. Je wordt doorgestuurd naar de homepagina
            </div>
<?php
        }
    }
}

?>

<div class="wrapper">
    <h2>Login</h2>
    <form action="" method="post">
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" placeholder="Email" class="form-control" value="<?=$_POST['email']?>">

        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Wachtwoord" class="form-control" value="<?=$_POST['password']?>">


        </div>
        <div class="form-group">
            <input type="submit"  class="btn btn-primary" name="Submit">
        </div>
        <p>Nog geen account? <a href="register.php">Maak er hier een aan.</a>.</p>
    </form>
</div>

