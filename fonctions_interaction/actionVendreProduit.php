<?php
    require '../Magasin.php';
    if(isset($_POST['bouton_enregistrer'])){
        if(!empty($_POST['referenceProduit']) && !empty($_POST['nombreExemplaires'])){
            
            $referenceProduit=$_POST['referenceProduit'];
            $nombreExemplaires=$_POST['nombreExemplaires'];
            $magasin1->vendreProduit($referenceProduit,$nombreExemplaires);
            echo "Le produit a l'indice <b>$referenceProduit</b> a connu une dimunition";
            
        }
        echo "<br><a href=\"../Magasin.php\">Revenir sur le Menu</a>";
    }
?>