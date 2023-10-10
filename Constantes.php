<?php

class Stagiaires
{

    // Attribut
    const NOM = "Grain";
    const PRENOM = "Reda";

    // Methode

    public function getNom()
    {
        return self::NOM;
    }

    public function getPrenom()
    {
        return self::PRENOM;
    }
}

$Stagiaire = new Stagiaires;

echo $Stagiaire::NOM;

echo "<br>";

echo $Stagiaire->getNom();

echo "<br>";

echo $Stagiaire->getPrenom();