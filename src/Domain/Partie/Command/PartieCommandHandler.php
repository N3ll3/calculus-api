<?php

namespace App\Domain\Partie\Command;

use App\Domain\Partie\Partie;
use Broadway\CommandHandling\SimpleCommandHandler as BroadwayCommandHandler;
use App\Infrastructure\Partie\Repository\PartieRepository;

class PartieCommandHandler extends BroadwayCommandHandler
{
    private $repository;

    public function __construct(PartieRepository $repository)
    {
        $this->repository = $repository;
    }

    public function handleCreerPartieCommand(CreerPartieCommand $command)
    {
        $partie = Partie :: CreerPartie($command->partieId, $command->typePartie, $command->nombreOperation);

        $this->repository->save($partie);
    }


}