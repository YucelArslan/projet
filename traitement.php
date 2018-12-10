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
opendatabase().
$req = $GLOBALS['db']->query("SHOW TABLE STATUS FROM `projet` LIKE `photo` ");
echo $req;
//$nom = "images/{$req}.{$extension_upload}";//
$nom="images/{$req}.{$extension_upload}";
$resultat = move_uploaded_file($_FILES['nom']['tmp_name'],$nom);
if ($resultat) echo "Transfert réussi";
?>
