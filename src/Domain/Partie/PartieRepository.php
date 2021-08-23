<?php

namespace App\Domain\Partie;

use Broadway\EventSourcing\EventSourcingRepository as BroadwayEventRepository;

class PartieRepository extends BroadwayEventRepository
{

    public function __construct(Broadway\EventStore\EventStore $eventStore, \Broadway\EventHandling\EventBus $eventBus)
    {
        parent::__construct($eventStore, $eventBus, 'Partie', new \Broadway\EventSourcing\AggregateFactory\PublicConstructorAggregateFactory());
    }

}