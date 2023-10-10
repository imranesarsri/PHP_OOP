<?php

class Stagiaires
{
    public $Nom = "Grain";
    public $Prenom = "Reda";

    public function __construct()
    {
        echo "Bienvenue Mr  " . $this->Nom . " " . $this->Prenom;
    }

    public function __destruct()
    {
        echo "a la prochaire fois, monsieur " . $this->Nom . " " . $this->Prenom;
    }
}

$Stagiaire = new Stagiaires;