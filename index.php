<?php

date_default_timezone_set('Europe/Paris');

// On va chercher la classe Voiture
require_once './classes/Voiture.php';

// Maintenant, je peux instancier un objet avec l'opérateur new
$voiture1 = new Voiture();

// Regardons comment se comporte notre objet
var_dump($voiture1);

