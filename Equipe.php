<?php

class Equipe{

    // Attributs
    private string $nom;
    private Pays $pays;
    private $transferts = [];

    // Assesseurs
    public function getNom(){
        return $this->nom;
    }
    public function getPays(){
        return $this->pays;
    }
    public function getTransferts(){
        return $this->transferts;
    }

    // Mutateurs
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setPays($pays){
        $this->pays = $pays;
    }
    public function setTransferts($transferts){
        $this->transferts = $transferts;
    }

    // Constructeur
    public function __construct($nom, $pays){
        $this->nom = $nom;
        $this->pays = $pays;
        $pays->equipe[] = $this;
    }
}