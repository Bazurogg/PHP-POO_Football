<?php

class Nationalite {

    private Joueur $_joueur;

    public function __construct(Joueur $joueur, ) {

        $this -> _joueur = $joueur; 
        $joueur -> ajouterNationalite($this);
        
    }

    
    public function getJoueur() {

        return $this -> _joueur;

    }

}

?>