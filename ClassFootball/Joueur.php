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
            $this -> _dateNaissance = $dateNaissance;
            $this -> _mercato = [];
            $this -> _nationalite = [];
            
        }

        public function setPrenom($prenom) {

            $this -> _prenom = $prenom;
        }
    
        public function setNom($nom) {
    
            $this -> _nom = $nom;
        }

        public function setDateNaissance($dateNaissance) {

            $this -> _dateNaissance = $dateNaissance;
        
        }
        

        public function getPrenom() {
            
            return $this -> _prenom;
        
        }
        
        public function getNom() {
    
            return $this -> _nom;
    
        }
        
        public function getDateNaissance() {
    
            return $this -> _dateNaissance;
    
        }
        
        public function ajouterTransfert(Mercato $mercato) {
            
            $this -> _mercato[] = $mercato;

        }
        
        public function ajouterNationalite(Nationalite $nationalite) {
            
            $this -> _nationalite[] = $nationalite;

        }

        public function getAge() {

            $dateBirth = new DateTime($this -> getDateNaissance());
            $today = new DateTime(date('m.d.y'));
            $diff = $today -> diff($dateBirth) -> y;

            return $diff;

        }

        public function afficherContrat() {

            echo "<p>" . strtoupper($this -> getPrenom()) . " " . strtoupper($this -> getNom()) . "<br>" . " - " . $this -> getAge();

        }

        public function __toString() {

            return strtoupper($this -> getPrenom()) . " " . strtoupper($this -> getNom());
    
        }
    
    }