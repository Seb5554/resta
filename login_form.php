<?php
session_start();?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Registration</title>
  <meta name="title" content="Grilli - Amazing & Delicious Food">
  <meta name="description" content="This is a Restaurant html template made by codewithsadee">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/form.css">
  <!-- 
    - preload images
  -->
  
  <link rel="preload" as="image" href="./assets/images/hero-slider-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-3.jpg">



<form action="" class="form-left" method="post">
  <div class="imgcontainer">
    <h1 class="headline-1 text-center">Connection</h1>
	</div>

  <div class="container">
    <label class="form-text" for="uname"><b>Email</b></label>
    <input class="input-field" type="text" placeholder="Enter Email" name="email" required>

    <label class="form-text" for="psw"><b>Password</b></label>
    <input  class="input-field" type="password" placeholder="Enter Password" name="password" required>

    <button class="btn btn-secondary" type="submit" id="submit">Connection</button>

    <div class="container sign">
    <p class="text-center">Pas de compte?  <a class="btn" href="registration_form.php">Creation compte</a></p>
  </div>
  </div>

</form>

<?php
if(count($_POST)>0) {

try
{
$bdd = new PDO('mysql:host=localhost;dbname=Restaurant', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
} 
$bdd->query("SET NAMES 'utf8'");


$email= $_POST['email'];
$password = $_POST['password'];

if(isset($email) && isset($password)){

$usa = $bdd->query("SELECT id_client FROM client WHERE email='$email' and password='$password'"); 
				 foreach($usa as $valeur) {
                 $id=$valeur['id_client'];
				 }}




if(isset($id))

{


$_SESSION['name']=$id;

 

header("location: user_plateform.php");

}else{

echo '<center>'.'<font color="red">'.'Votre E-mail est incorrect'.'</font>'. '</center>';
$error = 'Entrez votre E-mail et votre password';

}

}



?>