<?php

class OperacionRacional extends Operacion
{

    public function __construct(string $cadena)
    {
        parent::__construct($cadena);
        $this->op1 = new Racional($this->op1);
        $this->op2 = new Racional($this->op2);
    }

    public function operar($op1, $op2, $operador)
    {
        switch ($this->operador){
            case '+':
                return $this->op1->sumar($this->op2);
                break;
            case '-':

        }
    }

    public function __toString(): string
    {
        return parent::__toString(); // TODO: Change the autogenerated stub
    }
}