<?php

namespace jugadas;

class Clave
{

    static private int $clave;

    static private function generar_clave():int{
        $clave = rand(1, 1024);
        $_SESSION['clave']=$clave;
        return $clave;
    }

    static public function regenerar_clave():int{
        $_SESSION['jugadas']=[];
        self::$clave=self::generar_clave();
        return self::$clave;
    }

    static public function obtener_clave():int{
        self::$clave = $_SESSION['clave'] ?? self::generar_clave();
        return self::$clave;
    }
}