<?php
declare(strict_types=1);

use App\Actions\Partie\Command\PartieCommandHandler;
use App\Infrastructure\Partie\Repository\PartieRepository;
use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;
use Broadway\EventStore\EventStore as EventStore;
use Broadway\EventHandling\EventBus as EventBus;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->get('/', function (Request $request, Response $response) {
        $response->getBody()->write('Hello world!');
        return $response;
    });

    $app->group('/users', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
    });


    $app->post('/partie', function (Request $request, Response $response){
        $partie = $request->getParsedBody();
        // $eventStore = EventStore;
        $eventBus = new Broadway\EventHandling\SimpleEventBus;
        $repository = new PartieRepository($eventStore,$eventBus);
        $partieCommandHandler = new PartieCommandHandler($repository);

      
      return $response->withHeader('Content-Type', 'application/json');
    });
        

    $app->get('/db-test', function(Request $request, Response $response){
        $db = $this->get(PDO::class);
        $sth = $db->prepare("SELECT * FROM partie");
        $sth->execute();
        $data = $sth->fetchAll(PDO::FETCH_ASSOC);
        $payload = json_encode($data);
        $response->getBody()->write($payload);

        return $response->withHeader('Content-Type', 'application/json');
    });

};
