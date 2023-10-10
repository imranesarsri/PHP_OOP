<?php

class Stagiaires
{
    public $Nom = "Grain";
    private $Prenom = "Reda";
    protected $Age = 20;


}

$Stagiaire = new Stagiaires;
echo $Stagiaire->Nom;
// echo $Stagiaire->Prenom;
// echo $Stagiaire->Age;