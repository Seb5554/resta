<?php session_start();?>
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} ?>

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

</head>

<body id="top">
  

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

  
      <!-- 
        - #MENU
      -->

    <section class="section menu meet" aria-label="menu-label" id="menu">
        <div class="container">

          <p class="section-subtitle text-center label-2">Sélection du chef</p>

          <h2 class="headline-1 section-title text-center">Delicious Menu</h2>

          <ul class="grid-list">

<?php $sql = "SELECT id_prod, title, prix, description FROM produit";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Parcours des résultats
    while ($row = $result->fetch_assoc()) {
        $idProd = $row["id_prod"];
        $title = $row["title"];
        $prix = $row["prix"];
        $description = $row["description"];
?>
<?php
    }
} else {
    echo "Aucun produit trouvé.";
} ?>
        <li>
            <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                    <img src="./assets/images/menu-1.png" width="100" height="100" loading="lazy" alt="Greek Salad"
                        class="img-cover">
                </figure>

                <div>

                    <div class="title-wrapper">
                        <h3 class="title-3">
                            <a href="#" class="card-title"><?php echo $title; ?></a>
                        </h3>
                        <span class="span title-2"><?php echo $prix; ?>$</span>
                    </div>

                    <p class="card-text label-1"><?php echo $description; ?></p>

                </div>

            </div>
        </li>
?>

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