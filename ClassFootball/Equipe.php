<?php

class Equipe {

    private Pays $_pays;
    private string $_nomEquipe;
    private string $_dateCreation;
    private array $_mercato;
    private array $_effectif;

    public function __construct(Pays $pays, $nomEquipe, $dateCreation) {

        $pays -> ajouterEquipe($this);
        $this -> _pays = $pays;
        $this -> _nomEquipe = $nomEquipe;
        $this -> _dateCreation = $dateCreation;
        $this -> _mercato = [];
        $this -> _effectif = [];
        
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
    
    public function ajouterTransfert (Mercato $mercato) {
        
        $this -> _mercato[] = $mercato;

    }
    
    public function ajouterJoueur (Mercato $joueur) {
        
        $this -> _effectif[] = $joueur;

    }
    
    public function afficherEffectif() {
        echo "<h2>" . $this -> getNomEquipe() . "</h2>" . "<p>" . $this -> getPays() . " - " . $this -> getDateCreation() . "</p>";
        foreach ($this -> _effectif as $joueur) {
            echo $joueur; 
        }
        
    }

    public function __toString() {
        
        return $this -> getNomEquipe();

    }


}