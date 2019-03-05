<?php
require_once "function/function.php";

?>


<?php


function lecture_table($id, $nom,$table){
$bdd = opendatabase();

$require=("SELECT {$id},{$nom} FROM {$table}");
$req=$bdd->prepare($require);
$req->execute();

$rows=$req->fetchAll();
foreach ($rows as $row){   
    echo "<option value='".$row[$id]."'>".$row[$nom]."</option>";
} 
}

function lecture_full_table($nom,$table){
    $bdd = opendatabase();
    
    $require=("SELECT {$nom} FROM {$table}");
    $req=$bdd->prepare($require);
    $req->execute();
    
    while ($row=$req->fetch()){   
        echo "<option value='".$row['nom']."</option>";
    } 
    }


function Kilometres($nombre_depart,$nombre_max1,$nombre_max2,$nombre_max3){


$nombre_depart=0;

    while ($nombre_depart<$nombre_max1){
        $nombre_depart= $nombre_depart+1000;
        echo "<option value=".$nombre_depart.">".$nombre_depart."</option>";
    }

    while ($nombre_depart<$nombre_max2){
        $nombre_depart = $nombre_depart+10000;
        echo "<option value=".$nombre_depart.">".$nombre_depart."</option>";
    }

    while ($nombre_depart<$nombre_max3){
        $nombre_depart = $nombre_depart+25000;
        echo "<option value=".$nombre_depart.">".$nombre_depart."</option>";
    }
}


function prix($prix_depart, $prixmax1, $prixmax2, $prixmax3){

    while ($prix_depart<$prixmax1){
        $prix_depart = $prix_depart + 250;
        echo "<option>".$prix_depart."</option>";
    }
    while ($prix_depart<$prixmax2){
        $prix_depart = $prix_depart + 500;
        echo "<option>".$prix_depart."</option>";
    }
    while ($prix_depart<$prixmax3){
        $prix_depart = $prix_depart + 1000;
        echo "<option>".$prix_depart."</option>";
    }
}


function annees($annee_depart,$annee_max){
    while ($annee_depart<$annee_max){
        $annee_depart = $annee_depart + 1;
        echo "<option>".$annee_depart."</option>";
    }
}