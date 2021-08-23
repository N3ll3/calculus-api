<?php

namespace App\Domain\Partie;


use Broadway\EventSourcing\EventSourcedAggregateRoot as EventSourcedAggregateRoot;

use DateTimeImmutable;

use App\Domain\Partie\PartieCreee;
use PartieCreateur;

class Partie extends EventSourcedAggregateRoot
{

    
    private int $partieId; // aggregate root id

    private $typePartie;

    private int $nombreOperation;

    private  $tempsImparti;

    private $creeeLe;



 
    public function creerPartie($unPartieId,$unPartieCreateurId, $unType, $unNombreOperation, $unTempsImparti){
        $nouvellePartie = new Self();

        //creer event
        $nouvellePartie-> apply(new PartieCreee($unPartieId,$unPartieCreateurId, $unType, $unNombreOperation, $unTempsImparti, new DateTimeImmutable()));
        
        return $nouvellePartie;
        
    }



    public function applyPartieCreee(PartieCreee $event)
    {
        $this->partieId = $event->partieId;

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