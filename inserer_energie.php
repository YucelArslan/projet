
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">


<?php
    require_once "session.php";
    require_once "function/function.php";
    require_once "functions.php";
?>


<div class="container">   
  <form class="" action="insertion_energie.php" method="post" />
      <input type="text" class="hidden invisible sr-only"  name="id" value="id">

    <div class="form-group"><label>Name:</label>
            <input required type="text" class="form-control" method="post" name="nom_energie"
            placeholder="" />
    </div>
    <div class="form-group text-center">
            <a href="Accueil.php" class="btn btn-default"><span class="glyphicon glyphicon-chevron-left"></span>Retour</a>
            <button type="submit" name="submit" value="submit" class="btn btn btn-xs" onclick="return(confirm('Etes-vous sûr de vouloir ajouter cette entrée?'));">ADD</a></button>
    </div>
  </form>
</div>

<?php
/*<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>*/
?>
