<?php

class Equipe{

    // Attributs
    private string $nom;
    private Pays $pays;
    private $transferts = [];

    // Assesseurs
    public function getNom(){
        return $this->nom
    }
    public function getPays(){
        return $this->pays
    }
    public function getTransferts(){
        return $this->transferts
    }

    // Mutateurs
    public function setNom($nom){
        $this->nom = $nom;
    }
}