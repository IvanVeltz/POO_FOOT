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
    public function getDateDeNaissance(){
        return $this->dateDeNaissance;
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
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    public function setDateDeNaissance($dateDeNaissance){
        $this->dateDeNaissance = $dateDeNaissance;
    }
    public function setPays($pays){
        $this->pays = $pays;
    }
    public function setTransferts($transferts){
        $this->transferts = $transferts;
    }


    // constructeur
    public function __construct($nom, $prenom, string $dateDeNaissance, Pays $pays){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateDeNaissance = new DateTime($dateDeNaissance);
        $this->pays = $pays;
        $pays->ajouterJoueur($this);
    }

    // Méthodes
    public function ajouterTransfert($transfert){
        $this->transferts[] = $transfert;
    }

    public function calculerAge(){
        $dateDeNaissance = $this->getDateDeNaissance();
        $aujourdhui = new DateTime(date("Y-m-d"));
        $age = $dateDeNaissance->diff($aujourdhui);
        return $age->format('%y');
    }

    public function afficherEquipes(){
        echo $this->getPrenom()." ".$this->getNom()."<br>
            <small>".$this->getPays()->getNom()." - ".$this->calculerAge()." ans</small></br>";
        foreach($this->transferts as $transfert){
            echo "->".$transfert->getEquipe()->getNom()." - "
                .$transfert->getDateDeDebut()." - ".$transfert->getDateDeFin()."<br>";
        }
        echo "****************<br>";
    }
}