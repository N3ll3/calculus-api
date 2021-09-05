<?php


namespace App\Actions\Partie;

use App\Domain\Partie\Command\PartieCommand;
use App\Domain\Partie\Command\PartieCommandHandler;
use Broadway\CommandHandling\SimpleCommandBus;

class CreerPartieAction
{

private $commandBus;
private $partieCommandHandler;

public function __construct(SimpleCommandBus $commandBus, PartieCommandHandler $partieCommandHandler)
{
    $this->commandBus = $commandBus;
    $this->partieCommandHandler = $partieCommandHandler;
    
}

public function __invoke(PartieCommand $command){
    $this->commandBus->subscribe($this->partieCommandHandler);
    $this->commandBus->dispatch($command);

}


}