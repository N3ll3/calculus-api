<?php

namespace App\Domain\Partie;


//Event
class PartieCreee 
{
    private int $partieId;

    private $typePartie;

    private int $nombreOperation;

    private  $tempsImparti;

    private $creeeLe;

   private function __construct(string $partieId ,string $typePartie, int $nombreOperation)
    {
        $this->partieId = $partieId;
        $this->typePartie = $typePartie;
        $this->nombreOperation = $nombreOperation;
      
    }

}