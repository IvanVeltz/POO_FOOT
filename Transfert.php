<?php

class Transfert{

    // Attributs

    private Joueur $joueur;
    private Equipe $equipe;
    private int $dateDeDebut;
    private int $dateDeFin;

    // Assesseurs
    public function getJoueur(){
        return $this->joueur;
    }
    public function getEquipe(){
        return $this->equipe;
    }
    public function getDateDeDebut(){
        return $this->dateDeDebut;
    }
    public function getDateDeFin(){
        return $this->dateDeFin;
    }

    // Mutateurs
    public function setJoueur($joueur){
        $this->joueur = $joueur;
    }
    public function setEquipe($equipe){
        $this->equipe = $equipe;
    }
    public function setDateDeDebut($dateDeDebut){
        $this->dateDeDebut = $dateDeDebut;
    }
    public function setDateDeFin($dateDeFin){
        $this->dateDeFin = $dateDeFin;
    }

    // Constructeur
    public function __construct(Joueur $joueur, Equipe $equipe, $dateDeDebut, $dateDeFin){
        $this->joueur = $joueur;
        $this->equipê = $equipe;
        $this->dateDebut = $dateDeDebut;
        $this->dateFin = $dateDeFin;
        $joueur->transfert[] = $this;
        $equipe->transfert[] = $this;
    }
}

