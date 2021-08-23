<?php

namespace App\Domain\Operations;

use ErrorException;
use Slim\Error\Renderers\JsonErrorRenderer;

class Operateur 
{
  
    private $operateur;
    private array $allowedOperators = ['+', '-', 'x', 'mix'];


    public function __construct(string $operateur){

        if (!in_array ($operateur, $this->allowedOperators)){
            throw new JsonErrorRenderer(new ErrorException('Opérateur demandé non valide'));
        }
        
        $this->operateur = $operateur;
        
    }
    
    public function getOperateur() {
        return $this->operateur;
    }
        
    

}