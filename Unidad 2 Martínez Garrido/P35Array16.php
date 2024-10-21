<?php
/*CBTIS 89
P33Array14.php
Diego Santiago Martínez Garrido
3°A Programaíón Matutino
*/

//Arreglos 
$arrayA1= array(15,33,24,19,50);
$arrayA2 = array(3,5,2,6,5);
$arraysuma = array();
$arrayresta = array();
$arraymulti = array();
$arraydivi = array();

$longitud = count($arrayA1);

//ciclo de operaciones
for ($i =0;$i <=$longitud; $i++)
	
{$arraysuma[$i]=$arrayA1[$i]+$arrayA2[$i];
 $arraymulti[$i]=$arrayA1[$i]-$arrayA2[$i];
$arrayresta[$i]=$arrayA1[$i]*$arrayA2[$i];
$arraydivi[$i]=$arrayA1[$i]/$arrayA2[$i];}


//Suma entre arreglos
echo "Arreglo con suma"
for ($i=0; $i<$longitud; $i++)
{echo $arrayA1[$i]."+".$arrayA2[$i]." = ",$arraysuma[$i];
echo "<br>";}



//Resta entre arreglos
echo "Arreglo con resta";
for ($i =0;$i <$longitud; $i++)
{ 
echo $arrayA1[$i]."-".$arrayA2[$i]." = ",$arrayresta[$i];
echo "<br>";}


//Multiplicación entre arreglos
echo "Arreglo con multiplicación <br>";
echo "<br>";

for ($i =0;$i <$longitud; $i++)
{  
echo $arrayA1[$i]."*".$arrayA2[$i]." = ",$arraymulti[$i];
echo "<br>";}


	//Divición entre arreglos
for ($i = 0;$i <$longitud; $i++)
{ 
echo $arrayA1[$i]."/".$arrayA2[$i]." = ",$arraydivi[$i];
echo "<br>";}

?>