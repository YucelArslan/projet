<?php

require_once 'function/function.php';


$bdd=opendatabase();

// Add a new room
if ((isset($_POST['nom_energie']))){ 


        try {
            $sql_energie = ("INSERT INTO `energie` (`nom_energie`) VALUES (:nom_energie)");
                $req = $bdd->prepare($sql_energie);
                $req->bindValue(':nom_energie', $_POST['nom_energie'] , PDO::PARAM_STR);    
                $req->execute();
                echo '<script>alert("successfully added");</script>';
            }
        catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
        }

}
else {
    echo "Les champs ne sont pas correctement remplies";
}

require_once "Accueil.php";