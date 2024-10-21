<?php


/*CBTIS 89
P21Array3.php
Programa que almacena el nombre de 6 personas en un ciclo for.
Diego Santiago Martínez Garrido
3°A Programaíón Matutino
*/


 $equipo = array('portero'=>'Julio','defensa'=>'Diego','medio'=>'Jair','delantero'=>'Rafael');

   foreach($equipo as $posicion=>$jugador){
     echo "El Jugador " , $jugador , " es el " , $posicion;
     echo "<br>";
   }
?>