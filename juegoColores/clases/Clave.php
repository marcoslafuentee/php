<?php

namespace clases;

class Clave
{

    static private array $clave;

    static private function generar_clave():array{
        $posibles_colores = ['azul', 'rojo', 'naranja', 'verde', 'violeta', 'amarillo', 'marron', 'rosa'];
        $_SESSION['listaColores'] = $posibles_colores;

        $aux = [array_rand($posibles_colores, 4)];

        foreach ($aux as $i){
            $clave[] = $posibles_colores[$i];
        }

        $_SESSION['clave']=$clave;
        return $clave;
    }


    static public function regenerar_clave():array{
        $_SESSION['jugadas']=[];
        self::$clave=self::generar_clave();
        return self::$clave;
    }


    static public function obtener_clave():array{
        self::$clave = $_SESSION['clave'] ?? self::generar_clave();
        return self::$clave;
    }

    static public function toString():string{
        $clave = $_SESSION['clave'];
        return "1º: " . $clave[0] . "2º: " . $clave[1] . "3º: " . $clave[2] . "4º: " . $clave[3];
    }
}