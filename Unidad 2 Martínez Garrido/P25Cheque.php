<?php

/*CBTIS 89
P25Cheque.php
Programa que divida un cheque en billetes y monedas.
Diego Santiago Martínez Garrido
3°A Programaíón Matutino
*/



$cheque= 6333;$B1000;$B500;$B200;$B100;$B100;$B50;$B20;$M10;$M5;$M2;$M1;
echo "<br>","<br>";


echo "Total del dinero",$cheque;
echo "<br>","<br>";

$B1000=floor($cheque/1000);
$cheque=floor($cheque%1000);
echo "La cantidad en billetes es: ",$B1000;
echo "<br>","<br>";

$B500=floor($cheque/500);
$cheque=floor($cheque%500);
echo "La cantidad en billetes es: ",$B500;
echo "<br>","<br>";

$B200=floor($cheque/200);
$cheque=floor($cheque%200);
echo "La cantidad en billetes es: ",$B200;
echo "<br>","<br>";

$B100=floor($cheque/100);
$cheque=floor($cheque%100);
echo "La cantidad en billetes es: ",$B100;
echo "<br>","<br>";

$B50=floor($cheque/50);
$cheque=floor($cheque%50);
echo "La cantidad en billetes es: ",$B50;
echo "<br>","<br>";

$B20=floor($cheque/20);
$cheque=floor($cheque%20);
echo "La cantidad en billetes es: ",$B1000;
echo "<br>","<br>";

$M10=floor($cheque/10);
$cheque=floor($cheque%10);
echo "La cantidad en monedas es: ",$M10;
echo "<br>","<br>";

$M5=floor($cheque/5);
$cheque=floor($cheque%5);
echo "La cantidad en monedas es: ",$M5;
echo "<br>","<br>";

$M2=floor($cheque/2);
$cheque=floor($cheque%2);
echo "La cantidad en monedas es: ",$M2;
echo "<br>","<br>";

$M1=floor($cheque/1);
$cheque=floor($cheque%1);
echo "La cantidad en monedas es: ",$M1;
echo "<br>","<br>";

 ?>








