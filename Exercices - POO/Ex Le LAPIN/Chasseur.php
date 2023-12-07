<?php 

require_once "Humain.php" ;

class Chasseur extends Humain{
    public function __construct(private bool $arme, private bool $chasserAnimal)
    {
        
    }

}