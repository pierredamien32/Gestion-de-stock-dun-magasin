<?php
    //require 'Produit.php';
    class Cd extends Produit {
        private String $auteur;
        private String $interprete;
        private $pistes=[];
        public function __construct($nom, $prix_achat, $prix_vente, $interprete, $auteur){
            Parent::__construct($nom, $prix_achat, $prix_vente);
            $this->auteur=$auteur;
            $this->interprete=$interprete;
        }
        public function getNom(){
            
            return $this->nom;
        }
        
    }
    // $cd=new Cd('Petit a petit',5,200,'Petit Miguelito','Petit Miguelito');
    // echo $cd->getNom();
    
?>