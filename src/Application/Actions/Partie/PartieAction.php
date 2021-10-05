<?php


namespace App\Application\Actions\Partie;

use App\Application\Actions\Action;
use App\Infrastructure\Persistence\Partie\Repository\PartieRepository;

abstract class PartieAction extends Action
{

    protected $repository;


    public function __construct(PartieRepository $repository)
    {
        $this->repository = $repository;
    }
  
}