<?php

class Pays {

    private string $_nomPays;
    private array $_equipes;
    private array $_contrats;

 
    public function __construct($nomPays, $_dateCreation) {
   
        $this -> _nomPays = $nomPays;
        $this -> _equipes = [];
        $this -> _contrats = [];

    }
    
    public function setNomPays($nomPays) {

        $this -> _nomPays = $nomPays;

    }

    public function getNomPays() {
        
        return $this -> _nomPays;
    
    }
    
    public function afficherEquipe() {
        foreach ($this -> _equipes as $equipe) {
            echo $equipe; 
        }
    }

    public function ajouterEquipe(Equipe $equipe) {

        $this -> _equipes [] = $equipe;

    }
    
    public function ajouterContrat(Contrat $contrat) {

        $this -> _contrats[] = $contrat;

    }

    public function __toString() {

        return "<span>" . $this -> getNomPays() . "</span><br>";
        
    }
}