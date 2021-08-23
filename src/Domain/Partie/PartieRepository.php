<?php

namespace App\Domain\Partie;

use Broadway\EventSourcing\EventSourcingRepository as BroadwayEventRepository;

interface PartieRepository 
{

    public function save(Partie $partie);

}