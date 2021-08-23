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

    public function typePartie(){
        return $this->typePartie;
    }

    public function nombreOperation(){
        return $this->nombreOperation;
    }

    public function tempsImparti(){
        return $this->tempsImparti;
    }

    public function creeeLe(){
        return $this->creeeLe;
    }
}