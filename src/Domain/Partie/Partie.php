<?php

namespace App\Domain\Partie;


use Broadway\EventSourcing\EventSourcedAggregateRoot as EventSourcedAggregateRoot;

use DateTimeImmutable;

use App\Domain\Partie\PartieCreee;


final class Partie extends EventSourcedAggregateRoot
{

    
    private int $partieId; // aggregate root id

    private $typePartie;

    private int $nombreOperation;

    private  $tempsImparti;

    private $creeeLe;
 
 
    public static function creerPartie($unPartieId, PartieType $unType, PartieNombreOperation $unNombreOperation, PartieTempsImparti $unTempsImparti){
        $nouvellePartie = new Self($unPartieId, $unType, $unNombreOperation, $unTempsImparti, new DateTimeImmutable());

        //creer event
        $nouvellePartie-> apply(new PartieCreee($nouvellePartie->partieId, 
                                                $unType->value(), 
                                                $unNombreOperation->value(), 
                                                $unTempsImparti->value(),
                                                $nouvellePartie->creeeLe));
        
        return $nouvellePartie;
        
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

    public function applyPartieCreee(PartieCreee $event)
    {
        $this->partieId = $event->partieId;

    }


    public function getAggregateRootId()
    {
        return $this->partieId;
    }

   
}