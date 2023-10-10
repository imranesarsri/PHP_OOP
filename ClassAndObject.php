<?php

class Stagiaires
{

    // Attribut
    public $Nom = "Grain";
    public $Prenom = "Reda";

    // Methode

    public function getNom()
    {
        return $this->Nom;
    }

    public function getPrenom()
    {
        return $this->Prenom;
    }
}

$Stagiaire = new Stagiaires;
echo $Stagiaire->getNom();

echo "<br>";

echo $Stagiaire->getPrenom();