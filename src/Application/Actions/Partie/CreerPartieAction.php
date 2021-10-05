<?php
declare(strict_types=1);
namespace App\Application\Actions\Partie;

use Psr\Http\Message\ResponseInterface as Response;
use App\Application\Actions\Partie\PartieAction;
use App\Domain\Partie\Partie;
use App\Domain\Partie\PartieId;
use App\Domain\Partie\PartieNombreOperation;
use App\Domain\Partie\PartieType;

class CreerPartieAction extends PartieAction
{
  protected function action(): Response
    {
      $datas = $this->getFormData();

      $partie = new Partie(
              new PartieId(), 
              new PartieType($datas->typePartie), 
              new PartieNombreOperation($datas->nombreOperation), 
              new \DateTimeImmutable());
      
      $this->repository->save($partie);
    
    return $this->respondWithData($partie->generateOperations());
    }
  
}