<?php

namespace App\Domain\Operation;

class Operation
{
    protected $nbre1;
    protected $nbre2;
    protected $operateur;
    protected $resultat;

    public function __construct($typeOperation)
    {
        switch($typeOperation)
        {
            case 'addition' :
                 $this->operateur = ['+'];
                 break;
            case 'soustraction' :
                 $this->operateur = ['-'];
                 break;
            case 'multiplication' :
                 $this->operateur = ['*'];
                 break;
            case 'aleatoire' :
                 $this->operateur = ['+','-','*'];
                 break;
        }
    }
    

}