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

    private DateTimeImmutable $creeeLe;
 
 
    public static function creerPartie(PartieId $unPartieId, PartieType $unType, PartieNombreOperation $unNombreOperation){
        
        $nouvellePartie = new Partie($unPartieId, $unType, $unNombreOperation);

        //creer event
        $nouvellePartie-> apply(new PartieCreee($nouvellePartie->partieId, 
                                                $unType->value(), 
                                                $unNombreOperation->value()));
        
        return $nouvellePartie;
        
    }



    protected function applyPartieCreee(PartieCreee $event)
    {
        $this->partieId = $event->partieId->value();

    }


    public function getAggregateRootId():string
    {
        return $this->partieId;
    }

   
}