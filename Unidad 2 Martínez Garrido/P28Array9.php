<?
/*CBTIS 89
P28Array9.php
Diego Santiago Martínez Garrido
3°A Programaíón Matutino
*/

$ropa =0;
echo "** Tienda de ropa **","<br>","<br>";

 $ropa = array('playera'=>'100','camisa'=>'250','pantalón de mezclilla'=>'300','bermuda'=>'200');
 foreach($ropa as $x=>$precio)
 { echo "Tu " , $x , " cuesta " , $precio;
  echo "<br>";}

?>
