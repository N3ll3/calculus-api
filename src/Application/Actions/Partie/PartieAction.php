<?php


namespace App\Actions\Partie;

use App\Application\Actions\Action;
use App\Infrastructure\Partie\Repository\PartieRepository;

abstract class PartieAction extends Action
{

    protected $repository;


    public function __construct(PartieRepository $repository)
    {
        $this->repository = $repository;
    }
  
}