<?php
function getBdd(){
    return new PDO('mysql:host=localhost;dbname=projet;charset=utf8','root', '',array(pdO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
}

function getMarque (){ 
    $bdd = getBdd();
    $rep = $bdd->query('SELECT id_marque, nom_marque FROM marque');
    $marques = $rep->fetchAll();
    return $marques;
}

function getModele ($idMarque){
    $bdd = getBdd();
    $rep = $bdd->prepare('SELECT id_modele, nom FROM modele WHERE id_marque=?');
    $rep->execute (array($idMarque));
    $modele = $rep->fetchAll();
    return $modele;
}
