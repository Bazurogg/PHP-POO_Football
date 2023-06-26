<?php

    class Joueur {

        private string $_nom;
        private string $_prenom;
        private string $_dateNaissance;
        private string $_nationalite;
        private array $_contrats;
        
        public function __construct($prenom, $nom, $dateNaissance, $nationalite){
        
            $this -> _prenom = $prenom;
            $this -> _nom = $nom;
            $this -> _contrats = [];
            
        }

        public function setPrenom($prenom) {

            $this -> _prenom = $prenom;
        }
    
        public function setNom($nom) {
    
            $this -> _nom = $nom;
        }

        public function setDatNaissance($dateNaissance) {

            $this -> _dateNaissance = $dateNaissance;
        
        }
        
        public function setNationalite($nationalite) {

            $this -> _nationalite = $nationalite;
        
        }

        public function getPrenom() {
            
            return $this -> _prenom;
        
        }
        
        public function getNom() {
    
            return $this -> _nom;
    
        }
        
        public function getDateNaisance() {
    
            return $this -> _dateNaissance;
    
        }
        
        public function getNationalite() {
    
            return $this -> _nationalite;
    
        }

        public function ajouterContrat(Contrat $contrat) {
            
            $this -> _contrats[] = $contrat;

        }

        public function getAge() {
            $today = new DateTime(date('m.d.y'));
        }

        public function afficherContrat() {

            echo "<p>" . strtoupper($this -> getPrenom()) . " " . strtoupper($this -> getNom()) . "<br>" . $this -> getNationalite() . " - " . //resultat calcul age joueur;

        }

        public function __toString() {

            return strtoupper($this -> getPrenom()) . " " . strtoupper($this -> getNom());
    
        }
    
    }