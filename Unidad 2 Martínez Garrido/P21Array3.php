<?php

/*CBTIS 89
P21Array3.php
Programa que almacena el nombre de 6 personas en un ciclo for.
Diego Santiago Martínez Garrido
3°A Programaíón Matutino
*/

$arraynombres=array("Javier","Pablo","Cesar","Mariana","Sandra","Rogelio");

$longitud = count($arraynombres);

// Recorre todos los elementos
for ($i=0; $i<$longitud; $i++) 

	{ //Se obtiene el volor de cada elemento 
		echo $arraynombres[$i];
		echo "<br>";
}

?>