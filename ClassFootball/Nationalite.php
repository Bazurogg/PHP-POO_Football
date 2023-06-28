<?php

    class Nationalite {

        private Joueur $_joueur;
        private Pays $_pays;

        public function __construct(Joueur $joueur, Pays $pays)
        {
            $this -> _joueur = $joueur;
            $this -> _pays = $pays;
            $joueur -> ajouterNationalite($this);
        }

        public function getJoueur()
        {
            return $this->_joueur;
        }


        public function setJoueur($joueur)
        {
            $this->_joueur = $joueur;

            return $this;
        }

        public function getPays()
        {
            return $this->_pays;
        }


        public function setPays($pays)
        {
            $this->_pays = $pays;

            return $this;
        }

        public function __toString() {

            return "<span>" . $this -> getPays() . "</span>";
            
        }
    }
