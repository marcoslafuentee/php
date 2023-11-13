<?php


class Bailarin extends Persona{
    public function __construct(string $nombre, private string $especialidad){
        parent::__construct($nombre);

    }

    public function __toString()
    {
        return parent::__toString(). "especialidad: $this->especialidad";
    }

}