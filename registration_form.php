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

    

<body id="top">










<form action="reg.php" class="form-left bg-black-10" method="post">
  <div class="container">
    <h1 class="headline-1 text-center">Creation d'un compte</h1>
    <p class="form-text text-center">Merci de remplir ce formulaire</p>
 

	    <label class="form-text" for="fname"><b>Prénom</b></label>
    <input class="input-field"type="text" placeholder="Votre prénom" name="fname" id="fname" required>
	
		    <label for="name"><b>Nom</b></label>
    <input class="input-field" type="text" placeholder="Votre nom" name="lname" id="lname" required>
	
    <label for="email"><b>Email</b></label>
    <input class="input-field" type="text" placeholder="Votre E-mail" name="email" id="email" required>
	
	    <label for="phone"><b>Numéro de télephone</b></label>
    <input class="input-field" type="text" placeholder="Votre numéro de télephone" name="phone" id="phone" required>

    <label for="psw"><b>Password</b></label>
    <input class="input-field" type="password" placeholder="Votre password" name="psw" id="psw" required>
    <hr>

    <button class="btn btn-secondary"type="submit" class="registerbtn">Enregister</button>
  </div>

  <div class="container sign">
    <p class="text-center">Deja un compte ?<a class="btn"href="login_form.php">Connection</a></p>
  </div>
</form>