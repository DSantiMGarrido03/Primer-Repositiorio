<?php
/*CBTIS 89
P34Array15.php
Programa que convierte los datos de un arreglo en una cadena de texto, y forma contraria es decir
convierte una cadena de texto en elementos dentro de un arreglo
Diego Santiago Martínez Garrido
3°A Programaíón Matutino
*/

//Almacena datos en un arreglo
$arraydatos = ["Karina","Rosales","Orozco"];

//Covierte un array en una cadena de texto
$string = implode("", $arraydatos);
echo "Cadena de texto <br>";
echo $string;
echo "<br>","<br>";

//Cadena de texto a separar
$cadena = "tercero de programación matutino";

//Convierte una cadena de texto en un arrray
$array = explode(" ", $cadena);

$longitud = count($array);
echo "<br>";
echo "Arreglo con datos de tipo string <br>";
//Imprime los elementos del arreglo
for ($i=0; $i <$longitud ; $i++) 
{ 
	//Se obtiene el valor de cada elemento 
	echo $array[$i];
	echo "<br>";
}
?>