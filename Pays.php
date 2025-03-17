<?php

class Pays{
    
    // Attributs
    private string $nom;
    private $equipes = [];
    private $joueurs = [];

    // Assesseurs
    public function getNom(){
        return $this->nom;
    }
    public function getEquipes(){
        return $this->equipes;
    }
    public function getJoueurs(){
        return $this->joueurs;
    } 

    // Mutateurs
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setEquipes($equipes){
        $this->equipes = $equipes;
    }
    public function setJoueurs($joueurs){
        $this->joueurs = $joueurs;
    }

    // Constructeur
    public function __construct($nom){
        $this->nom = $nom;
    }
}