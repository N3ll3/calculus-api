<?php

namespace App\Domain\Partie;


use DateTimeImmutable;
use App\Domain\Operation\Operation;


class Partie
{
    
    private PartieId $partieId;

    private PartieType $typePartie;

    private PartieNombreOperation $nombreOperation;

    private DateTimeImmutable $creeeLe;

    private array $operations;
    
    public function __construct(PartieId $partieId, PartieType $type, PartieNombreOperation $nombreOperation, \DateTimeImmutable $dateCreation)
    {

        $this->partieId = $partieId;
        $this->typePartie = $type;
        $this->nombreOperation = $nombreOperation;
        $this->creeeLe = $dateCreation;
    }
 
   
    public function generateOperations()
    {
        for ($i= 1; $i <= $this->nombreOperation->value() ; $i++) { 
           $operation = new Operation($this->typePartie);
           $this->operations[]= $operation->getOperation();
        }
        
        return json_encode($this->operations);
    }

    public function partieId(){
        return $this->partieId;
    }

    public function typePartie(){
        return $this->typePartie;
    }

    public function nombreOperation(){
        return $this->nombreOperation;
    }
   
}