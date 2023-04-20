<?php
/*
foreach(exprecion as $variable){
    acciones que se tendran dentro del bucle
}
*/
$arreglo =["abcdefghijk",54,'e',14.5,true,false,10];
echo "<pre>\n";
var_dump($arreglo);
echo "</pre>\n";
foreach ($arreglo as $recorrido) {
    echo "<p>$recorrido</p>\n";
}
echo "termina el ciclo <br>";
?>