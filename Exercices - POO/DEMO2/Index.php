<?php

require_once "Personne.class.php";
$personne1 = new Personne("John","DOE");
$personne1 -> AfficherInfos();

echo "Prenom : " . $personne1->getPrenom() . "/r";
echo "Nom : " . $personne1->getNom() . "/r";
$personne1->setPrenom("Luke");

echo "Prenom : " . $personne1->getPrenom() . "/r";
echo "Nom : " . $personne1->getNom() . "/r";
