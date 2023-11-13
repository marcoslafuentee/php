<?php

class Persona {

    public function __construct (protected string $nombre){

    }

    public function __toString(): string{
        return "Nombre : $this->nombre " ;
    }

}




