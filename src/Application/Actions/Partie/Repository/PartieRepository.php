<?php

namespace App\Application\Actions;

use Broadway\EventSourcing\EventSourcingRepository as BroadwayESRepository;


abstract class  PartieRepository extends BroadwayESRepository
{
    public function __construct(\Broadway\EventStore\EventStore $eventStore, \Broadway\EventHandling\EventBus $eventBus)
    {
        parent::__construct($eventStore, $eventBus, 'Part', new \Broadway\EventSourcing\AggregateFactory\PublicConstructorAggregateFactory());
    }
}