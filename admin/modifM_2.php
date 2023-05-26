<html>
<head>
<style>
* {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>


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
<h2>modifier</h2>
<?php      
$req=$bdd->query("SET NAMES 'UTF8'");
$a=$_GET['num'];
$req= $bdd->query("SELECT * FROM produit WHERE id_prod=$a");		
?>    

   
<form id="form1" method="post" action="modifM_3.php?num=<?php echo $a ; ?>">
<?php
foreach($req as $valeur){
?> 
<label for="nprod">N° product :</label>
<input type="text" id="Nprod" name="Nprod"  size="15" value="<?php echo $valeur['id_prod']; ?>" />

<label for="numbus">Title :</label>
        <input type="text" name="Nom" id="Nom" size="30" maxlength="40" value="<?php echo $valeur['title']; ?>"/>


		

<label for="numbus">Price :</label>
        <input type="text" name="price" id="price" size="30" maxlength="40" value="<?php echo $valeur['prix']; ?>"/>
		


<label for="numbus">Description :</label>
        <input type="text" name="desc" id="desc" size="30" maxlength="1400" value="<?php echo $valeur['description']; ?>"/>
		<label for="numbus">Category :</label>
        <input type="text" name="Category" id="Category" size="30" maxlength="40" value="<?php echo $valeur['category']; ?>"/>
	<?php }
?>	
		
<br /><br />

<input type="submit" id="envoi" name="envoi" tabindex="4" value="Update" class="registerbtn"/>

</form>

</body>
</html>