<?php


namespace App\Actions\Partie\Command;

use Serializable;

abstract class PartieCommand 
{
    public $partieId;


    public function __construct($partieId)
    {
        $this->partieId = $partieId;
    }
}