<?php

/*CBTIS 89
P27Array8.php
Diego Santiago Martínez Garrido
3°A Programaíón Matutino
*/

   $numeros = array();
   for ($i=1; $i <=100 ; $i++) { 
$numeros[]=$i; }
foreach ($numeros as $valor) 
{if($valor%20==0)
   {echo $valor." ";
 echo "<br>"; 
}
   
}
 
?>