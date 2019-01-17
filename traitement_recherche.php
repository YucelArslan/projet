<?php

require_once "function/function.php";
?>

<?php
$bdd = opendatabase();
?>

<?php
$where=' WHERE annonce.id_marque=marque.id_marque AND annonce.id_energie=energie.id_energie AND annonce.id_coordonnees=coordonnees.id_coordonnees';
$From=' annonce, marque, energie, coordonnees ';
$Select= " annonce.titre, annonce.description, annonce.prix, annonce.annee, annonce.kilometres, annonce.date,
            marque.nom_marque,
            energie.nom_energie,
            coordonnees.nom, coordonnees.prenom, coordonnees.rue, coordonnees.ville, coordonnees.code_postal, coordonnees.mail, coordonnees.telephone ";
if (isset($_POST['nom_marque'])){
    $where = $where." AND marque.id_marque=".$_POST['nom_marque'];
}

if (isset($_POST['energie'])){
    $where = $where." AND energie.id_energie=".$_POST['energie'];
}

if (isset($_POST['annees_minimum'])){
    $where = $where." AND annonce.annee>=".$_POST['annees_minimum'];
}


if (isset($_POST['annees_maximum'])){
    $where = $where." AND annonce.annee<=".$_POST['annees_maximum'];
}

if (isset($_POST['prix_minimum'])){
    $where = $where." AND annonce.prix>=".$_POST['prix_minimum'];
}

if (isset($_POST['prix_maximum'])){
    $where = $where." AND annonce.prix<=".$_POST['prix_maximum'];
}


$req= "SELECT ".$Select." FROM  ".$From.$where;
echo $req."</br>";

if (isset($req)){
    $envoyer = $bdd->prepare($req);
    $envoyer->execute();
}


while ($row = $envoyer->fetch()){
    echo $row['titre']."</br>";
    echo $row['description']."</br>";
    echo $row['prix']."</br>";
    echo $row['annee']."</br>";
    echo $row['kilometres']."</br>";
    echo $row['date']."</br>";
    echo $row['nom_energie']."</br>";
    echo $row['nom']."</br>";
    echo $row['prenom']."</br>";
    echo $row['rue']."</br>";
    echo $row['ville']."</br>";
    echo $row['code_postal']."</br>";
    echo $row['mail']."</br>";
    echo $row['telephone']."</br>";
    echo $row['nom_marque']."</br>";


}
?>