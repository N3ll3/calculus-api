<?php

namespace App\Domain\Partie;

use Ramsey\Uuid\Uuid;

class PartieId
{
    private string $partieId;

    public function __construct(string $partieId)
    {
        $this->partieId;
              
    }

    public function __toString()
    {
        return $this->partieId;
        
    }

}