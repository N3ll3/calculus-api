<?php

namespace App\Domain\Partie\Command;

use App\Domain\Partie\PartieId;
use App\Domain\Partie\PartieType;

class CreerPartieCommand extends PartieCommand 
{
    private $typePartie;

    private int $nombreOperation;



    private function __construct(PartieId $partieId , PartieType $typePartie, int $nombreOperation)
    {
        parent::__construct($partieId);

        $this->typePartie = $typePartie;
        $this->nombreOperation = $nombreOperation;
    
      
    } 

}