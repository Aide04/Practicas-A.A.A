<?php
// una practica calcule el promedio de 5 notas ó calificaciones verificando que los valores sean numericos y porteriormente indicar si esta aprobado
// o reprobado segun el valor asignado por el promedio
$calificacion1 = 5;
$calificacion2 = 5;
$calificacion3 = 0;
$calificacion4 = 2;
$calificacion5 = 5;
$minimo = 7;
/*if (is_numeric($calificacion1) && is_numeric($calificacion2) && is_numeric($calificacion3) && is_numeric($calificacion4) && is_numeric($calificacion5)){
    $promedio = ($calificacion1+$calificacion2+$calificacion3+$calificacion4+$calificacion5)/5;
    if ($promedio >= $minimo){
         echo "<br><br> Tu promedio es de:".$promedio." por lo tanto estas aprobado";
    }
    else {
        echo "<br><br> Tu promedio es de: ".$promedio." por lo tanto estas no aprobado";
    }
}
else {
    $mensaje = "alguno de los valores contenidos de las calificaciones no corresponde a un valor numerico";
    echo $mensaje;
}
*/

if (!is_numeric($calificacion1)) {
    echo "el valor de la calificacion 1 es: ".$calificacion1." no es un valor numerico";
}
elseif (!is_numeric($calificacion2)) {
    echo "el valor de la calificacion 2 es: ".$calificacion2." no es un valor numerico";
}
elseif (!is_numeric($calificacion3)) {
    echo "el valor de la calificacion 3 es: ".$calificacion3." no es un valor numerico";
}
elseif (!is_numeric($calificacion4)) {
    echo "el valor de la calificacion 4 es: ".$calificacion4." no es un valor numerico";
}
elseif (!is_numeric($calificacion5)) {
    echo "el valor de la calificacion 5 es: ".$calificacion5." no es un valor numerico";
}
else {
    $promedio = ($calificacion1+$calificacion2+$calificacion3+$calificacion4+$calificacion5)/5;
    if ($promedio >=$minimo) {
        echo "el promedio obtenido es de: ".$promedio." por lo tanto estas aprobado";
    }
    else {
        echo "el promedio obtenido es de: ".$promedio." por lo tanto estas no aprobado";
    }
}
?>