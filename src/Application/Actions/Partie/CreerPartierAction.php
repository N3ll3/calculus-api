<?php
declare(strict_types=1);
namespace App\Application\Actions\Partie;

use Psr\Http\Message\ResponseInterface as Response;
use App\Actions\Partie\PartieAction;

class CreerPartieAction extends PartieAction
{
  protected function action()
    {
      $datas = $this->getFormData();;
      $partie = Partie :: CreerPartie($datas->partieId, $datas->typePartie, $datas->nombreOperation);

      $this->repository->save($partie);
    }
    
    return $this->respondWithData($partie->generateOperations());
  
}