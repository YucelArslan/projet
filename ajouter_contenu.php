<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<!DOCTYPE html>
<html>
<head>
<title>Auto</title>
</head>

<body>
<?php
session_start();

if (isset($_SESSION['login'])){
    require_once "navbar_connecte.php";
    echo "bonjour ".$_SESSION['login'];
    

}
else{
echo "vous devez vous connecté";
}
?>


</body>

</html>