<?php
require ("Persona.php");
$entero =0b11101;
$real= 25E-4;
$verdad = true;
$cadena = "hola";
$null= NULL;

$p1 = New Persona( "Pedro");
$con = new mysql("localhost", "root", "root"); //recurso
$funcion = function(){return "hola";}; //callable

$lista = [1, 2, 3, 4, 5];


$fruta = "manzana";
$$fruta = 25;
echo "<h2>$fruta vale {$$fruta} euros</h2>";

$fruta = "pera";
echo "<h2>$fruta vale {$$fruta} euros</h2>";



echo "<h2>Valor de la lista $lista</h2>";
echo "<h2>Valor de persona $p1</h2>";
echo "<h2>Valor de variable que contiene una función</h2>";












const IVA= 0.21;

$total = 25*IVA;
echo "<h2>Valor total de 25 copn iva es $total</h2>";

/*valores constantes predeterminadads
__DIR__ enseña directorio actual
__LINE__ llinea de script actual
__FILE__ Nombre del fichero*/