<?php
/*CBTIS 89
P32Array13.php
Diego Santiago Martínez Garrido
3°A Programaíón Matutino
*/


$prendas=0;
echo "Array inicial con 3 prendas","<br>","<br>";
$prendas = array(  1,"Camisa",2, "Pantalón",3,"Cinturón");

// Mostrar el array original
echo "Prendas iniciales","<br>","<br>";
sort($prendas);

// Ordenar el array de forma ascendente
sort($prendas);
echo "Prendas ordenados ascendentemente","<br>","<br>";
var_export($prendas);

// Agregar 2 productos más
$prendas[] = "Gorra";
$prendas[] = "Calcetines";
echo "<br>","<br>";

// Mostrar el array actualizado
echo "Productos actualizados","<br>","<br>";
var_export($prendas);

// Ordenar el array de forma descendente
echo "Productos ordenados descendentemente","<br>","<br>";
rsort($prendas);
var_export($prendas);

 ?>