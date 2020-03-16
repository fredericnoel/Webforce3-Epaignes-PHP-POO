<?php

date_default_timezone_set('Europe/Paris');

// On va chercher la classe Voiture
require_once './classes/Voiture.php';

// Maintenant, je peux instancier un objet avec l'opérateur new
$voiture1 = new Voiture();

$voiture1->marque = 'Lada';
$voiture1->modele = 'Niva';
$voiture1->couleur = 'moche';
$voiture1->masse = 1000;



// Regardons comment se comporte notre objet
var_dump($voiture1);

