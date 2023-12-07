<?php

class lapin {
    public function __construct( private bool $mange, private string $nomAnimal, private string $nombreDePattes, private bool $enVie, private string $CrieDuLapin){
    }

    public function __get($name)
    {
        
    }
}