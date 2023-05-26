<html >
<head>


<style>
table.table {
margin-left: auto;
            margin-right: auto;

  border: 1px solid black;
  table-layout: fixed;
  width: 99%;
  height:200px;
}
th.th1,
td.td1 {
  border: 1px solid black;
  overflow: hidden;
  border-collapse: collapse;
}



</style></head>
<?php session_start();


try
{
$bdd = new PDO('mysql:host=localhost;dbname=Restaurant', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
} 
$bdd->query("SET NAMES 'utf8'");
                                                                                                                                     
$com = $bdd->query("select * from Reservation order by dateC desc");
?>
<table class="table1">
<font size=4 color="blue"><tr>
<th><font color="blue" size="3" face="sans-serif"><B><span STYLE="padding:0 0 0 45px;">Numéro de la réservation</span></B></font></th>
<th><font color="blue" size="3" face="sans-serif"><B><span STYLE="padding:0 0 0 45px;">Nom</span></B></font></th>
<th><B><font color="blue" size="3" face="sans-serif"><span STYLE="padding:0 0 0 45px;">Téléphone</span></font></B></th>
<th><B><font color="blue" size="3" face="sans-serif"><span STYLE="padding:0 0 0 45px;">Date de réservation</span></font></B></th>
<th><B><font color="blue" size="3" face="sans-serif"><span STYLE="padding:0 0 0 45px;">Nombre de personnes</span></font></B></th>
<th><B><font color="blue" size="3" face="sans-serif"><span STYLE="padding:0 0 0 100px;">Message</span></font></B></th>
</tr></font>
<?php

foreach($com as $valeur){?>
<tr><td class="td1"><?php echo 'Res'.$valeur['id_com']; ?></td><td class="td1"><?php echo $valeur['name']; ?>
</td><td class="td1"><?php echo $valeur['phone']; ?></td><td class="td1"><?php echo $valeur['dateC'].'  '.$valeur['timeC']; ?>
</td><td class="td1"><?php echo $valeur['persons']; ?>
</td><td class="td1"><?php echo $valeur['msg']; ?>
</td>
</tr>
<?php }?></table></body></html>