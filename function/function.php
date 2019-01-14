<?php
function opendatabase(){


try
{
    $bdd= new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
    return $bdd;
}
catch(Exception $e)
{
    die('Error : ' . $e->getMessage());
}
}

?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">