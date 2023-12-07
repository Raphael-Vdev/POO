<?php

class Boss extends Employes{
    protected int $gestionEmployes = [];

    public function __construct($nom,$salaire,$gestionEmployes = [])
    {
        parent::__construct($nom,$salaire);
        $this->gestionEmployes = $gestionEmployes;
    }

    public function addEmployes (Employes $Employes){
        $this->gestionEmployes = $Employes;
    }

    public function AfficherInfoEmployes(){
        parent::AfficherInfoEmployes();
        
        echo "Gestionnaire des employés : {$this->getNom()}";
        foreach ($this->gestionEmployes as $Employes) {
            $Employes->AfficherInfoEmployes();
        }
    }
}