<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
</body>
</html>



<?php

include "Pays.php";
include "Equipe.php";
include "Joueur.php";
include "Transfert.php";

// Creation de Pays
$france = new Pays("France");
$angleterre = new Pays("Angleterre");

// Creation d'equipes
$psg = new Equipe("PSG", $france, 1970);
$ol = new Equipe("OL", $france, 1950);
$arsenal = new Equipe("Arsenal", $angleterre, 1886);

// Creation d'un joueur
$lacazette = new Joueur("Lacazette", "Alexandre", "1991-05-26", $france);

// Creation de transfet
$transfertLacazetteOL = new Transfert($lacazette, $ol, 2022, 2025);
$transfertLacazetteArsenal = new Transfert($lacazette, $arsenal, 2016, 2022);

// Affiche les equipes en France et Angleterre, et les joueurs en France
$france->afficherEquipes();
$angleterre->afficherEquipes();
$france->afficherJoueurs();

// Affiche les jouerus de l'OL et d'Arsenal
$ol->afficherJoueurs();
$arsenal->afficherJoueurs();

// Affiche les equipes où à jouer Lacazette
$lacazette->afficherEquipes();

