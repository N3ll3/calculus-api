<?php

namespace App\Domain\Partie;


use Broadway\EventSourcing\EventSourcedAggregateRoot as EventSourcedAggregateRoot;

use DateTimeImmutable;

use App\Domain\Partie\PartieEstCreee;
use PartieCreateur;

class Partie extends EventSourcedAggregateRoot
{

    
    private int $partieId; // aggregate root id

    private $typePartie;

    private int $nombreOperation;

    private  $tempsImparti;

    private $creeeLe;

    private $partieCreateur;


 
    public function creerPartie($unPartieId,$unPartieCreateurId, $unType, $unNombreOperation, $unTempsImparti){
        $nouvellePartie = new Self();

        //creer event
        $nouvellePartie-> apply(new PartieEstCreee($unPartieId,$unPartieCreateurId, $unType, $unNombreOperation, $unTempsImparti, new DateTimeImmutable()));
        
        return $nouvellePartie;
        
    }



    public function applyPartieEstCreee(PartieEstCreee $event)
    {
        $this->partieId = $event->partieId;

        // We create the entity in our event handler so that it will be createvent       // when the aggregate root is reconstituted from an event stream. Once
        // the child entity is instantiated and returned by getChildEntities()
        // it can emit and apply events itself.
        $this->partieCreateur = new PartieCreateur(
            $event->partieId,
            $event->partieCreateurId,
            $event->nombreOperation,
            $event->tempsImparti,
            $event->creeeLe,
            $event->partieId
        );
    }


    public function getAggregateRootId()
    {
        return $this->partieId;
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