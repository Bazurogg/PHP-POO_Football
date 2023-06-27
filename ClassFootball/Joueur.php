<?php

    class Joueur {

        private string $_nom;
        private string $_prenom;
        private string $_dateNaissance;
        private Pays $_pays1;
        private ?Pays $_pays2; // "?" Indique qu'il peut contenir une instance de la class Pays OU null. Sinon erreur PHP -> "Fatal error: Uncaught TypeError: Cannot assign null to property"
        private array $_mercato;
        
        
        public function __construct($prenom, $nom, $dateNaissance, Pays $pays1, Pays $pays2 = null){
            
            $this -> _prenom = $prenom;
            $this -> _nom = $nom;
            $this -> _dateNaissance = $dateNaissance;
            $pays1 -> ajouterJoueur($this);
            if ($pays2) {
                $pays2->ajouterJoueur($this);
            }
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
    
        public function getPays() {

            return $this->_pays1;

        }

        public function getPays2() {
            return $this->_pays2;
        }
        
        public function getDateNaissance() {
    
            return $this -> _dateNaissance;
    
        }
        
        public function ajouterTransfert(Mercato $mercato) {
            
            $this -> _mercato[] = $mercato;

        }
        
        public function getAge() {

            $dateBirth = new DateTime($this -> getDateNaissance());
            $today = new DateTime(date('m.d.y'));
            $diff = $today -> diff($dateBirth) -> y;

            return $diff;

        }

        public function afficherRecapJoueur() {

            echo "<strong>" . $this -> getPrenom() . " " . $this -> getNom() . "</strong><br>" . $this -> getAge() . " ans. <br>";

            echo $this -> getPays() -> getNomPays();

            if ($this->getPays2()) {

                echo "/" . $this -> getPays2() -> getNomPays();

            }

            echo "<br>";

            foreach ($this -> _mercato as $mercato) {
                
                echo $mercato -> getEquipe() -> getNomEquipe() . " (" . $mercato -> getAnneeDebut() . ")<br>";
            }

        }

        public function __toString() {

            return ($this -> getPrenom()) . " " . strtoupper($this -> getNom());
    
        }
    
    }