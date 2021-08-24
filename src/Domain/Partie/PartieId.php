<?php

namespace App\Domain\Partie;

use Ramsey\Uuid\Uuid;

class partieId
{
    private string $id;

    public function __construct($id=null)
    {
        if($id == null) {
            $this->id = Uuid::uuid4();
        } else {
            $this->id = $id;
        }
        
        
    }

    public function value(){
        return $this->id;
    }

}