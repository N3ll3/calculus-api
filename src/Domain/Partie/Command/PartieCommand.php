<?php


namespace App\Domain\Partie\Command;

use Serializable;

abstract class PartieCommand 
{
    public $partieId;


    public function __construct($partieId)
    {
        $this->partieId = $partieId;
    }

    public function partieId(){
        return $this->partieId;
    }
}