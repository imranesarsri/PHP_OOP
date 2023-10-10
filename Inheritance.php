<?php

class Perssone
{
    private $Nom;
    private $Prenom;

    function __construct($Nom, $Prenom)
    {
        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
    }
}

class Stagiaires extends Perssone
{
    public $IdStagiaire;
    public function gitIdStagiaire()
    {
        return $this->IdStagiaire;
    }
    public function sitIdStagiaire($IdStagiaire)
    {
        return $this->IdStagiaire = $IdStagiaire;
    }
}

$Stagiaire = new Stagiaires("reda", "agrain");

$Stagiaire->sitIdStagiaire(10056);
echo "<pre>";
print_r($Stagiaire);
echo "</pre>";