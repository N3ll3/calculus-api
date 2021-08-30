<?php


namespace App\Application\Actions\Partie\Controller;

use App\Actions\Partie\Command\CreerPartieCommand;
use App\Actions\Partie\Command\PartieCommandHandler;
use App\Domain\Partie\PartieId;
use App\Infrastructure\Partie\Repository\PartieRepository;
use App\Infrastructure\Persistence\Partie\CreerPartieEventStore;
use Broadway\CommandHandling\CommandBus;
use Broadway\EventHandling\SimpleEventBus;
use Ramsey\Uuid\Uuid as Uuid;
use Slim\Psr7\Request;
use Slim\Psr7\Response;

class PartieController
{
    private $commandBus;
    
    

    public function __construct(CommandBus $commandBus, $connection)
    {
        $this->commandBus = $commandBus;
        $this->connection = $connection;
    
    }

    public function createPartieAction(Request $request, Response $response){
        $partieRequest =$request->getParsedBody();
        $partieId = new PartieId(Uuid::uuid4()->toString());
        $command =  new CreerPartieCommand($partieId,$partieRequest['typePartie'], $partieRequest['nbre']);
        $eventStore = new CreerPartieEventStore();
        $eventBus = new SimpleEventBus();
        $this->commandBus->subscribe(new PartieCommandHandler(new PartieRepository($eventStore,$eventBus,$this->connection)));
        $this->commandBus->dispatch($command);
        

        $response->getBody()->write($partieId);
        return $response;

    }
}