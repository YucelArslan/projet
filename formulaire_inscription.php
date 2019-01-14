<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<!--formulaire pour envoyer les donnees afin d'inserer un nouveau compte -->
<form class="form-group" action="traitement_inscription.php" method="post">
    <div class="form-group">
        <label>Nom:</label>
        <input required type="text" class="form-control" method="post" name="nom" placeholder="" />
    </div>
    <div class="form-group"><label>Prénom:</label>
          <input required type="text" class="form-control" method="post" name="prenom" placeholder="" />
    </div>
    <div class="form-group">
        <label>Date de naissance:</label>
        <input required type="date" class="form-control" method="post" name="date_naissance" placeholder="" />
    </div>
    </div>
        <label>Email address</label>
        <input type="email" class="form-control" name="mail" placeholder="Enter email">
    </div>
    <div class="form-group"><label>Login :</label>
          <input required type="text" class="form-control" method="post" name="login" placeholder="Login" />
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" placeholder="password">
    </div>
    <div class="form-group text-center">
        <a href="room.php" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span>Retour</a>
        <button type="submit" name="submit" value="submit" class="btn btn btn-xs" >ADD</a></button>
    </div>
</form>

</body>
</html>