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


if ((isset($_POST['nom'])) && (isset($_POST['prenom'])) &&  (isset($_POST['date_naissance'])) &&  (isset($_POST['mail'])) 
&& (isset($_POST['login'])) &&  (isset($_POST['password']))){
echo "sa marche";
//insertion d'un nouveau compte
$req_insert="INSERT INTO COMPTE VALUES ('','{$_POST['nom']}', '{$_POST['prenom']}','{$_POST['date_naissance']}','{$_POST['mail']}','{$_POST['login']}','{$_POST['password']}')";  
$mar= $bdd->prepare($req_insert);
$mar->execute();
while($row=$mar->fetch()){
    echo "blabla".$row['id_compte'];
}
}
?>