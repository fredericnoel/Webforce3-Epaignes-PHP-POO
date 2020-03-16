<?php

date_default_timezone_set('Europe/Paris');

// On va chercher la classe Voiture
require_once './classes/Voiture.php';

// Maintenant, je peux instancier un objet avec l'opérateur new
// Les propriétés sont définies dans le constructeur
$voiture1 = new Voiture('Lada', 'Niva', 'moche', 1000);

// Invocation de la méthode pour chancer la couleur
$voiture1->changerCouleur('encorePlusMoche');

// Regardons comment se comporte notre objet
var_dump($voiture1);

