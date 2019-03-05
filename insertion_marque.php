<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
</head>

<header>
<?php
    require_once 'function/function.php';
?>
</header>


<body>
<?php




$bdd=opendatabase();

// Add a new marque
if ((isset($_POST['nom_marque']))){ 


        try {
            $sql_Marque = ("INSERT INTO `marque` (`nom_marque`) VALUES (:nom_marque)");
                $req = $bdd->prepare($sql_Marque);
                $req->bindValue(':nom_marque', $_POST['nom_marque'] , PDO::PARAM_STR);    
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
?>




</body>

</html>