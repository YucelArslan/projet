<head>
<!--
    <script src="css/bootstrap.css "></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
--> <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
   <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> 
-->


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/i18n/defaults-*.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
<scrip src="js/"></script>
</head>



<?php
require_once "function/function.php";
require_once "functions.php";

?>


    <?php
    $bdd = opendatabase();
    ?>

<body>
<div class="container-fluid">
<div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
    </div>
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
    
    <form class="form-group row" action="traitement_recherche.php" method="post" >
    <div class="container">
        <div class="row">

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <label>Marque :</label>
                <?php 
                $onChange = "OnChange=\"sendData('id_marque='+this.value,'changement.php')\" onKeyUp=\"sendData('\"id_marque\"='+this.value,'changement.php')\" ";        
                echo "<select class='selectpicker'   name='nom_marque'".$onChange.'>';
                ?>

                    <?php lecture_table('id_marque', 'nom_marque','marque'); ?>
                </select>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div id="modification">
                    <label>Modele :</label>
                    <select class="selectpicker" name="energie">
                        <?php lecture_table('id_modele','nom', 'modele');?>
                    </select>
                </div>
            </div>
        </div>
            <!-- 2 ieme lignes-->
        <div class="row">

            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <label>Kilomètres minimum</label>
                <select class="selectpicker" name="kilometres_minimum" multiple>
                    <?php kilometres(0,10000,100000,250000); ?>
                </select>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" >
                <label>Kilomètres maximum</label>
                <select class="selectpicker" name="kilometres_maximum" multiple>
                    <?php kilometres(0,10000,100000,250000); ?>
                </select>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <label>Prix minimum:</label>
                <select class="selectpicker" name="prix_minimum" multiple>
                    <?php prix(0, 1000, 10000,50000); ?>
                </select>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <label>Prix maximum:</label>
                <select class="selectpicker" name="prix_maximum" multiple>
                    <?php prix(0, 1000, 10000,100000); ?>
                </select>
            </div>
        </div>

            <!-- 3ligne -->
        <div class="row">

            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <label>Années minimum :</label>
                <select class="selectpicker" name="annees_minimum" multiple>
                    <?php annees(1959, 2019); ?>
                </select>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <label>Années maximum :</label>
                <select class="selectpicker" name="annees_maximum" multiple>
                    <?php annees(1959, 2019); ?>
                </select>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <label>Energie :</label>
                <select class="selectpicker" name="energie" multiple>
                    <?php lecture_table('id_energie','nom_energie', 'energie');?>
                </select>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <input type="submit" value="Rechercher">
            </div>
        </div>
    </div>
    </form>
    
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
    </div>
</div>
</div>
</body>