<?php

namespace App\Domain\Partie;

class PartieNombreOperation
{
    private int $nombreOperation;

    public function __construct(int $nombreOperation)
    {
        $this->nombreOperation;
        
    }

    public function value(){
        return $this->nombreOperation;
    }
}