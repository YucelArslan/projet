<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<header>
    <?php
include_once "navbar.php";
require_once "formulaire_recherche.php";
require_once "index.php";

?>
</header>
<body>
<head><?php /*
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js "></script>
    <script src="css/bootstrap.css "></script>*/?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> 


<!-- <script type="text/javascript" src="javascript/jquery/jquery.js"></script>
<script type="text/javascript"></script> -->

</head>

<header>
<?php include_once "navbar.php"; ?>
</header>

<body>







<?php

require_once "function/function.php";
?>

<?php
$bdd = opendatabase();
?>

<?php

$where=' WHERE annonce.id_marque=marque.id_marque AND annonce.id_energie=energie.id_energie AND annonce.id_coordonnees=coordonnees.id_coordonnees';
$From=' annonce, marque, energie, coordonnees ';
$Select= " annonce.id_annonce, annonce.titre, annonce.description, annonce.prix, annonce.annee, annonce.kilometres, annonce.date,
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

// requete qui s'imbrique en fonction des elements selectionne

if (isset($req)){
    $envoyer = $bdd->prepare($req);
    $envoyer->execute();
}

?>


<?php
while ($row = $envoyer->fetch()){

$req_photo = "SELECT photo.nom_photo FROM photo WHERE photo.id_annonce = ".$row['id_annonce'];
$req_affichage = $bdd->prepare($req_photo);
$req_affichage->execute();

$aff=$req_affichage->fetch();

//foreach ($aff as $azerty){


?>
<a href="session.php"/>
<div class="row"  >
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
    </div>

    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card">
            
                <div>
                    <p>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <?php echo "<img src='".$aff["nom_photo"]."' alt='voiture'>"; ?>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <p>
                                    <?php echo $row["titre"]; ?></br>
                                    <?php echo $row["prix"]; ?> €</br>
                                    <?php echo $row["kilometres"];  ?> Kms
                                </p>
                            </div>
                            
                        </div>
                    </p> 
                </div>
                                               
            </div>
        </div>
    </div>

    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
    </div>

</div>

<?php

} ?>

<script>
/**
* Permet d'appeler la page pour réafficher les sélections à chaque choix
**/
function sendData(param, page)
{
         if(document.all)
         {
                 //Internet Explorer
                 var XhrObj = new ActiveXObject("Microsoft.XMLHTTP") ;
         }
         else
         {
	        //Mozilla
                var XhrObj = new XMLHttpRequest();
         }
         //définition de l'endroit d'affichage:
         var content = document.getElementById("modification");

         XhrObj.open("POST", page);

         //Ok pour la page cible
         XhrObj.onreadystatechange = function()
         {
              if (XhrObj.readyState == 4 && XhrObj.status == 200)
              content.innerHTML = XhrObj.responseText ;
         }

         XhrObj.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
         XhrObj.send(param);
}
</script>
</body>

</html>