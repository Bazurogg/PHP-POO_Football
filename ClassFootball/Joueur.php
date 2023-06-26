<?php

    class Joueur {

        private string $_nom;
        private string $_prenom;
        private string $_dateNaissance;
        private array $_mercato;
        private array $_nationalite;
        
        public function __construct($prenom, $nom, $dateNaissance){
        
            $this -> _prenom = $prenom;
            $this -> _nom = $nom;
            $this -> _dateNaissance;
            $this -> _mercato = [];
            $this -> _nationalite = [];
            
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
        

        public function getPrenom() {
            
            return $this -> _prenom;
        
        }
        
        public function getNom() {
    
            return $this -> _nom;
    
        }
        
        public function getDateNaisance() {
    
            return $this -> _dateNaissance;
    
        }
        

        public function ajouterContrat(Mercato $mercato) {
            
            $this -> _mercato[] = $mercato;

        }

        public function getAge() {
            $today = new DateTime(date('m.d.y'));
            $diff = $today -> diff();
        }

        public function afficherContrat() {

            echo "<p>" . strtoupper($this -> getPrenom()) . " " . strtoupper($this -> getNom()) . "<br>" . $this -> getNationalite() . " - " . $this -> getAge();

        }

        public function __toString() {

            return strtoupper($this -> getPrenom()) . " " . strtoupper($this -> getNom());
    
        }
    
    }