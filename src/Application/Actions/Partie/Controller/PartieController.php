<?php


namespace App\Application\Actions\Partie\Controller;

use App\Actions\Partie\Command\CreerPartieCommand;
use App\Actions\Partie\Command\PartieCommandHandler;
use App\Domain\Partie\PartieId;
use App\Infrastructure\Partie\Repository\PartieRepository;
use Broadway\CommandHandling\CommandBus;

use Ramsey\Uuid\Uuid as Uuid;
use Slim\Psr7\Request;
use Slim\Psr7\Response;

class PartieController
{
    private $commandBus;
    private $uuidGenerator;
    

    public function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    
    }

    public function createPartieAction(Request $request, Response $response){
        $partieRequest =$request->getParsedBody();
        $partieId = new PartieId(Uuid::uuid4()->toString());
        $command =  new CreerPartieCommand($partieId,$partieRequest['typePartie'], $partieRequest['nbre']);
       $this->commandBus->subscribe(new PartieCommandHandler(new PartieRepository()));
        $this->commandBus->dispatch($command);

        $response->getBody()->write($partieId);
        return $response;

    }
}