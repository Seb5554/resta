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
$id =$_POST['Nprod'];
$Nom = $_POST['Nom'];
$Categoty = $_POST['Category'];
$price = $_POST['price'];
$des= $_POST['desc'];


$req = $bdd->query("SET NAMES 'UTF8'");
$a=$_GET['num'];
$req = $bdd->query("UPDATE produit SET id_prod=$id , title='$Nom',prix=$price,description='$des'  WHERE  id_prod=$id");
echo "the information has been updated";
?>
</body>
</html>