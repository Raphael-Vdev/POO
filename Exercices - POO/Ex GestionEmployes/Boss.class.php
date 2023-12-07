<?php

class Boss extends Employes{
    protected int $gestionEmployes;

    public function __construct(string $ID, string $compte, array $gestionEmployes)
    {
        parent::__construct($nom,$salaire);
        $this->gestionEmployes[] = $gestionEmployes;
    }

    public function getgestionEmployes(){return $this->gestionEmployes;}

    public function setgestionEmployes($gestionEmployes){$this->$gestionEmployes = $gestionEmployes;}

    public function addEmployes($Employes){$gestionEmployes[] = $Employes;}

    public function AfficherInfoEmployes(){
        parent::AfficherInfoEmployes();
        echo $this->gestionEmployes;
    }
}