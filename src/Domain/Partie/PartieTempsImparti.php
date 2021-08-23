<?php

namespace App\Domain\Partie;

use ErrorException;

class PartieTempsImparti
{
    private int $dureeEnSeconde;
    


    public function __construct(int $seconde)
    {
        if($seconde == 0) {
            throw new ErrorException('Aucune durée de partie nrenseignée');          
        }
        
        $this->dureeEnSeconde = $seconde;
       
    }

    public function value(){
        return $this->dureeEnSeconde;
    }

}