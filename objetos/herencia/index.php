<?php

$carga = fn($clase)=> require ("$clase.php");

spl_autoload_register($carga);

$persona = new Persona("Pedro");


