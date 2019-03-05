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
$req = $bdd->prepare('INSERT INTO compte (nom,prenom, date_naissance, mail, login, mdp) VALUES(?, ?, ?, ?,?,?)');
				$req->execute(array($_POST['nom'], $_POST['prenom'],$_POST['date_naissance'],$_POST['mail'], $_POST['login'],hash('sha256',$_POST['password'])));

}
?>