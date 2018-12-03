<?php
 

function opendatabase(){

$url='localhost';
$database='projet';
$user='root';
$password='';


$db = NULL;


try
{
  $GLOBALS['db'] = new PDO("mysql:host={$url};dbname={$database}", $user, $password,
  array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
}
catch (Exception $e)
{
  die('Erreur : ' . $e->getMessage());
}
}

