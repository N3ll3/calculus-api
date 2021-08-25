<?php

namespace App\Infrastructure\Partie\Repository;

use App\Domain\Partie\PartieRepository as PartiePartieRepository;
use Broadway\EventSourcing\EventSourcingRepository as BroadwayESRepository;


class  PartieRepository extends BroadwayESRepository implements PartiePartieRepository
{
    public function __construct(\Broadway\EventStore\EventStore $eventStore, \Broadway\EventHandling\EventBus $eventBus)
    {
        parent::__construct($eventStore, $eventBus, Partie::class, new \Broadway\EventSourcing\AggregateFactory\PublicConstructorAggregateFactory());
    }



}