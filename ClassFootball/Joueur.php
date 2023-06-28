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
            $this -> _nationalite = [];
            $this -> _mercato = [];
            
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

        public function afficherRecapJoueur() {

            $nationaliteList = [];

            echo "<strong>" . $this -> getPrenom() . " " . $this -> getNom() . "</strong><br>" . $this -> getAge() . " ans. <br>";


            foreach ($this -> _nationalite as $nationalite) {
                
                $nationaliteList[] = $nationalite->getPays(); 
                
            }

            echo implode(' - ', $nationaliteList);
            
            echo "<br>";

            foreach ($this -> _mercato as $mercato) {
                
                echo $mercato -> getEquipe() -> getNomEquipe() . " (" . $mercato -> getAnneeDebut() . ")<br>";

            }

        }

        public function __toString() {

            return ($this -> getPrenom()) . " " . strtoupper($this -> getNom());
    
        }
    
    }