<?php


require_once "function/function.php";
?>




<?php
$bdd=opendatabase();


if (isset($_POST['login']) && ($_POST['password'])){
    $mdp= hash('sha256',$_POST['password']);
    $login = $_POST['login'];
    echo "transfert reussi";
}
else{
    echo "transfert non reussi";
    header('Location: connexion.php');
    exit();
    alert("il manque une ou des informations");

}


$req="SELECT count(*) FROM compte WHERE login='".$login."' AND mdp='$mdp'";
$exec=$bdd->prepare($req);
$exec->execute();



while ($row = $exec->fetch()){
    if ($row['count(*)'] != 0){    
        session_start();
        $_SESSION['login']=$login;
        $_SESSION['mdp']=$mdp;
        echo "vous etes connecté ".$_SESSION['login'];
        echo "<a href='session.php'>Lien vers session.php</a>";
        }
        
    elseif ($row['count(*)'] == 0){
        echo 'erreur';
        
    }

}
