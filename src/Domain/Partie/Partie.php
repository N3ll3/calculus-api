<?php

namespace App\Domain\Partie;


use Broadway\EventSourcing\EventSourcedAggregateRoot as EventSourcedAggregateRoot;

use DateTimeImmutable;

use App\Domain\Partie\PartieCreee;


final class Partie extends EventSourcedAggregateRoot
{

    
    private PartieId $partieId; // aggregate root id

    private PartieType $typePartie;

    private PartieNombreOperation $nombreOperation;

    private DateTimeImmutable $creeeLe;
 
 
    public static function creerPartie(PartieId $unPartieId, PartieType $unType, PartieNombreOperation $unNombreOperation){
        
        $nouvellePartie = new Partie($unPartieId, $unType, $unNombreOperation);
        return $nouvellePartie;
        
    }


    public function getAggregateRootId():string
    {
        return $this->partieId;
    }


    public function partieId(){
        return $this->partieId;
    }

    public function typePartie(){
        return $this->typePartie;
    }

    public function nombreOperation(){
        return $this->nombreOperation;
    }
   
}