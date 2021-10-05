<?php

namespace App\Infrastructure\Persistence\Partie\Repository;

use App\Domain\Partie\PartieRepository as PartieRepositoryInterface;
use App\Infrastructure\Persistence\DB;



class  PartieRepository implements PartieRepositoryInterface
{

    private $connection;

    public function __construct(DB $connection)
    {      
        $this->connection = $connection->db;

    }

    public function save($partie){
        $req = $this->connection->prepare(
            "INSERT INTO partie 
             VALUE(:uuid, :typePartie, :nombreOperation)"
            );
        $req->execute(['uuid'=>$partie->partieId->getId(), 'typePartie'=>$partie->typePartie->value(), 'nombreOperation'=> $partie->nombreOperation->value()]);

    }



}