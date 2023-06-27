<?php

class Pays {

    private string $_nomPays;
    private array $_equipes;
    private array $_resident;

 
    public function __construct($nomPays) {
   
        $this -> _nomPays = $nomPays;
        $this -> _equipes = [];
        $this -> _resident = [];

    }
    
    public function setNomPays($nomPays) {

        $this -> _nomPays = $nomPays;

    }

    public function getNomPays() {
        
        return $this -> _nomPays;
    
    }
    
    
    public function ajouterEquipe(Equipe $equipe) {
        
        $this -> _equipes [] = $equipe;

    }
    
    public function ajouterJoueur(Joueur $joueur) {

        $this -> _resident [] = $joueur;
        
    }
    
    public function afficherEquipe() {
        echo "<h2>" . $this -> getNomPays() ." :" . "</h2>";
        foreach ($this -> _equipes as $equipe) {
            echo $equipe . "<br>"; 
        }
        
    }
    
    public function afficherResident() {
        echo "<h2>" . $this -> getNomPays() ." :" . "</h2>";
        foreach ($this -> _resident as $resident) {
            echo $resident . "<br>"; 
        }
        
    }

    public function __toString() {

        return "<span>" . $this -> getNomPays() . "</span>";
        
    }
}