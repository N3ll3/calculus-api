<?php

namespace App\Actions\Partie\Command;

class CreerPartieCommand extends PartieCommand 
{
    private $typePartie;

    private int $nombreOperation;

    private  $tempsImparti;

    private $creeeLe;

    private function __construct(int $partieId ,string $typePartie, int $nombreOperation, $tempsImparti, $creeeLe)
    {
        parent::__construct($partieId);

        $this->typePartie = $typePartie;
        $this->nombreOperation = $nombreOperation;
        $this->tempsImparti = $tempsImparti;
        $this->creeeLe = $creeeLe;
    } 

}