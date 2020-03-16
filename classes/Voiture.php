<?php

class Voiture
{
    public string $marque; // Le typage des variables possible PHP 7.4
    public $modele;
    public $couleur;
    public $masse;
    public $vitesse = 0;

    // On définit le constructeur
    public function __construct(string $mar, string $mod, string $cou, int $mas)
    {
        // On affecte les paramètres passés à l'objet que l'on va instancier
        // La variable $this désigne l'objet
        $this->marque = $mar;
        $this->modele = $mod;
        $this->couleur = $cou;
        $this->masse = $mas;
    }

    // Méthode pour changer la couleur
    public function changerCouleur(string $nouvelleCouleur) : void
    {
        $this->couleur = $nouvelleCouleur;
    }

    //Destructeur appelé automatiquement à la fin de l'exécution du script
    public function __destruct()
    {
        echo 'Object destroyed !!!';
    }
}