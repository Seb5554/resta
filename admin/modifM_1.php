<html>
<body BACKGROUND="img\fondmur.jpg">
<?php
// Connexion ?a base de donn?
try
{
$bdd = new PDO('mysql:host=localhost;dbname=restaurant', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
} 
 ?>
<h2>Which product do you want to update from the menu ?</h2>
<?php      
$req=$bdd->query("SET NAMES 'UTF8'");
$req= $bdd->query("SELECT * FROM produit");		
?>      
<?php


foreach($req as $valeur) {
	?>
<li><a href="modifM_2.php?num= <?php echo $valeur['id_prod']; ?> "> <?php echo $valeur['title']; ?></a>
</li>
<?php	
}
?>
</body>
</html>