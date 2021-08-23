<?php

namespace App\Domain\Operations;

use ErrorException;


class Operateur 
{
  
    private $operateur;
    private array $allowedOperators = ['+', '-', 'x', 'mix'];


    public function __construct(string $operateur){

        if (!in_array ($operateur, $this->allowedOperators)){
            throw new ErrorException('Opérateur demandé non valide');
        }
        
        $this->operateur = $operateur;
        
    }
    
    public function Operateur() {
        return $this->operateur;
    }
        
    

}