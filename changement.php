<?php
require 'base.php';
if(isset($_POST['id_marque']) && !empty($_POST['id_marque'])){
    $idMarque = $_POST['id_marque'];
}
?>
<p>
    <label >Modèle</label>
        <?php
        echo "<select name='modele' id='id_modele'>";
        $modeles = getModele($idMarque);
        $listModele = "";
        foreach ($modeles as $modele){
            $listModele.= '<option value='.$modele['id_modele'].'>'.$modele['nom'].'</option>';
        }
        echo $listModele;
        echo "</select>";
    ?>
</p>
