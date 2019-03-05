<!DOCTYPE html>
<html>
<head>

</head>


<header>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<?php
    
    require_once "function/function.php";
    require_once "functions.php";
    $bdd = opendatabase();
?>
</header>

<body>

<div>
    <?php require_once "session.php";?>
</div>
<div>
</div>

<div class="container">
    <form class="" action="insertion_annonce.php" method="post" />
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <label>Marque :</label>
                <?php 
                $onChange = "OnChange=\"sendData('id_marque='+this.value,'changement.php')\" onKeyUp=\"sendData('\"id_marque\"='+this.value,'changement.php')\" ";        
                echo "<select class='selectpicker'   name='nom_marque'".$onChange.'>';
                ?>

                    <?php lecture_table('id_marque', 'nom_marque','marque'); ?>
                </select>
            </div>
                <div id="modification">
                    <label>Modele :</label>
                    <select class="selectpicker" name="energie">
                        <?php lecture_table('id_modele','nom', 'modele');?>
                    </select>
                </div>

    <div class="form-group"><label>Titre:</label>
            <input required type="text" class="form-control" method="post" name="titre"
            placeholder="" />
    </div>
    <div class="form-group"><label>Description:</label>
            <textarea class="form-control"  method="post" name="description" rows="3"></textarea>
    </div>
    <div class="form-group"><label>prix :</label>
            <input required type="text" class="form-control" method="post" name="prix"
            placeholder="" />
    </div>
    <div class="form-group"><label>Année:</label>
            <input required type="text" class="form-control" method="post" name="annee"
            placeholder="" />
    </div>
    <div class="form-group">
        <label>Kilomètres:</label>
            <input required type="text" class="form-control" method="post" name="kilometres"
            placeholder="" />
    </div>
    <div class="form-group"><label>Date:</label>
            <input required type="text" class="form-control" method="post" name="date"
            value="<?php echo date("Y/m/d");?>" />
    </div>
    
    <div class="form-group"><label>Energie:</label>
        <select class="selectpicker" name="id_energie">
            <?php lecture_table('id_energie','nom_energie', 'energie');?>
        </select>
    </div>
    <div class="form-group"><label>coordonnees:</label>
    <input required type="text" class="form-control" method="post" name="id_coordonnees"
            value="1" />
    </div>
    <div>
        <input type="hidden" name="maxsize" value="100000" />
        <input type="file" name="nom" />
    </div>


    <input type="hidden" name="maxsize" value="100000" />
    <input type="file" name="caca" />

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

 
 

</div>
<script>
/**
* Permet d'appeler la page pour réafficher les sélections à chaque choix
**/
function sendData(param, page)
{
         if(document.all)
         {
                 //Internet Explorer
                 var XhrObj = new ActiveXObject("Microsoft.XMLHTTP") ;
         }
         else
         {
	        //Mozilla
                var XhrObj = new XMLHttpRequest();
         }
         //définition de l'endroit d'affichage:
         var content = document.getElementById("modification");

         XhrObj.open("POST", page);

         //Ok pour la page cible
         XhrObj.onreadystatechange = function()
         {
              if (XhrObj.readyState == 4 && XhrObj.status == 200)
              content.innerHTML = XhrObj.responseText ;
         }

         XhrObj.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
         XhrObj.send(param);
}
</script>
<?php
/*<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>*/
?>
""
</body>

</html>