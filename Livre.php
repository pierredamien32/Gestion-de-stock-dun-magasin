<?php
    //require 'Produit.php';
    class Livre extends Produit{
        private String $auteur;
        private String $editeur;
        public function __construct($nom, $prix_achat, $prix_vente, $editeur, $auteur){
            Parent::__construct($nom, $prix_achat, $prix_vente);
            $this->auteur=$auteur;
            $this->editeur=$editeur;
        }

        public function getNom(){
            
            return $this->nom;
        }
    }
    //$livre=new Livre('Sao',5,200,'Mr-Top','Mr-Top');
    //echo $livre->getNom();

?>