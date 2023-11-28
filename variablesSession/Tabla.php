<?php

namespace Utilidades;

class Tabla
{
    private string $title;
    private string $cabecera;
    private string $contenido;
    const ARRAY_ASOCIATIVO =1;
    const ARRAY_INDEXADO =2;


    public function __construct($title)
    {
        $this->title = "<caption>$title</caption>";
    }

    public function add_cabecera(array $cabecera)
    {
        $this->cabecera = "<tr>";
        foreach ($cabecera as $valor) {
            $this->cabecera .= "<th>$valor</th>";
        }
        $this->cabecera .= "</tr>";
    }

    private function asociativo2indexado(array $contenido){
        $array = [];
        foreach ($contenido as $key =>$value)
            $array[]=[$key,$value];
        return $array;
    }

    public function add_contenido(array $contenido, int $tipo = self::ARRAY_INDEXADO)
    {
        if ($tipo == self::ARRAY_ASOCIATIVO)
            $contenido = $this->asociativo2indexado($contenido);
        $this->contenido = "";
        foreach ($contenido as $fila) {
            $this->contenido .= "<tr>";
            foreach ($fila as $valor)
                $this->contenido .= "<td>$valor</td>";
            $this->contenido .= "</tr>";
        }

    }

    public function __toString(): string
    {
        // TODO: Implement __toString() method.
        return "<table>$this->title$this->cabecera$this->contenido</table>";
    }

}