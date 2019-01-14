<?php

require_once "function/function.php";
require_once "functions.php";

?>

<?php
$bdd = opendatabase();
?>
<!--liste energie -->
<form class="form-group" action="traitement_recherche.php" method="post">
    <label>Energie :</label>
    <select class="form-control" name="energie">
        <?php lecture_table('id_energie','nom_energie', 'energie');?>
    </select></br>

    <!--liste marque -->
    <label>Marque :</label>
    <select class="form-control" name="nom_marque">
        <?php lecture_table('id_marque', 'nom_marque','marque'); ?>
    </select></br>

    <!--km minimum -->
    <label>Kilomètres minimum</label>
    <select class="form-control" name="kilometres_minimum"/>
        <?php kilometres(0,10000,100000,250000); ?>
    </select></br>



    <label>Kilomètres maximum</label>
    <select class="form-control" name="kilometres_maximum">
        <?php kilometres(0,10000,100000,250000); ?>
    </select></br>

    <label>Prix minimum:</label>
    <select class="form-control" name="prix_minimum">
        <?php prix(0, 1000, 10000,50000); ?>
    </select></br>

    <label>Prix maximum:</label>
    <select class="form-control" name="prix_maximum">
        <?php prix(0, 1000, 10000,100000); ?>
    </select></br>

    <label>Années minimum :</label>
    <select class="form-control" name="annees_minimum">
        <?php annees(1959, 2019); ?>
    </select></br>

    <label>Années maximum :</label>
    <select class="form-control" name="annees_maximum">
        <?php annees(1959, 2019); ?>
    </select>
    <input type="submit" value="Submit">
</form>

