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

   private function __construct(int $partieId ,string $typePartie, int $nombreOperation, $tempsImparti, $creeeLe)
    {
        $this->partieId = $partieId;
        $this->typePartie = $typePartie;
        $this->nombreOperation = $nombreOperation;
        $this->tempsImparti = $tempsImparti;
        $this->creeeLe = $creeeLe;
    }

}