<?php

include "Pays.php";
include "Equipe.php";
include "Joueur.php";
include "Transfert.php";

$france = new Pays("France");
$angleterre = new Pays("Angleterre");
$psg = new Equipe("PSG", $france, 1970);
$ol = new Equipe("OL", $france, 1950);
$arsenal = new Equipe("Arsenal", $angleterre, 1886);
$lacazette = new Joueur("Lacazette", "Alexandre", date_create("1991-05-26"), $france);
$transfertLacazetteOL = new Transfert($lacazette, $ol, 2022, 2025);
$transfertLacazetteArsenal = new Transfert($lacazette, $arsenal, 2016, 2022);
$france->afficherEquipes();
$france->afficherJoueurs();
$angleterre->afficherEquipes();
$ol->afficherJoueurs();
$arsenal->afficherJoueurs();
$lacazette->afficherEquipes();
