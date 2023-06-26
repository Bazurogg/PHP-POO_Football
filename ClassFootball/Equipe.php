<?php

class Equipe {

    private Pays $_pays;
    private string $_nomEquipe;
    private string $_dateCreation;
    private array $_contrat;

    public function __construct(Pays $pays, $nomEquipe, $dateCreation) {

        $pays -> ajouterEquipe($this);
        $this -> _pays = $pays;
        $this -> _dateCreation = $dateCreation;
        $this -> _contrat = [];
        
    }

    public function setNomEquipe($nomEquipe) {
        
        return $this -> _nomEquipe = $nomEquipe;

    }

    public function setDateCreattion($dateCreation) {

        return $this -> _dateCreation = $dateCreation;
        
    }
}