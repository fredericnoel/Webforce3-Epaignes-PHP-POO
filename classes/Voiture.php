<?php

class Voiture extends Vehicule
{
    // Getter pour la masse
    public function getMasse()
    {
        return $this->masse;
    }

    public function setMasse(float $nouvelleMasse)
    {
        $this->masse = $nouvelleMasse;
    }

    // Méthode pour changer la couleur
    public function changerCouleur(string $nouvelleCouleur) : void
    {
        $this->couleur = $nouvelleCouleur;
    }

    public function changerVitesse(float $variationVitesse)
    {
        $this->vitesse += $variationVitesse;
    }

    // Destructeur appelé automatiquement à la fin de l'exécution du script
    public function __destruct()
    {
        echo 'Object destroyed !!!';
    }
}
