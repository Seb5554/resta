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
<h2>Quelle h modif ?</h2>
<?php      
$req=$bdd->query("SET NAMES 'UTF8'");
$req= $bdd->query("SELECT * FROM heure");		
?>      
<?php


foreach($req as $valeur) {
	?>
<li><a href="modifhours2.php?num= <?php echo $valeur['id_hour']; ?> "> </a>
</li>
<?php	
}
?>
</body>
</html>