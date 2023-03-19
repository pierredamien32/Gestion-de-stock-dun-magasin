<?php
    
    if(isset($_POST['b_choix'])){
        if(!empty($_POST['choix']) && ($_POST['choix']>=1 || $_POST['choix']<=6)){
            $choix=$_POST['choix'];
            switch ($choix){
                case 1: require 'formulaireProduit.php';
                    break;
                case 2: require 'formulaireLivre.php';
                    break;
                case 3: require 'formulaireCd.php';
                    break;
                case 4: require 'acheterProduit.php';
                    break;
                case 5: require 'vendreProduit.php';
                    break;
                case 6: require 'descriptionProduit.php';
                    break;
                case 7: require 'afficheBilan.php';
                    break;
                default: echo "Veuillez entrer un chiffre valide";
                    echo "<br><a href=\"../Magasin.php\">Revenir sur le Menu</a>";
            }
        }
    }
?>