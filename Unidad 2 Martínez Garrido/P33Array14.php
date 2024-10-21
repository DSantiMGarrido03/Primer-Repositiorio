<?php
/*CBTIS 89
P33Array14.php
Diego Santiago Martínez Garrido
3°A Programaíón Matutino
*/


echo "Nombres de perrsonas","<br>","<br>";
$arraynombres = array("Sergio","Emiliano","Abisai","Cesar","Noel","Uriel");
echo "Nombres ordenados de manera ascendente";
echo "<br>","<br>";
$longitud = count($arraynombres);
for ($i=0; $i<$longitud; $i++) 
// Recorre todos los elementos
	{ //Se obtiene el volor de cada elemento 
		echo $arraynombres[$i];
		echo "<br>";

array_push($arraynombres, "Eduardo","Enrrique","Alberto","Federico");
echo "<p>";
unset($arraynombres[0],$arraynombres[4]);
echo "<p>"

// Ordenar el array de forma descendente
echo "Nombres ordenados de manera descendente";
echo "<br>","<br>";
$longitud = count($arraynombres);
for ($i=0; $i<$longitud; $i++) 
// Recorre todos los elementos
	{ //Se obtiene el volor de cada elemento 
		echo $arraynombres[$i];
		echo "<p>";

?>