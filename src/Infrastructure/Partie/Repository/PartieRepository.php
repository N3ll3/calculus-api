<?php

namespace App\Infrastructure\Partie\Repository;

use Broadway\EventSourcing\EventSourcingRepository as BroadwayESRepository;


class  PartieRepository extends BroadwayESRepository
{
    public function __construct(\Broadway\EventStore\EventStore $eventStore, \Broadway\EventHandling\EventBus $eventBus)
    {
        parent::__construct($eventStore, $eventBus, 'Partie', new \Broadway\EventSourcing\AggregateFactory\PublicConstructorAggregateFactory());
    }
}