<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<?php include_once "navbar.php";?>
</head>
<body>
<div class="row" >

    <div class=" col-xs-4 col-sm-4 col-md-4 col-lg-4 " >
    </div>
    <div class=" col-xs-4 col-sm-4 col-md-4 col-lg-4 " >
    <form class="form-group" action="traitement_connexion2.php" method="post">

        <div class="form-group"><label>Login :</label>
            <input required type="text" class="form-control"  name="login" placeholder="Login" />
        </div>
        <div class="form-group">
            <label>Password</label>
            <input required type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <input type="submit" value="Submit">
    </div>
    </form>
    <div class=" col-xs-4 col-sm-4 col-md-4 col-lg-4 " >

    </div>
</div>
</body>
</html>