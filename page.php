<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

<div class="card">
  <div class="card-body">
    This is some textln klef kejf, within a card body.
  </div>
</div>
<?php
require_once ('function/function.php');  
?>
<?php
opendatabase();

$sql = 'SELECT * FROM annonce,photo'; 
$req = $bdd->prepare($sql); 
$req ->execute();


?>
<div class='container'>
  <h2>voiture</h2>            
  <table class='table table-striped'>
    <thead>
      <tr>
        <th>titre</th>
        <th>description</th>
        <th>prix</th>
        <th>année</th>
        <th>energie</th>
        <th>update</th>
      </tr>
    </thead>
    <tbody>
<?php


while($row=$req->fetch()){
?>

  <tr>
  
            <td> <?php echo $row['titre'];  ?> </td>
            <td> <?php echo $row['description'];  ?> </td>
            <td> <?php echo $row['prix'];  ?> </td>
            <td> <?php echo $row['annee'];  ?> </td>
            <td> <?php echo $row['id_energie'];  ?> </td>
            <td> <img src="<?php echo $row['nom_photo'] ?>" /> </td>
            <td><input type="button" class="btn btn-secondary btn-xs" name="insert" method='post' value="insert" onclick="javascript:location.href='formulaire_annonce.php'"/></td>
     
  </tr> 
<?php } ?>    
<!--  </tr>

    </tbody>
</div>
</table>      
