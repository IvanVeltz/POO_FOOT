<?php

class Equipe{

    // Attributs
    private string $nom;
    private Pays $pays;
    private int $aneeCreation;
    private $transferts = [];

    // Assesseurs
    public function getNom(){
        return $this->nom;
    }
    public function getPays(){
        return $this->pays;
    }
    public function getAnneeCreation(){
        return $this->anneeCreation;
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
    public function setAnneeCreation($aneeCreation){
        $this->anneeCreation = $aneeCreation;
    }
    public function setTransferts($transferts){
        $this->transferts = $transferts;
    }

    // Constructeur
    public function __construct($nom, $pays, $aneeCreation){
        $this->nom = $nom;
        $this->pays = $pays;
        $this->anneeCreation = $aneeCreation;
        $pays->ajouterEquipe($this);
    }

    // Méthodes
    public function ajouterTransfert($transfert){
        $this->transferts[] = $transfert;
    }

    public function afficherJoueurs(){
        echo "Joueur étant passé par ".$this->getNom()."<br>".
               "<small>".$this->getPays()->getNom()." - ".$this->getAnneeCreation()."</small><br>";
        foreach($this->getTransferts() as $transfert){
            echo $transfert->getJoueur()->getPrenom()." ".$transfert->getJoueur()->getNom()."<br>";
        }
        echo "****************<br>";
    }
}