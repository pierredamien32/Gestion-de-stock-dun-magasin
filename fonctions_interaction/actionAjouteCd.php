<?php
    require '../Magasin.php';
    if(isset($_POST['bouton_enregistrer'])){
        if(!empty($_POST['nom']) && !empty($_POST['prix_achat']) && !empty($_POST['prix_vente']) && !empty($_POST['auteur']) && !empty($_POST['interprete'])){
            $nom=$_POST['nom'];
            $prixAchat=$_POST['prix_achat'];
            $prixVente=$_POST['prix_vente'];
            $interprete=$_POST['interprete'];
            $auteur=$_POST['auteur'];
            $magasin1->ajouterLivre($nom,$prixAchat,$prixVente,$interprete,$auteur);
            echo "Le cd <b>$nom</b> a été enregistré avec succès";
            $magasin1->bilanMagasin();
            echo "<br><a href=\"../Magasin.php\">Revenir sur le Menu</a>";
        }
    }
?>