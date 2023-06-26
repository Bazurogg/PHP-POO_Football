<?php

class Contrat {

    private string $_anneeDebut;
    private Joueur $_joueur;
    private Equipe $_equipe;

    public function __construct(Joueur $joueur, Equipe $equipe, $_anneeDebut) {
        
        $this -> _joueur = $joueur;
        $this -> _equipe = $equipe;
        $this -> _anneeDebut = $_anneeDebut;
        $joueur -> ajouterContrat($this);
        $equipe -> ajouterContrat($this);
        $pays = $equipe -> getPays();
        $pays -> ajouterContrat($this);

    }

    public function setAnneeDebut($anneeDebut) {

        $this -> _anneeDebut = $anneeDebut;

    }

    public function getAnneeDebut() {

        return $this -> _anneeDebut;

    }
    
    public function getEquipe() {

        return $this -> _equipe;

    }

    public function getJoueur() {

        return $this -> _joueur;

    }

    public function __toString() {

        return "<p>" . $this -> getJoueur() . $this -> getEquipe() . " (" . $this -> getAnneeDebut() . ")</p>";

    }

}