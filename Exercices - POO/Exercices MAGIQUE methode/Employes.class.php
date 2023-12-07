<?php

class Employes{
    private $nom;
    private $salaire;


public function __construct($valeur1, $valeur2) {
    $this->nom = $valeur1;
    $this->salaire = $valeur2;
}

//Méthode Magique __get

public function __get ($nomAttr){

    if(property_exists($this,$nomAttr)){
        return $this->nomAttr;
    }else{
        trigger_error("L'attribut $nomAttr n'existe pas", E_USER_ERROR);
        return null;
        }
    }

}

$objet = new Employes('val1','val2');

echo $objet->attribut1 . "/n" ;
echo $objet->attribut2 . "/n" ;

echo $objet->attribut3;