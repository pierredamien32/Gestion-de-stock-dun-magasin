<?php
    require 'Produit.php';
    require_once 'Livre.php';
    require_once 'Cd.php';
    
    
    class Magasin{
        private float $solde;
        private $tableproduit=[];
        

        public function __construct($solde){
            $this->solde=$solde;
        }

        public function getSolde(){
            return $this->solde;
        }

        public function getTableproduit(){
            return $this->tableproduit;
        }

        public function setSolde($newSolde){
            $this->solde=$newSolde;
        }

        public static function setTableproduit($newTable){
            $this->tableproduit=$newTable;
        }
        
        public function ajouterProduit(String $nom, float $prixAchat, float $prixVente ){
            $this->tableproduit[]=new Produit ($nom,$prixAchat,$prixVente);
        }

        public function ajouterLivre(String $nom, float $prixAchat, float $prixVente, String $editeur, String $auteur){
            $this->tableproduit[]=new Livre ($nom,$prixAchat,$prixVente,$editeur,$auteur);
        }
        
        public function ajouterCd(String $nom, float $prixAchat, float $prixVente, String $interprete, String $auteur){
            $this->tableproduit[]=new Cd ($nom,$prixAchat,$prixVente,$interprete,$auteur);
        }

        public  function soldeTotal($total){
            $this->solde = $this->solde + $total;
        }

        public function acheterProduit(int $referenceProduit,int $nombreExemplaires){
            for ($i=0; $i < count($this->tableproduit) ; $i++) { 
                if($referenceProduit==$i){
                    $this->tableproduit[$i]->augmenterStok($nombreExemplaires);
                    
                }
            }
             
        }

        public function editDescription(int $referenceProduit, String $newdescrip){
            for ($i=0; $i < count($this->tableproduit) ; $i++) { 
                if($referenceProduit==$i){
                    $this->tableproduit[$i]->setDescription($newdescrip);

                }
            }
             
        }
        
        public function vendreProduit(int $referenceProduit,int $nombreExemplaires){
            for ($i=0; $i < count($this->tableproduit) ; $i++) { 
                if($referenceProduit==$i && $this->tableproduit[$i]->getNbre_exemplaire() > $nombreExemplaires){
                    $this->tableproduit[$i]->diminuerStock($nombreExemplaires);
                }
            }
        }

        public function bilanMagasin(){
                echo "<h3>|-------------------Bilan du Magasin--------------|</h3><br>";
                $benefice=0;
                
            for ($i=0; $i < count($this->tableproduit) ; $i++) { 
                $num=$i+1;
                echo "<br>| <i><u><b>Produit N° $num: </b></u></i> <br>";
                echo "<br>| Nom: <b>".$this->tableproduit[$i]->getNom()."</b> <br>";
                echo "<br>| Prix d'achat: <b>".$this->tableproduit[$i]->getPrix_achat()."</b>  <br>";
                echo "<br>| Prix d'vente: <b>".$this->tableproduit[$i]->getPrix_vente()."</b>  <br>";
                echo "<br>| Nombre d'exemplaire: <b>".$this->tableproduit[$i]->getNbre_exemplaire()."</b><br>";
                echo "<br>| Description du Produit: <b>".$this->tableproduit[$i]->getDescription()."</b><br>";
                $benefice=$this->tableproduit[$i]->getPrix_vente()-$this->tableproduit[$i]->getPrix_achat();
                $this->solde=$this->solde+$benefice;
            }
                echo "<br><i>Le solde du Magasin est: ".$this->solde." FCFA</i>";
                echo "<h3>|-------------------FIN----------------------------|</h3><br>";
        }


        public function interaction(){
            echo '<h3>|----------------------------------------------------|</h3>';
            echo '<h3>|                  BIENVENUE DANS LE MAGASIN         </h3>';
            echo '<h3>|----------------------------------------------------|</h3>';
            
            echo '<br>Taper <b>1</b> Pour Ajouter un produit Standard';
            echo '<br>Taper <b>2</b> Pour Ajouter un Livre';
            echo '<br>Taper <b>3</b> Pour Ajouter un Cd';
            echo '<br>Taper <b>4</b> Pour Acheter un produit';
            echo '<br>Taper <b>5</b> Pour Vendre un produit';
            echo '<br>Taper <b>6</b> Pour Modifier la description';
            echo '<br>Taper <b>7</b> Pour Afficher le bilan';
          
            ?>

            <br>
            <form action="fonctions_interaction/action.php" method="post">
                Faite votre choix: <input type="number" name="choix">
                <input type="submit" value="Choix" name="b_choix">
                
            </form>
            <?php    
        }
    }

    $magasin1=new Magasin(0);
    $magasin1->interaction();
    $magasin1->ajouterProduit('Parfum',200,1000);
    $magasin1->ajouterProduit('Piment',100,500);
    $magasin1->ajouterProduit('Tomate',300,600);
    $magasin1->ajouterLivre('Sao',5,200,'Mr-Top','Mr-Top');
    $magasin1->ajouterCd('Petit a petit',5,200,'Petit Miguelito','Petit Miguelito');
    
    $magasin1->acheterProduit(0,25);
    $magasin1->acheterProduit(1,5);
    $magasin1->acheterProduit(2,2);
    $magasin1->acheterProduit(2,6);
    $magasin1->vendreProduit(2,2);
    
    $magasin1->vendreProduit(0,100);
    //$magasin1->bilanMagasin();
    $taille=sizeof($magasin1->getTableproduit());
    //echo "la taille ".$taille;
    // echo '<br>';
    // echo '<pre>';
    // print_r($magasin1->getTableproduit());
    // echo '</pre>';
    // echo '<br>';
    
   
  
?>