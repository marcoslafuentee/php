<?php
namespace Jugada;
class Plantilla{
public static function get_clave(){
    $html="<h1>".Clave::obtener_clave()."</h1>";
    return $html;
}
}