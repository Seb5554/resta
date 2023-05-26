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


session_start();

$check=$_SESSION['name'];

$id= $bdd->query("select id_client from client where id_client='$check' "); 
				 foreach($id as $valeur) {
                 $usa=$valeur['id_client'];
				 }}

if(!isset($usa))

{

header("Location: login.php");

}

?>