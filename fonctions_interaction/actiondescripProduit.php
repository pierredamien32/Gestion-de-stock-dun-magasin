<?php
    require '../Magasin.php';
    if(isset($_POST['bouton_enregistrer'])){
        if(!empty($_POST['referenceProduit']) && !empty($_POST['newdescrip'])){
            $referenceProduit=$_POST['referenceProduit'];
            $newdescrip=$_POST['newdescrip'];
            $magasin1->editDescription($referenceProduit,$newdescrip);
            echo "La description du produit a l'indice <b>$referenceProduit</b> a été modifier avec succès";
            $magasin1->bilanMagasin();
        }
        echo "<br><a href=\"../Magasin.php\">Revenir sur le Menu</a>";
    }
?>