<?php

namespace App\Domain\Partie;


use ErrorException;
use Slim\Error\Renderers\JsonErrorRenderer;

// ValueObject
class PartieType
{
   private string $type;

   private const TYPES_AUTORISES = ['addition','soustraction','multiplication', 'aleatoire'];

   public function __construct(string $type)
   {
       if(!in_array($type, self::TYPES_AUTORISES)){
            throw new ErrorException('Type de partie non valide');
       }
       
       $this->type = $type;
   }

   public function value(){
       return $this->type;
   }


}