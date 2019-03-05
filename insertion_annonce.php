<?php

require_once 'function/function.php';


$bdd=opendatabase();

// Add a new room
if ((isset($_POST['titre'])) && (isset($_POST['description']))){ 

        try {
            $sql_modele = ("INSERT INTO `annonce` (`titre`,`description`,`prix`, `annee`, `kilometres`,`date`,`id_energie`,
            `id_coordonnees`, `id_marque`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $req = $bdd->prepare($sql_modele);
                $req->bindValue(':titre', $_POST['titre'] , PDO::PARAM_STR);
                $req->bindValue(':description', $_POST['description'] , PDO::PARAM_STR);    
                $req->bindValue(':prix', $_POST['prix'] , PDO::PARAM_INT);    
                $req->bindValue(':annee', $_POST['annee'] , PDO::PARAM_INT);    
                $req->bindValue(':kilometres', $_POST['kilometres'] , PDO::PARAM_INT);    
                $req->bindValue(':date', $_POST['date'] , PDO::PARAM_INT);    
                $req->bindValue(':id_energie', $_POST['id_energie'] , PDO::PARAM_INT);
                $req->bindValue(':id_coordonnees', $_POST['id_coordonnees'] , PDO::PARAM_STR);    
                $req->bindValue(':id_marque', $_POST['nom_marque'] , PDO::PARAM_INT);        
                $req->execute(array( $_POST['titre'], $_POST['description'],
                 $_POST['prix'], $_POST['annee'], $_POST['kilometres'],
                  $_POST['date'], $_POST['id_energie'], $_POST['id_coordonnees'],
                   $_POST['nom_marque']));
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





















require_once ('function/function.php');
?>

<?php
if ($_FILES['nom']['error'] > 0) $erreur = "Erreur lors du transfert";
?>

<?php
if ($_FILES['nom']['size'] > $_POST['maxsize']) $erreur = "Le fichier est trop gros";
echo $_POST['maxsize'];
echo $_FILES['nom']['size'];
?>

<?php
$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
//1. strrchr renvoie l'extension avec le point (« . »).
//2. substr(chaine,1) ignore le premier caractère de chaine.
//3. strtolower met l'extension en minuscules.
$extension_upload = strtolower(  substr(  strrchr($_FILES['nom']['name'], '.')  ,1)  );
if ( in_array($extension_upload,$extensions_valides) ) echo "Extension correcte";
?>


<?php
$bdd=opendatabase();

$req = $bdd->query("SELECT Auto_increment FROM information_schema.tables WHERE table_name='photo'");

//echo "gggg".$req;
//echo $_FILES['nom']['tmp_name'];
//$nom="images".$req;
//$nom = "images/{$req}.{$extension_upload}";//
//$nom="images/{$nom}.{$extension_upload}";
$donnees=$req->fetch();
    echo "req est egal a ".$donnees['Auto_increment'];
    $nom="images/".$donnees['Auto_increment'].".".$extension_upload;
    $resultat = move_uploaded_file($_FILES['nom']['tmp_name'],$nom);
    if (isset($resultat)){
        $insertion_photo=$bdd->query("INSERT INTO photo VALUES ('','{$nom}','3')");
        echo "Transfert réussi";
    } 
