<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<!DOCTYPE html>
<html>
<head>
<title>array_uintersect_assoc</title>
</head>

<body>
<?php
session_start();

if (isset($_SESSION['login'])){
    require_once "navbar_connecte.php";
    ?>
<div class="row">
<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

    <div id="list-example" class="list-group">
            <a class="list-group-item list-group-item-action" href="inserer_annonce.php">Insérer une annonce</a>
            <a class="list-group-item list-group-item-action" href="modifier_annonce.php">Modifier une annonce</a>
            <a class="list-group-item list-group-item-action" href="inserer_marque.php">Insérer une nouvelle marque</a>
            <a class="list-group-item list-group-item-action" href="inserer_modele.php">Insérer un nouveau modele</a>
            <a class="list-group-item list-group-item-action" href="inserer_energie.php">Insérer un nouveau type d'énergie</a>
</div>
<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
</div>
</div>



<?php

}
else{
echo "vous devez vous connecté";
}
?>


</body>

</html>