<?php

namespace App\Domain\Operation;

class Operation
{
    protected $nbre1;
    protected $nbre2;
    protected array $operateur;
    protected $resultat;

    public function __construct($typeOperation)
    {
        switch($typeOperation)
        {
            case 'addition' :
                 $this->operateur = '+';
                 break;

            case 'soustraction' :
                 $this->operateur = '-';
                 break;

            case 'multiplication' :
                 $this->
                 $this->operateur = '*';
                 break;
            case 'aleatoire' :
                $operateurs = ['+','-','*'];
                 $this->operateur = $operateurs[random_int(0,2)];
                 break;
        }

        $this->nbre1 = 1 ;
        $this->nbre2 = 1 ;
        $this->resultat = $this->nbre1.$this->$operateur[0].$this->$nbre2;

    }

    public function getOperation()
    {


    }

}