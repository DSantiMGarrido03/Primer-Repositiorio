<?php
/*CBTIS 89
P20Array2.php
Programa que almacene diversos datos en un arreglo y posteriormente los imprime por medio de 
un ciclo for
Diego Santiago Martínez Garrido
3°A Programaíón Matutino
*/



$nombre = "Ana";
$array=array(1,2,3,"casa",$nombre);

//Se obtiene el número de elementos
$longitud = count($array);

// Recorre todos los elementos
for ($i=0; $i<5; $i++) 
	{ //Se obtiene el volor de cada elemento 
		echo $array[$i];
		echo "<br>";
}

?>