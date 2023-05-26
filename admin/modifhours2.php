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
$req= $bdd->query("SELECT * FROM hours WHERE id_prod=$a");		
?>    

   
<form id="form1" method="post" action="modifhours3.php?num=<?php echo $a ; ?>">
<?php
foreach($req as $valeur){
?> 
<label for="nprod">N° Heure :</label>
<input type="text" id="Nprod" name="Nprod"  size="15" value="<?php echo $valeur['id_hour']; ?>" />

<label for="numbus">Heure début matin</label>
        <input type="text" name="Heure début matin" id="morningOpen" size="30" maxlength="40" value="<?php echo $valeur['morningOpen']; ?>"/>
		

<label for="numbus">Heure fin matin</label>
        <input type="text" name="Heure fin matin" id="morningClose" size="30" maxlength="40" value="<?php echo $valeur['morningClose']; ?>"/>
		


<label for="numbus">Heure début soir</label>
        <input type="text" name="Heure début soir" id="eveningOpen" size="30" maxlength="1400" value="<?php echo $valeur['eveningOpen']; ?>"/>

        <label for="numbus">Heure fin soir</label>
        <input type="text" name="Heure fin soir" id="eveningClose" size="30" maxlength="1400" value="<?php echo $valeur['eveningClose']; ?>"/>
		
	<?php }
?>	
		
<br /><br />

<input type="submit" id="envoi" name="envoi" tabindex="4" value="Update" class="registerbtn"/>

</form>

</body>
</html>