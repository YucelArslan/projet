<?php

require_once 'function/function.php';


$bdd=opendatabase();

// Add a new room
if ((isset($_POST['nom'])) && (isset($_POST['nom_marque']))){ 

        try {
            $sql_modele = ("INSERT INTO `modele` (`nom`,`id_marque`) VALUES (?, ?)");
                $req = $bdd->prepare($sql_modele);
                $req->bindValue(':nom', $_POST['nom'] , PDO::PARAM_STR);    
                $req->execute(array( $_POST['nom'], $_POST['nom_marque']));
                echo '<script>alert("successfully added");</script>';
            }
        catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
        }

}
else {
    echo "Les champs ne sont pas correctement remplies";
}

require_once "navbar_connecte.php";