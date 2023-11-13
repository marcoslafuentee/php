<?php


class Fecha
{

    //atributos
    private $dia;
    private $mes;
    private $year;


    //métodos
    public function __construct($dia = null, $mes = null, $year = null)
    {
        if (is_string($dia)) {
            $fecha = explode("/", $dia);
            $dia = $fecha[0];
            $mes = $fecha[1];
            $year = $fecha[2];
        }

        $this->dia = ($dia == null)? date("d"): $dia;
        $this->mes = ($mes == null)? date("m"): $mes;
        $this->year = ($year == null)? date("y"): $year;

    }


    public function __toString()
    {
        return "$this->dia";
    }
}

?>

