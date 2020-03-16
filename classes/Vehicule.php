<?php

class Vehicule
{
    public $marque;
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



}
