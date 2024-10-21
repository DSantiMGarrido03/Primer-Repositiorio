

<?php
/*CBTIS 89
P31Array12.php
Diego Santiago Martínez Garrido
3°A Programaíón Matutino
*/

$arraynumerico = array(1, 3, 2, 5, 4, 7, 6);

//orden ascendente
sort($arraynumerico);
var_export($arraynumerico);

echo "<p>";

//orden descendente
rsort($arraynumerico);
var_export($arraynumerico);
?>