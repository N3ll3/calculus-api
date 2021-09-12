<?php

namespace App\Application\Actions\Partie;

use Psr\Http\Message\ResponseInterface as Response;

class CreerPartieAction extends PartieAction
{
  public function action()
    {
      $datas = $this->getFormData();;
      $partie = Partie :: CreerPartie($datas->partieId, $requetedatas->typePartie, $datas->nombreOperation);

      $this->repository->save($partie);
    }
    
  
}