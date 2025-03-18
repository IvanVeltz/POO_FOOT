<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.23.3/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>
<?php

include "Pays.php";
include "Equipe.php";
include "Joueur.php";
include "Transfert.php";

// Creation de Pays
$tousPays = [];
$france = new Pays("France");
$angleterre = new Pays("Angleterre");
array_push($tousPays, $france, $angleterre);


// Creation d'equipes
$equipes = [];
$psg = new Equipe("PSG", $france, 1970);
$ol = new Equipe("OL", $france, 1950);
$arsenal = new Equipe("Arsenal", $angleterre, 1886);
array_push($equipes, $psg, $ol, $arsenal);

// Creation d'un joueur
$joueurs = [];
$lacazette = new Joueur("Lacazette", "Alexandre", "1991-05-26", $france);
$barcola = new Joueur("Barcola", "Bradley", "2002-09-02", $france);
array_push($joueurs, $lacazette, $barcola);


// Creation de transfet
$transfertLacazetteOL = new Transfert($lacazette, $ol, 2022, 2025);
$transfertLacazetteArsenal = new Transfert($lacazette, $arsenal, 2016, 2022);
$transfertBarcolaLyon = new Transfert($barcola, $ol, 2021, 2024);
$transfertBarcolaPSG = new Transfert($barcola, $psg, 2024, 2025);
?>

<!-- Afficher les pays avec leurs équipes -->
<div class=" uk-child-width-1-6@m uk-grid-small uk-grid-match uk-grid">
    <?php
        foreach($tousPays as $pays){
    ?>
    <div>
        <div class="container red uk-card uk-card-default uk-card-body uk-width-medium">
                <h3 class="clrWhite uk-card-title"><?php echo($pays->getNom()) ?></h3>
                <div>
                <?php 
                    foreach($pays->getEquipes() as $equipe){
                        echo "<p>".$equipe->getNom()."</p>";
                    }
                ?>
                </div>
        </div>

    </div>
    <?php
        }
    ?>  
</div>

<!-- Afficher les clubs avec leurs joueurs -->
<div class=" uk-child-width-1-6@m uk-grid-small uk-grid-match uk-grid">
    <?php
        foreach($equipes as $equipe){
    ?>
    <div>
        <div class="container blue uk-card uk-card-default uk-card-body uk-width-medium">
            <div>
                <h3 class="clrWhite uk-card-title"><?php echo($equipe->getNom()) ?></h3>
                <small><?php echo $equipe->getPays()->getNom()." - ".$equipe->getAnneeCreation()." ans"?></small>
            </div>
            <div>
                <?php 
                    foreach($equipe->getTransferts() as $transfert){
                        echo "<p>".$transfert->getJoueur()->getPrenom()." ".$transfert->getJoueur()->getNom().
                        " (".$transfert->getDateDeDebut()." - ".$transfert->getDateDeFin().")</p>";
                    }
                ?>
            </div>
        </div>

    </div>
    <?php
        }
    ?>  
</div>

<!-- Afficher les joueurs avec leur carriere -->
<div class=" uk-child-width-1-6@m uk-grid-small uk-grid-match uk-grid">
    <?php
        foreach($joueurs as $joueur){
    ?>
    <div>
        <div class="container green uk-card uk-card-default uk-card-body uk-width-medium">
                <div>
                    <h3 class="clrWhite uk-card-title"><?php echo $joueur->getPrenom()." ".$joueur->getNom() ?></h3>
                    <small><?php echo $joueur->getPays()->getNom()." - ".$joueur->calculerAge()." ans"?></small>
                </div>
                <div>
                <?php 
                    foreach($joueur->getTransferts() as $transfert){
                        echo "<p>".$transfert->getEquipe()->getNom().
                        " (".$transfert->getDateDeDebut()." - ".$transfert->getDateDeFin().")</p>";
                    }
                ?>
                </div>
        </div>

    </div>
    <?php
        }
    ?>  
</div>
    
</body>
</html>