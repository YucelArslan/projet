<head><?php /*
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js "></script>
    <script src="css/bootstrap.css "></script>*/?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> 
</head>

<?php

require_once "function/function.php";
?>

<?php
$bdd = opendatabase();
?>
<body>
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
echo $req."</br>";

if (isset($req)){
    $envoyer = $bdd->prepare($req);
    $envoyer->execute();
}

?>
<div class="card">

<?php
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

$req_photo = "SELECT photo.nom_photo FROM photo WHERE photo.id_annonce = ".$row['id_annonce'];
$req_affichage = $bdd->prepare($req_photo);
$req_affichage->execute();

while ($aff= $req_affichage->fetch()){
    echo "<img src='".$aff['nom_photo']."' />";
}
}
?>

</div>


<div class="col-xs-12 col-sm-9 col-md-9 col-lg-7 col-lg-offset-7" >
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>


  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/2.jpg" class="d-block w-100" alt="...">
    </div>    
    <div class="carousel-item">
      <img src="images/2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</body>

