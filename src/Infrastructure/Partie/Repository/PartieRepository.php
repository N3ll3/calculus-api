<?php

namespace App\Infrastructure\Partie\Repository;

use App\Actions\Partie\Command\CreerPartieCommand;
use App\Domain\Partie\PartieRepository as PartiePartieRepository;
use Broadway\EventSourcing\EventSourcingRepository as BroadwayESRepository;



class  PartieRepository extends BroadwayESRepository implements PartiePartieRepository
{

    private $connection;

    public function __construct(\Broadway\EventStore\EventStore $eventStore, \Broadway\EventHandling\EventBus $eventBus, $connection)
    {
        parent::__construct($eventStore, $eventBus, Partie::class, new \Broadway\EventSourcing\AggregateFactory\PublicConstructorAggregateFactory());
        
        $this->connection = $connection;

    }

    public function persist($partie){
        

    }



}