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
 
 
    public static function creerPartie(PartieId $unPartieId, PartieType $unType, PartieNombreOperation $unNombreOperation){
        
        $nouvellePartie = new Partie($unPartieId, $unType, $unNombreOperation);

        $nouvellePartie->generateOperations();
        return $nouvellePartie;
        
    }

    public function generateOperations()
    {
        for ($i= 1; $i <= $this->nombreOperation ; $i++) { 
            $this->operations[]= new Operation($this->typePartie);
        }
        
        return $this->operations;
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