<?Php

include "./Affichage.php";
include "./Managment.php";

$objA = new Afficher_Stagiaire\Stagiaires;
$objB = new Gerer_Stagiaire\Stagiaires;

$result = $objA->setHallo();
echo $result;

echo "<br>";

echo $objB->setHello();