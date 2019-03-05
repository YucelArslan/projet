<?php
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
