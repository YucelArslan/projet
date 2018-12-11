<?php
function opendatabase(){


try
{
    $bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
    return $bdd;
}
catch(Exception $e)
{
    die('Error : ' . $e->getMessage());
}
}


$bdd=opendatabase();

$req =$bdd->query("SELECT * FROM `photo`");

$donnees=$req->fetch();
  echo $donnees['nom_photo'];
