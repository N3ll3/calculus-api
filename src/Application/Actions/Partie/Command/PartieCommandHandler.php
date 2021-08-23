<?php

namespace App\Actions\Partie\Command;

use App\Domain\Partie\Partie;
use Broadway\CommandHandling\SimpleCommandHandler as BroadwayCommandHandler;

class PartieCommandHandler extends BroadwayCommandHandler
{
    private $repository;

    public function __construct(\Broadway\EventSourcing\EventSourcingRepository $repository)
    {
        $this->repository = $repository;
    }

    protected function handleCreerPartieCommand(CreerPartieCommand $command)
    {
        $partie = Partie :: CreerPartie($command->partieId, $command->typePartie, $command->nombreOperation, $command->tempsImparti, $command->creeeLe);

        $this->repository->save($partie);
    }


}