<?php
//Comentario Primero
//El resultado por defecto es hola mundo, si no imprime un mensaje normal
require('HolaMundo.php');

$nombre = isset($argv[1]) ? $argv[1] : "Mundo";
@print new HolaMundo($nombre);
?>
