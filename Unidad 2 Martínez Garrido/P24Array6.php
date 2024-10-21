<?php

/*CBTIS 89
P21Array3.php
Programa que almacena el nombre de 5 personas en el plantel CBTIS 89.
Diego Santiago Martínez Garrido
3°A Programaíón Matutino
*/




echo "Alumnos de CBTIS 89";
echo "<br","<br>";

$escuela=array("Cesar Limón"=>"Programación","Jose Angel"=>" Contabilidad ","Francisco Frias"=>"Electrónica","Luis Armando"=>" A.R.H","Edgar Eduardo"=>"Construcción");

$longitud = count($escuela);


foreach ($escuela as $alumno => $especialidad)

 {echo "El alumno ". $alumno."estudia en esta".$especialidad;
echo "<br>" "<br>";
}

?>



