<?php
include ("base/Header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif;
        width: 100%;}

        .wrapper{ width: 500px; padding: 40px; margin: auto; padding-bottom: 8% ;padding-top: 7%;}
    </style>
</head>
<body>
<div class="wrapper">
    <h2>Login</h2>
    <form action="" method="post">
        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="">

        </div>
        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
            <label>Password</label>
            <input type="password" name="password" class="form-control" value="">


        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="Submit">
        </div>
        <p>Dont have a account? <a href="register.php">Sign up here</a>.</p>
    </form>
</div>
</body>
</html>
<?php




$dbname ="fiets";
$dbuser ="root";
$dbpass="";
$dbhost="localhost";

$link = mysqli_connect($dbhost  ,$dbuser,$dbpass,$dbname)or die("Unable to Connect to '$dbhost'");
mysqli_select_db($link,$dbname)or die ("Could not open the db'$dbname'");


if(isset($_POST['Submit']))
{

    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * FROM klant WHERE Klant_email = '$email' AND Klant_Wachtwoord= '$password' ";
    $result= $link->query($sql);
  if($result->num_rows>0)
  {
      header("Location: index.php");
  }








}
include ("base/Footer.php");


