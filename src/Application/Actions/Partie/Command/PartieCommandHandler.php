<?php

namespace App\Actions\Partie\Command;

use App\Domain\Partie\Partie;
use App\Domain\Partie\PartieId;
use Broadway\CommandHandling\SimpleCommandHandler as BroadwayCommandHandler;

class PartieCommandHandler extends BroadwayCommandHandler
{
    private $repository;

    public function __construct(\Broadway\EventSourcing\EventSourcingRepository $repository)
    {
        $this->repository = $repository;
    }

    public function handleCreerPartieCommand(CreerPartieCommand $command)
    {
        $partie = Partie :: CreerPartie($command->partieId, $command->typePartie, $command->nombreOperation);

        $this->repository->save($partie);// save in event store

        $this->persist($partie); //persiste in db
    }


}