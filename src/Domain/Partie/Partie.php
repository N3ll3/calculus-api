<?php

namespace App\Domain\Partie;


use Broadway\EventSourcing\EventSourcedAggregateRoot as EventSourcedAggregateRoot;
use DateTime;
use TypePartie;

use function PHPSTORM_META\type;

class Partie extends EventSourcedAggregateRoot
{

    
    private int $partieId; // aggregate root id

    private $typePartie;

    private int $nombreOperation;

    private  $tempsImparti;

    private $creeeLe;

    private function __construct(int $partieId, TypePartie $typePartie, int $nombreOperation, DateTime $tempsImparti, DateTime $creeeLe)
    {
        $this->partieId = $partieId;
        $this->typePartie = $typePartie;
        $this->nombreOperation = $nombreOperation;
        $this->tempsImparti = $tempsImparti;
        $this->creeeLe = $creeeLe;
    }

    


}