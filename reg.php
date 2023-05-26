<?php session_start();?>

<!DOCTYPE html>
<html lang="fr-Fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Le Quai Antique - Restaurant -Chambery</title>
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="preload" as="image" href="./assets/images/fond1">
  <link rel="preload" as="image" href="./assets/images/fond2">
  <link rel="preload" as="image" href="./assets/images/fond3">

</head>

<body id="top">

    - #TOP BAR


  <div class="topbar">
    <div class="container">
            <address class="topbar-item">
                <div class="icon">
                    <ion-icon name="location-outline" aria-hiddien="true"></ion-icon>
                </div>
                <span class="span">Restaurant Le Quai antique, Chambery, France</span>
            </address>
            <div class="separator"></div>
            <div class="topbar-item item-2">
                <div class="icon">
                    <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
                </div>
                <span class="span">Ouvert de 11h à 14H et de 18h à 22h</span>
            </div>
           <a href="tel:0224232323" class="topbar-item link">
                <div class="icon">
                    <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
                </div>
                <span class="span">02.24.23.23.23</span>
           </a>
           <a href="mailto:quaiantique@gmail.com" class="topbar-item link">
            <div class="icon">
                <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
            </div>
            <span class="span">lequaiantique@gmail.com</span>
       </a>
     </div>
</div>





  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">
        <a href="#" class="logo">
            <img src="./assets/images/logo.png" alt="logo" width="130" height="50">
        </a>
        <nav class="navbar" data-navbar>
            <button class="close-btn" aria-label="close menu" data-nav-toggler>
                <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
            </button>
            <a href="#" class="logo">
                <img src="./assets/images/logo.png" alt="logo" width="130" height="50">
            </a>
            <ul class="navbar-list">
                <li class="navbar-item">
                    <a href="index.php" class="navbar-link hover-underline">
                        <div class="separator"></div>
                        <span class="span">Accueil</span>
                    </a>
                </li>
                 <li class="navbar-item">
                    <a href="index.php#about" class="navbar-link hover-underline">
                        <div class="separator"></div>
                        <span class="span">A propos de nous</span>
                    </a>
                </li>
                <li class="navbar-item">
                    <a href="index.php#Menus" class="navbar-link hover-underline">
                        <div class="separator"></div>
                        <span class="span">Menus</span>
                    </a>
                </li>
               
                <li class="navbar-item">
                    <a href="index.php#reservation" class="navbar-link hover-underline">
                        <div class="separator"></div>
                        <span class="span">Reservation</span>
                    </a>
                </li>
            </ul>

            <div class="text-center">
                <p class="headline-1 navbar-title"> Nous rendre visite</p>

                <adress class="body-4">
                    Restaurant Le Quai Antique, 3 rue jolie<br> CHAMBERY
                </adress>
                <p class="body-4 navbar-text">Ouvert de 11h à 14H et de 18h à 22h</p>
                <a href="matilto:quaiantique@gmail.com" class="body-4 sidebar-link">quaiantique@gmail.com</a>
                <div class="separator"></div>
                <p class="contact-label">Reservation au : </p>
                <a href="tel:0224232323" class="body-1 contact-number hover-underline">02.24.23.23.23</a>
            </div>
        </nav>

      <a href="login_form.php" class="btn btn-secondary"   >
        <span class="text text-1">Login</span>

        <span class="text text-2" aria-hidden="true">login</span>
      </a>
	  
	        

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>

  

      <section class="hero text-center" aria-label="home" id="home">

<br>
<br>
<br>
<br>
  <?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=Restaurant', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
} 
$bdd->query("SET NAMES 'utf8'");


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$psw=$_POST['psw'];




$com = $bdd->query("INSERT INTO client (prenom,nom,email,phone,password) VALUES ('$fname','$lname','$email','$phone','$psw')"); 
		 
		 
echo '<h1>'.'Votre compte a bien ete'.'</h1>'; 		 
?>
	
</section>
  </main>
    </article>
	</body>
	</html>