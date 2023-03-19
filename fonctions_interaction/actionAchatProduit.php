<?php
    require '../Magasin.php';
    //if(isset($_POST['bouton_enregistrer'])){
        if(!empty($_POST['referenceProduit']) && !empty($_POST['nombreExemplaires'])){
            $referenceProduit=$_POST['referenceProduit'];
            $nombreExemplaires=$_POST['nombreExemplaires'];
            $magasin1->acheterProduit($referenceProduit,$nombreExemplaires);
            echo "Le produit a l'indice <b>$referenceProduit</b> a été ajouter dans notre stock";
            $magasin1->bilanMagasin();
            
        }
        echo "<br><a href=\"../Magasin.php\">Revenir sur le Menu</a>";
    //}
    
?>