<?php
// trabajaremos con el ciclo while y do while
/*while (exprecion o vadilacion ) {
    acciones se cumpla la exprecion
}
do {
    sentencia o accion
}
while (exprecion o validacion);
*/
/*$ variable = 08;
while ($variable < 10) {
    $variable ++; // se incrementa la $variable en uno en uno
    echo "el valor de la variable es = ".$variable."<br><br>";
}
echo "el ciclo while acaba en: ".$variable;
*/

$variable = "8";
do {
    echo $variable."<br>";
    $variable ++;
} while ($variable <= "10");
?>