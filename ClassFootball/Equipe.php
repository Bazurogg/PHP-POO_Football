<?php

class Equipe {

    private Pays $_pays;
    private string $_nomEquipe;
    private string $_dateCreation;
    private array $_contrats;

    public function __construct(Pays $pays, $nomEquipe, $dateCreation) {

        $pays -> ajouterEquipe($this);
        $this -> _pays = $pays;
        $this -> _nomEquipe = $nomEquipe;
        $this -> _dateCreation = $dateCreation;
        $this -> _contrats = [];
        
    }

    public function setNomEquipe($nomEquipe) {
        
        $this -> _nomEquipe = $nomEquipe;

    }

    public function setDateCreattion($dateCreation) {

        $this -> _dateCreation = $dateCreation;

    }

    public function getNomEquipe() {

        return $this -> _nomEquipe;

    }

    public function getDateCreation() {

        return $this -> _dateCreation;

    }
    
    public function getPays() {

        return $this -> _pays;

    }
    
    public function ajouterContrat (Contrat $contrat) {
        
        $this -> _contrats[] = $contrat;
    }

    public function __toString() {
        
        return $this -> getNomEquipe();

    }


}