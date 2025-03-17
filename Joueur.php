<?php

class Joueur{

    // Attributs
    private string $nom;
    private string $prenom;
    private DateTime $dateDeNaissance;
    private Pays $pays;
    private $transferts = [];

    // Assesseurs
    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function dateDeNaissance(){
        return $this->dateDeNaissance;
    }
    public function getPays(){
        return $this->pays;
    }

    // Mutateurs
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    public function setDateDeNaissance($dateDeNaissance){
        $this->dateDeNaissance = $dateDeNaissance;
    }
    public function setPays($pays){
        $this->pays = $pays;
    }

    // constructeur
    public function __construct($nom, $prenom, $dateDeNaissance, Pays $pays){
        $this->nom = $nom;
        $this->prenom = $prenom
        $this->dateDeNaissance = $dateDeNaissance;
        $this->pays = $pays;
        array_push($pays->joueur, $this);
    }
}