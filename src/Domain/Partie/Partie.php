<?php

namespace App\Domain\Partie;


use DateTimeImmutable;



class Partie
{
    
    private PartieId $partieId;

    private PartieType $typePartie;

    private PartieNombreOperation $nombreOperation;

    private DateTimeImmutable $creeeLe;

    private Operations $operations;
 
 
    public static function creerPartie(PartieId $unPartieId, PartieType $unType, PartieNombreOperation $unNombreOperation){
        
        $nouvellePartie = new Partie($unPartieId, $unType, $unNombreOperation);
        return $nouvellePartie;
        
    }

    public function generateOperation()
    {
        
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