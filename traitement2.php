
<?

//On simplifie le nom des variables $_FILES 
$tmp_name=$_FILES['fichier']['tmp_name']; 
$name=$_FILES['fichier']['name']; 
$size=$_FILES['fichier']['size']; 
$type=$_FILES['fichier']['type']; 
$erreur=$_FILES['fichier']['error']; 

//On affiche les différentes variables 

echo "Nom du fichier :".$name; 
echo "<br>Taille du fichier :".$size; 
echo "<br>Type de fichier :".$type; 
echo "<br>Nom temporaire :".$tmp_name; 
echo "<br>Erreur :".$erreur; 


//On crée une variable contenant le répertoire de destination 

//Créer un dossier "images_uploadées"

mkdir('images_upload', 0777, true);

$destination="images_upload/";

//On déplace le fichier du dossier temporaire vers le dossier de destination

if(move_uploaded_file($_FILES['fichier']['tmp_name'],$destination.$name)); 
{ 
echo"<br>Fichier envoyé vers:$destination";
}

?>