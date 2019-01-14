<?php

require_once "function/function.php";
?>

<?php
$bdd = opendatabase();
?>

<?php
$where='WHERE marque.id_marque=annonce.id_marque AND energie.id_energie=annonce.id_energie';
$From=' annonce ';
if (isset($_POST['nom_marque'])){
    $where = $where." AND marque.id_marque=".$_POST['nom_marque'];
    $From= $From.", marque ";
}

if (isset($_POST['energie'])){
    $where = $where." AND energie.id_energie=".$_POST['energie'];
    $From= $From.", energie ";
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


$req= "SELECT * FROM  ".$From.$where;


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
    echo $row['id_energie']."</br>";
    echo $row['id_coordonnees']."</br>";
    echo $row['id_marque']."</br>";

}
?>