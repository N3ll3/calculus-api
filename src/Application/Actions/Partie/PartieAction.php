<?php


namespace App\Actions\Partie;

use App\Application\Actions\Action;

class PartieAction extends Action
{

    private $repository;


    public function __construct(PartieRepository $repository)
    {
        $this->repository = $repository;
    }
  
}