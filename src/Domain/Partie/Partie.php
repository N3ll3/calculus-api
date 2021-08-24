<?php

namespace App\Domain\Partie;


use Broadway\EventSourcing\EventSourcedAggregateRoot as EventSourcedAggregateRoot;

use DateTimeImmutable;

use App\Domain\Partie\PartieCreee;


final class Partie extends EventSourcedAggregateRoot
{

    
    private partieId $partieId; // aggregate root id

    private PartieType $typePartie;

    private PartieNombreOperation $nombreOperation;

    private PartieTempsImparti $tempsImparti;

    private DateTimeImmutable $creeeLe;
 
 
    public static function creerPartie(partieId $unPartieId, PartieType $unType, PartieNombreOperation $unNombreOperation, PartieTempsImparti $unTempsImparti){
        
        $nouvellePartie = new Self($unPartieId, $unType, $unNombreOperation, $unTempsImparti, new DateTimeImmutable());

        //creer event
        $nouvellePartie-> apply(new PartieCreee($nouvellePartie->partieId->value(), 
                                                $unType->value(), 
                                                $unNombreOperation->value(), 
                                                $unTempsImparti->value(),
                                                $nouvellePartie->creeeLe->format('d-m-Y')));
        
        return $nouvellePartie;
        
    }



    public function typePartie(){
        return $this->typePartie->value();
    }

    public function nombreOperation(){
        return $this->nombreOperation->value();
    }

    public function tempsImparti(){
        return $this->tempsImparti->value();
    }

    public function creeeLe(){
        return $this->creeeLe->format('d-m-Y');
    }

    public function applyPartieCreee(PartieCreee $event)
    {
        $this->partieId = $event->partieId->value();

    }


    public function getAggregateRootId():string
    {
        return $this->partieId->value();
    }

   
}