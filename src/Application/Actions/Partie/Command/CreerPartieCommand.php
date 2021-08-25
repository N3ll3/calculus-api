<?php

namespace App\Actions\Partie\Command;

class CreerPartieCommand extends PartieCommand 
{
    private $typePartie;

    private int $nombreOperation;



    private function __construct($partieId ,string $typePartie, int $nombreOperation)
    {
        parent::__construct($partieId);

        $this->typePartie = $typePartie;
        $this->nombreOperation = $nombreOperation;
    
      
    } 

}