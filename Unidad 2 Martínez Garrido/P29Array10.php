<?php

/*CBTIS 89
P29Array10.php
Diego Santiago Martínez Garrido
3°A Programaíón Matutino
*/

// Array con 8 nombres
$nombres = array("Mario", "francisco", "Pablo", "Antonio", "Luis", "Cesar", "Noel", "Angel");

// Nombre a buscar
$nombre = "Pablo";

// Ciclo for para recorrer el array
for ($i = 0; $i < count($nombres); $i++) {
    if ($nombres[$i] == $nombre) {
        echo "Este nombre está en el Array.";
        break; // Salimos del ciclo si encontramos una coincidencia
    }
}


?>