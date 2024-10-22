<?php
/*CBTIS 89
P34Array15.php
Programa que haga un listado de productos deportivos en una tienda en línea con arreglos y luego hazlo otro arreglo pero con descuento.
Diego Santiago Martínez Garrido
3°A Programaíón Matutino

*/


echo "Tienda deportiva de fútbol";
echo "<p>";

 $equipoD = array('Bolón'=>'700','Camisa deportiva'=>'1000','Guantes'=>'400',
 	'Espinilleras'=>'200','Calcetas'=>'200','Tacos de fútbol'=>'1500');
 foreach($equipoD as $x=>$precio)
 { echo "Tu" , $x ,"<br>",$precio, "PESOS MXN ";
  echo "<br>";}

echo "Super descuentos";
echo "<p>";
echo "Bolones a: 40%";
echo "<p>";
echo "Camisa deportiva a: 40%";
echo "<p>";
echo "Guantes a: 50%";
echo "<p>";
echo "espinilleras a: 30%";
echo "<p>";
echo "Calcetas a: 10%";
echo "<p>";
echo "Tacos de futbol a: 50%";
echo "<p>";

 $equipoDconD = array('Bolón'=>'280','Camisa deportiva'=>'400','Guantes'=>'200',
 	'Espinilleras'=>'60','Calcetas'=>'20','Tacos de fútbol'=>'750');

 foreach($equipoDconD as $x=>$precio)
 { echo "Ahora tu producto:", $x ,"<br>",$precio,"PESOS MXN PRECIO FINAL ";
  echo "<br>";}

?>













