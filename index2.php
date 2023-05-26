<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS restaurant ";
if ($conn->query($sql) === TRUE) {
} else {
  echo "Error creating database: " . $conn->error;
}

try
{
$bdd = new PDO('mysql:host=localhost:3306;dbname=restaurant', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
} 
$bdd->query("SET NAMES 'utf8'");

	$com = $bdd->query("SELECT count(*) 
   FROM INFORMATION_SCHEMA.TABLES
    WHERE TABLE_SCHEMA = 'restaurant'");
	
  foreach($com as $valeur) {
				 $Nb=$valeur['count(*)'];
				 }
				 
 if ( $Nb==0 )
 {
$com = $bdd->query("create table client(
id_client int AUTO_INCREMENT primary key,
prenom varchar(40),
nom varchar(40),
email varchar(50),
phone varchar(30),
password varchar(50)
)"); 

$com = $bdd->query("create table heure(
  id_hour int AUTO_INCREMENT primary key,
  morningOpen int,
  morningClose int,
  eveningOpen int,
  eveningClose int
  )"); 

$com = $bdd->query("create table reservation(
id_com int AUTO_INCREMENT primary key,
id_client int,
name varchar(30),
phone varchar(30),
dateC DATE,
timeC varchar(5),
persons int,
msg text
)AUTO_INCREMENT=1000");




$com = $bdd->query("create table produit(
id_prod int AUTO_INCREMENT primary key,
title varchar(40),
prix decimal(5,2),
description varchar(100),
category varchar(30)
)");


$com = $bdd->query("insert into produit values(1000,'Greek Salad',25.5,'Tomatoes, green bell pepper, sliced cucumber onion, olives, and feta cheese','salade')");
$com = $bdd->query("insert into produit values(1001,'Butternut Pumpkin',10,'Typesetting industry lorem Lorem Ipsum is simply dummy text of the priand.')");
$com = $bdd->query("insert into produit values(1002,'Olivas Rellenas',25,'Avocados with crab meat, red onion, crab salad stuffed red bell pepper and green bell pepper.')");
$com = $bdd->query("insert into produit values(1003,'Lasagne',40,'Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices')");
$com = $bdd->query("insert into produit values(1004,'Tokusen Wagyu',39,'Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices.')");
$com = $bdd->query("insert into produit values(1005,'TOpu Fish',49,'Vegetables, cheeses, ground meats, tomato sauce, seasonings and spices.')");
$com = $bdd->query("insert into heures values(1,8,11,18,22)");
}



?>


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
  <link rel="stylesheet" href="assets/css/form.css">
  <link rel="preload" as="image" href="./assets/images/fond1">
  <link rel="preload" as="image" href="./assets/images/fond2">
  <link rel="preload" as="image" href="./assets/images/fond3">

</head>

<body id="top">
  
  <!-- 
    - #PRELOADER
  -->

  <div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">Le quai antique</p>
  </div>

  <!-- 
    - #TOP BAR
  -->

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
                <span class="span inline">Ouvert de&nbsp<span id="morningOpen">11:00</span>&nbspà&nbsp<span id="morningClose">14:00</span>&nbspet de&nbsp<span id="eveningOpen">18:00</span>&nbspà&nbsp<span id="eveningClose">22:00</span></span>
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
                    <a href="#" class="navbar-link hover-underline">
                        <div class="separator"></div>
                        <span class="span">Accueil</span>
                    </a>
                </li>
                 <li class="navbar-item">
                    <a href="#about" class="navbar-link hover-underline">
                        <div class="separator"></div>
                        <span class="span">A propos de nous</span>
                    </a>
                </li>
                <li class="navbar-item">
                    <a href="#Menus" class="navbar-link hover-underline">
                        <div class="separator"></div>
                        <span class="span">Menus</span>
                    </a>
                </li>
               
                <li class="navbar-item">
                    <a href="#reservation" class="navbar-link hover-underline">
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





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero text-center" aria-label="home" id="home">

        <ul class="hero-slider" data-hero-slider>

          <li class="slider-item active" data-hero-slider-item>

         <?php // Récupérer toutes les images de la base de données
    $stmt = $conn->query('SELECT name, data FROM images');
    $images = $stmt->fetchAll();
    
    if (!empty($images)) {
        echo '<h1>Images dans la base de données :</h1>';
        
        foreach ($images as $image) {
            $imageName = $image['name'];
            $imageSrc = 'data:image/jpeg;base64,' . base64_encode($image['data']);
            
            // Afficher l'image et le titre dans des balises HTML
            echo '<div class="slider-bg">';
            echo '<img src="' . $imageSrc . '" alt="' . $imageName . '" width="1880" height="950" alt="" class="img-cover">';
            echo '</div>';
            echo "<h1 class='display-1 hero-title slider-reveal'>L'amour de la cuisine locale</h1>
            <p class='body-2 hero-text slider-reveal'>Venez tester nos plats</p>";
            echo '<pclass="body-2 hero-text slider-reveal">' . $imageName . '</p>';
            echo 'a href="#" class="btn btn-primary slider-reaveal">
            <span class="text text-1">Nos menus</span>
            <span class="text text-2" aria-hidden="true">Nos menus</span>
        </a>';
            
        }
    } else {
        echo 'Aucune image trouvée dans la base de données.';
    }
    ?>


            <div class="slider-bg">
              <img src="./assets/images/fond1.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>
            <p class="label-2 section-subtitle slider-reveal">Cuisine traditionelle</p>
                    <h1 class="display-1 hero-title slider-reveal">L'amour de la cuisine locale</h1>
                    <p class="body-2 hero-text slider-reveal">Venez tester nos plats</p>
                    <a href="#" class="btn btn-primary slider-reaveal">
                        <span class="text text-1">Nos menus</span>
                        <span class="text text-2" aria-hidden="true">Nos menus</span>
                    </a>
          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/fond2.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>
            <p class="label-2 section-subtitle slider-reveal">Cuisine traditionelle</p>
                    <h1 class="display-1 hero-title slider-reveal">L'amour de la cuisine locale</h1>
                    <p class="body-2 hero-text slider-reveal">Venez tester nos plats</p>
                    <a href="#" class="btn btn-primary slider-reaveal">
                        <span class="text text-1">Nos menus</span>
                        <span class="text text-2" aria-hidden="true">Nos menus</span>
                    </a>
          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/fond3.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>
            <p class="label-2 section-subtitle slider-reveal">Cuisine traditionelle</p>
                    <h1 class="display-1 hero-title slider-reveal">L'amour de la cuisine locale</h1>
                    <p class="body-2 hero-text slider-reveal">Venez tester nos plats</p>
                    <a href="#Menus" class="btn btn-primary slider-reaveal">
                        <span class="text text-1">Nos menus</span>
                        <span class="text text-2" aria-hidden="true">Nos menus</span>
                    </a>
          </li>

        </ul>

        <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
          <ion-icon name="chevron-back"></ion-icon>
        </button>

        <button class="slider-btn next" aria-label="slide to next" data-next-btn>
          <ion-icon name="chevron-forward"></ion-icon>
        </button>

        <a href="#reservation" class="hero-btn has-after">
          <img src="./assets/images/hero-icon.png" width="48" height="48" alt="booking icon">

          <span class="label-2 text-center span">Rerserver <br>une table</span>
        </a>

      </section>




      <!-- 
        - #ABOUT
      -->

      <section class="section about text-center" aria-labelledby="about-label" id="about">
        <div class="container">

          <div class="about-content">

            <p class="label-2 section-subtitle" id="about-label">A propos de Nous</p>

            <h2 class="headline-1 section-title">Notre restaurant</h2>

            <p class="section-text">
              Lorem Ipsum is simply dummy text of the printingand typesetting industry lorem Ipsum has been the
              industrys standard dummy text ever since the when an unknown printer took a galley of type and scrambled
              it to make a type specimen book It has survived not only five centuries, but also the leap into.
            </p>

            <div class="contact-label">Réserver au :</div>

            <a href="tel:+804001234567" class="body-1 contact-number hover-underline">02.24.23.23.23</a>

            <a href="#Reservation" class="btn btn-primary">
              <span class="text text-1">Réserver une table</span>

              <span class="text text-2" aria-hidden="true">Réserver une table</span>
            </a>

          </div>

          <figure class="about-banner">

            <img src="./assets/images/about-banner.jpg" width="570" height="570" loading="lazy" alt="about banner"
              class="w-100" data-parallax-item data-parallax-speed="1">

            <div class="abs-img abs-img-1 has-before" data-parallax-item data-parallax-speed="1.75">
              <img src="./assets/images/about-abs-image.jpg" width="285" height="285" loading="lazy" alt=""
                class="w-100">
            </div>
          </figure>


        </div>
      </section>

      
      <section class="section service bg-black-10 text-center" aria-label="service">
        <div class="container">

          <h2 class="headline-1 section-title">Notre équipe</h2>

          <p class="section-text">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the industrys
            standard dummy text ever.
          </p>

          <ul class="grid-list">

            <li>
              <div class="service-card">

                <a href="#" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="./assets/images/chef.jpg" width="285" height="336" loading="lazy" alt="Breakfast"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="#">Notre Chef</a>
                  </h3>

                </div>

              </div>
            </li>

            <li>
              <div class="service-card">

                <a href="#" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="./assets/images/somm.jpg" width="285" height="336" loading="lazy" alt="Appetizers"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="#">Notre Sommelier</a>
                  </h3>
                </div>

              </div>
            </li>

            <li>
              <div class="service-card">

                <a href="#" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="./assets/images/serv.jpg" width="285" height="336" loading="lazy" alt="Drinks"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="#">Notre cheffe de salle</a>
                  </h3>

                </div>

              </div>
            </li>

          </ul>

          <img src="./assets/images/shape-1.png" width="246" height="412" loading="lazy" alt="shape"
            class="shape shape-1 move-anim">
          <img src="./assets/images/shape-2.png" width="343" height="345" loading="lazy" alt="shape"
            class="shape shape-2 move-anim">

        </div>
      </section>




      <!-- 
        - #MENU
      -->

    <section class="section menu" aria-label="menu-label" id="menu">
        <div class="container">

          <p class="section-subtitle text-center label-2">Sélection du chef</p>

          <h2 class="headline-1 section-title text-center">Delicious Menu</h2>

          <ul class="grid-list">

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="./assets/images/menu-1.png" width="100" height="100" loading="lazy" alt="Greek Salad"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">
					  <?php $req= $bdd->query("SELECT title FROM produit WHERE id_prod=1000");
foreach($req as $valeur) {
echo $valeur['title'];	} 
?>				  

					  </a>
                    </h3>

                    <span class="badge label-1">Seasonal</span>

                    <span class="span title-2">
									  <?php $req= $bdd->query("SELECT prix FROM produit WHERE id_prod=1000");
foreach($req as $valeur) {
echo $valeur['prix'].'$';	} 
?>	
					</span>
                  </div>

                  <p class="card-text label-1">
					  <?php $req= $bdd->query("SELECT description FROM produit WHERE id_prod=1000");
foreach($req as $valeur) {
echo $valeur['description'];	} 
?>				                    </p>

                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="./assets/images/menu-2.png" width="100" height="100" loading="lazy" alt="Lasagne"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">					  <?php $req= $bdd->query("SELECT title FROM produit WHERE id_prod=1003");
foreach($req as $valeur) {
echo $valeur['title'];	} 
?>	</a>
                    </h3>

                    <span class="span title-2">									  
					<?php $req= $bdd->query("SELECT prix FROM produit WHERE id_prod=1003");
foreach($req as $valeur) {
echo $valeur['prix'].'$';	} 
?>
	</span>
                  </div>

                  <p class="card-text label-1">
					  <?php $req= $bdd->query("SELECT description FROM produit WHERE id_prod=1003");
foreach($req as $valeur) {
echo $valeur['description'];	} 
?>                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="./assets/images/menu-3.png" width="100" height="100" loading="lazy" alt="Butternut Pumpkin"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">
					   <?php $req= $bdd->query("SELECT title FROM produit WHERE id_prod=1001");
foreach($req as $valeur) {
echo $valeur['title'];	} 
?>
					  </a>
                    </h3>

                    <span class="span title-2">
										<?php $req= $bdd->query("SELECT prix FROM produit WHERE id_prod=1001");
foreach($req as $valeur) {
echo $valeur['prix'].'$';	} 
?>
					</span>
                  </div>

                  <p class="card-text label-1">
					  <?php $req= $bdd->query("SELECT description FROM produit WHERE id_prod=1001");
foreach($req as $valeur) {
echo $valeur['description'];	} 
?>       
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="./assets/images/menu-4.png" width="100" height="100" loading="lazy" alt="Tokusen Wagyu"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">					  
					  <?php $req= $bdd->query("SELECT title FROM produit WHERE id_prod=1004");
foreach($req as $valeur) {
echo $valeur['title'];	} 
?>
</a>
                    </h3>

                    <span class="badge label-1">New</span>

                    <span class="span title-2">										<?php $req= $bdd->query("SELECT prix FROM produit WHERE id_prod=1004");
foreach($req as $valeur) {
echo $valeur['prix'].'$';	} 
?></span>
                  </div>

                  <p class="card-text label-1">
					  <?php $req= $bdd->query("SELECT description FROM produit WHERE id_prod=1004");
foreach($req as $valeur) {
echo $valeur['description'];	} 
?>                   </p>

                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="./assets/images/menu-5.png" width="100" height="100" loading="lazy" alt="Olivas Rellenas"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">					  <?php $req= $bdd->query("SELECT title FROM produit WHERE id_prod=1002");
foreach($req as $valeur) {
echo $valeur['title'];	} 
?></a>
                    </h3>

                    <span class="span title-2"><?php $req= $bdd->query("SELECT prix FROM produit WHERE id_prod=1002");
foreach($req as $valeur) {
echo $valeur['prix'].'$';	} 
?></span>
                  </div>

                  <p class="card-text label-1">
					  <?php $req= $bdd->query("SELECT description FROM produit WHERE id_prod=1002");
foreach($req as $valeur) {
echo $valeur['description'];	} 
?>                   </p>

                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="./assets/images/menu-6.png" width="100" height="100" loading="lazy" alt="Opu Fish"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title"><?php $req= $bdd->query("SELECT title FROM produit WHERE id_prod=1005");
foreach($req as $valeur) {
echo $valeur['title'];	} 
?></a>
                    </h3>

                    <span class="span title-2"><?php $req= $bdd->query("SELECT prix FROM produit WHERE id_prod=1005");
foreach($req as $valeur) {
echo $valeur['prix'].'$';	} 
?></span>
                  </div>

                  <p class="card-text label-1">
<?php $req= $bdd->query("SELECT description FROM produit WHERE id_prod=1005");
foreach($req as $valeur) {
echo $valeur['description'];	} 
?>                                     </p>

                </div>

              </div>
            </li>

          </ul>

          <p class="menu-text text-center">
            During winter daily from <span class="span">7:00 pm</span> to <span class="span">9:00 pm</span>
          </p>

          <a href="#" class="btn btn-primary">
            <span class="text text-1">View All Menu</span>

            <span class="text text-2" aria-hidden="true">View All Menu</span>
          </a>

          <img src="./assets/images/shape-5.png" width="921" height="1036" loading="lazy" alt="shape"
            class="shape shape-2 move-anim">
          <img src="./assets/images/shape-6.png" width="343" height="345" loading="lazy" alt="shape"
            class="shape shape-3 move-anim">

        </div>
      </section>



      <!-- 
        - #RESERVATION
      -->

      <section class="reservation" id="reservation">
        <div class="container">

          <div class="form reservation-form bg-black-10">

            <form action='reservation.php' class="form-left" method="post"  >

              <h2 class="headline-1 text-center">Réservation de table</h2>

              <p class="form-text text-center">
              Reservations au : <a href="tel:022423232323" class="link">02.24.23.23.23</a>
                 ou en ligne
              </p>

              <div class="input-wrapper">
                <input type="text" name="name" placeholder="Votre nom" autocomplete="off" class="input-field" required>

                <input type="tel" name="phone" placeholder="Votre numéro de telephone" autocomplete="off" class="input-field" required>
              </div>

              <div class="input-wrapper">

                <div class="icon-wrapper">
                  <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                  <select name="person" class="input-field">
                    <option value="1">1 Personne</option>
                    <option value="2">2 Personnes</option>
                    <option value="3">3 Personnes</option>
                    <option value="4">4 Personnes</option>
                    <option value="5">5 Personnes</option>
                    <option value="6">6 Personnes</option>
                    <option value="7">7 Personnes</option>
                    <option value="8">8 Personnes</option>
                    <option value="9">9 Personnes</option>
                    <option value="10">10 Personnes</option>
                  </select>

                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </div>

                <div class="icon-wrapper">
                  <ion-icon name="calendar-clear-outline" aria-hidden="true"></ion-icon>

                  <input type="date" name="r_date" class="input-field" required>

                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </div>

                <div class="icon-wrapper">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                  <select name="time_R" class="input-field" id="hoursOption">
                 
                  </select>

                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </div>

              </div>

              <textarea name="message" placeholder="Message" autocomplete="off" class="input-field"></textarea>

              <button type="submit" class="btn btn-secondary" name='bupload'>
                <span class="text text-1">Reservation</span>

                <span class="text text-2" aria-hidden="true">Reservation</span>
              </button>

            </form>

            <div class="form-right text-center">
                <h2 class="headline-1 text-center">Contactez Nous</h2>
                <p class="contact-label">Reservation table au :</p>
                <a href="tel:0224232323" class="body-1 contact-number-hover-underline">0224232323</a>
                <div class="separator"></div>
                <p class="contact-label">Nous trouver</p>
                <address class="body-4">Restaurant Le Quai Antique, <br> 3 rue jolie CHAMBERY</address>
                <p class="contact-label">Service du midi</p>
                <p class="body-4">De 11h à 14h</p>
                <p class="contact-label">Service du soir</p>
                <p class="body-4">De 18h à 22h</p>
            </div>

          </div>

        </div>
      </section>



  <!-- 
    - #FOOTER
  -->

  <footer class="footer section has-bg-image text-center">
    <div class="container">
        <div class="footer-main grid-list">
            <div class="footer-brand">
                <a href="#" class="logo">
                    <img src="./assets/images/logo.png" width="160" height="50" laoding="lazy" alt="logo">
                </a>
                <address class="body-4">
                    Restaurant Le Quai Antique, 3 rue jolie CHAMBERY
                </address>
                <a href="matilto:quaiantique@gmail.com" class="body-4 contact-link">lequaiantique@gmail.com</a>
                <a href="tel:0224232323" class="body-4 contact-link">02.24.23.23.23</a>
                <p class="body-4">Ouvert de 11h à 22h</p>
                <div class="wrapper">
                    <div class="separator"></div>
                    <div class="separator"></div>
                    <div class="separator"></div>
                </div>
            </div>  
            
            <ul class="footer-list">
                <li>
                    <a href="#" class="label-2 footer-link hover-underline">Accueil</a>
                </li>
                <li>
                    <a href="about.html" class="label-2 footer-link hover-underline">A propos</a>
                </li>
                <li>
                    <a href="#" class="label-2 footer-link hover-underline">Menu</a>
                </li>
                <li>
                    <a href="#" class="label-2 footer-link hover-underline">Contact</a>
                </li>
            </ul>
            <ul class="footer-list">
                <li>
                    <a href="#" class="label-2 footer-link hover-underline">Facebook</a>
                </li>
                <li>
                    <a href="#" class="label-2 footer-link hover-underline">Instagram</a>
                </li>
            </ul>
        </div>
    </div>
</footer>



  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>
  <script src="./assets/js/hours.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>