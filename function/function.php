<?php
function opendatabase(){


try
{
    $bdd= new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
    return $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e)
{
    die('Error : ' . $e->getMessage());
}
}

?>
