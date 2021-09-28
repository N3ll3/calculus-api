<?php

namespace App\Domain\Partie;

use Ramsey\Uuid\Uuid;

class PartieId
{
    private string $partieId;

    public function __construct()
    {
        $uuid = Uuid::uuid4()();
        $this->partieId = $uuid;
              
    }

    public function __toString()
    {
        return $this->partieId;
        
    }

    public function getId()
    {
        return $this->partieId;
    }

}