<?php
//Comentario Primero
//El resultado por defecto es hola mundo, si no imprime un mensaje normal
require('HolaMundo.php');
print "Introduce tu nombre";
$nombre = trim(fgets(STDIN));
print "Hola $nombre\n";
?>
