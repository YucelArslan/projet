<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>


<?php
require_once ('function/function.php');
?>
<?php
$bdd = opendatabase();
?>
<?php

$select= "annonce.titre, annonce.description, annonce.prix, annonce.annee, annonce.kilometres, annonce.date,
marque.nom_marque, photo.nom_photo, coordonnees.*";
$from= 'annonce, marque, photo, coordonnees';

?>
<?php 
$requ='SELECT $select FROM ;
$re=$bdd->prepare($requ);
$re->execute();

while ($row=$re->fetch()){
  ?>
  <div class="card">
  <div class="card-body">
    <?php echo $row['titre'];?></br>
    <?php echo $row['description'];?></br>
    <?php echo $row['prix'];?></br>
    <?php echo $row['annee'];?>
    <?php echo $row['kilometres'];?>
    <?php echo $row['date'];?>
    <?php echo $row['id_energie'];?>
    <?php echo $row['id_coordonnees'];?></br>
    <?php echo $row['id_marque'];?></br>
    <img src="<?php echo $row['nom_photo'];?>" alt="voiture"/></br>
  </div>
</div>
    

<?php } ?>