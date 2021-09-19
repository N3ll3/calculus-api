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

        $this->nbre1 = random_int(0,10) ;
        $this->nbre2 =  random_int(0,10) ;
        $this->resultat = calculeResultat($this->nbre1,$this->$operateur, $this->$nbre2);

    }

    public function getOperation()
    {


    }

    private function calculeResultat($nbr1,$nbre2, $operateur)
    {
        
        
    } 

}