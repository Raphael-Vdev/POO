<?php 

class Client{

public function __construct(private string $ID, private string $compte){

}

public function afficherSesInfos(){
    echo "Nom : ".$this->ID, $this->compte;
}


}