<?php

use Broadway\EventSourcing\SimpleEventSourcedEntity as BroadwayEventSoucingSimpleEntity;

//Event Source
class partieCreateur extends BroadwayEventSoucingSimpleEntity
{
    private int $partieId; // aggregate root id

    private int $partieCreateurId;

    private $typePartie;

    private int $nombreOperation;

    private  $tempsImparti;

    private $creeeLe;

   private function __construct(int $partieId, int $partieCreateurId ,string $typePartie, int $nombreOperation, $tempsImparti, $creeeLe)
    {
        $this->partieId = $partieId;
        $this->partieCreateurId = $partieCreateurId;
        $this->typePartie = $typePartie;
        $this->nombreOperation = $nombreOperation;
        $this->tempsImparti = $tempsImparti;
        $this->creeeLe = $creeeLe;
    } 
}