<?php
    class Produit{
        public String $nom;
        public int $prix_achat;
        public int $prix_vente;
        public int $nbre_exemplaire=0;
        public String $description="pas de description";

        public function __construct ($nom, $prix_achat, $prix_vente){

            $this->nom = $nom;
            $this->prix_achat = $prix_achat;
            $this->prix_vente = $prix_vente;
            
        }

        //creation des getters

        public function getNom(){

            return $this->nom;
        }

        public function getPrix_achat(){

            return $this->prix_achat;
        }

        public function getPrix_vente(){

            return $this->prix_vente;
        }

        public function getNbre_exemplaire(){

            return $this->nbre_exemplaire;
        }

        public function getDescription(){

            return $this->description;
        }

        //creation des setters
        
        public function setNom($newNom){

            $this->nom = $newNom;
        }

        public function setPrix_achat($newPrix_achat){

            $this->prix_achat = $newPrix_achat;
        }

        public function setPrix_vente($newPrix_vente){

            $this->prix_achat = $newPrix_vente;
        }

        public  function setNbre_exemplaire($newNbre_exemplaire){

            $this->nbre_exemplaire = $newNbre_exemplaire;
        }

        public function setDescription($newDescription){

            $this->description = $newDescription;
        }

        // creation function des methodes

        public function affichageDescription($nompro){
            
            if($nompro == $this->nom){

                echo 'La description du produit ' .$nompro. ' est :' .$this->description;
            }
        }

        public function editDescription($nompro,$newDescrip){
            if($nompro == $this->nom){

                $this->description=$newDescrip;
            }

        }

        public  function augmenterStok($addition){

            $this->nbre_exemplaire = $this->nbre_exemplaire + $addition;
        }

        public function diminuerStock($soustrait){

            $this->nbre_exemplaire = $this->nbre_exemplaire - $soustrait;
        }

    }

    $produit = new Produit ('Tomate', 250, 2000);
    //echo $produit->getNom();
    //echo $produit1->getNbre_exemplaire();
    // echo $produit1->getDescription().'<br>';
    // $produit1->setNom("Piment");
    // echo $produit1->getNom().'<br>';
    // $produit1->affichageDescription('Piment');
    // $produit1->augmenterStok(50);
    // echo $produit1->getNbre_exemplaire();

    // $produit1->diminuerStock(25);
    // echo $produit1->getNbre_exemplaire();
?>