<script type="text/javascript" src="javascript/jquery/jquery.js"></script>

<script type="text/javascript">

<form action="note_titre_edit.php" name="formInsert" id="formInsert"  enctype="multipart/form-data" method="post" style="padding:10px" onsubmit="return controle_formulaire();">
<?php
require 'base.php';

//recupération des marques?>
<p>
    <label >Choisir une marque ?</label><br />
    <?php
        $onChange = "OnChange=\"sendData('id_marque='+this.value,'changement.php')\" onKeyUp=\"sendData('\"id_marque\"='+this.value,'changement.php')\" ";        
        echo "<select name='marque' ".$onChange." id='id_marque'>";
        $marques = getMarque();
        $listMarque = "";
        $ct = 0;
        foreach ($marques as $marque){
            $listMarque.= '<option value='.$marque['id_marque'].'>'.$marque['nom_marque'].'</option>';
            if ($ct==0)
                    $idMarque = $marque['id_marque'];
            $ct++;
        }
        echo $listMarque;
        echo "</select>";        
    ?>
    
</p>
<div id="modification">
    <p>
        <label >Choisir un modele ?</label><br />
            <?php
            echo "<select name='modele' id='id_modele'>";
            $modeles = getModele($idMarque);
            echo $marques;
            $listModele = "";
            foreach ($modeles as $modele){
                $listModele.= '<option value='.$modele['id_modele'].'>'.$modele['nom'].'</option>';
            }
            echo $listModele;
            echo "</select>";
        ?>
    </p>
</div>

