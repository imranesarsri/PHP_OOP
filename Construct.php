<?php

class Stagiaires
{
    public $Nom = "Grain";
    public $Prenom = "Reda";

    public function __construct()
    {
        echo "Bienvenue Mr  " . $this->Nom . " " . $this->Prenom;
    }
}

$Stagiaire = new Stagiaires;