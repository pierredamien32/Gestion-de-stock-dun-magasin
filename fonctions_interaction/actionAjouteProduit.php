<?php
    require '../Magasin.php';
    if(isset($_POST['bouton_enregistrer'])){
        if(!empty($_POST['nom']) && !empty($_POST['prix_achat'] && !empty($_POST['prix_vente']))){
            $nom=$_POST['nom'];
            $prixAchat=$_POST['prix_achat'];
            $prixVente=$_POST['prix_vente'];
            $magasin1->ajouterProduit($nom,$prixAchat,$prixVente);
            echo "Le produit <b>$nom</b> a été enregistré avec succès";
            $magasin1->bilanMagasin();
            echo "<br><a href=\"../Magasin.php\">Revenir sur le Menu</a>";
        }
    }
    
?>