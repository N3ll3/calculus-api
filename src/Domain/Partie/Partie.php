<?php

namespace App\Domain\Partie;


use Broadway\EventSourcing\EventSourcedAggregateRoot;

class Partie extends Broadway\EventSourcing\EventSourcedAggregateRoot
{

    private $partieId;

     // event Handler
    private $partieCreateur;


    public static function creerPartie ($partieId, $partieCreationId) {
        $partie =  new Self();

        $partie->apply(new PartieEstCreeeEvent($partieId, $partieCreationId));

        return $partie;
    }


    public function getAggregateRootId() {
        return $this->partieId;
    }

   
    public function applyPartieEstcreeeEvent(PartieEstCreeeEvent $event) {
        $this->partieId = $event->partieId;

        $this->partieCreateur = new PartieCreateur()
    }

}