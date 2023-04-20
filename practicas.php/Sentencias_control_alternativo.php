<?php
/* utilizar las sentecias de flujo if y else en su metodo alternativo
   utilizar constantes, variables, operadores aritmeticos, logicos y de relación
   el ejercicio : calcular la edad con años, meses, dias, horas utilizando un año de nacimiento e indicando si es mayor o menor de edad imprimiendo los
   datos como año, meses, dias, horas
*/
define('tope', 2022);
define('meses', 12);
define('dias', 365);
define('horas', 24);
$Nacimiento = "2009";
$Mayoria = 18;
$Edad = tope - $Nacimiento;
$Meses = $Edad * meses;
$Dias = $Edad * dias;
$Horas = dias * horas * $Edad;
if(is_numeric($Nacimiento) && is_numeric($Mayoria) && is_numeric($Edad) && is_numeric($Meses) && is_numeric($Dias) && is_numeric($Horas)):
    if($Edad >= $Mayoria):
        echo "Eres mayor de edad por que";
        echo "tienes: ",$Edad." Años de vida <br>";
        echo "son: ".$Meses." Meses de vida <br>";
        echo "son: ".$Dias." Dias de vida <br>";
        echo "son: ".$Horas." Horas de vida <br>";
    else:
        echo "Eres menor de edad por que";
        echo "tienes: ",$Edad." Años de vida <br>";
        echo "son: ".$Meses." Meses de vida <br>";
        echo "son: ".$Dias." Dias de vida <br>";
        echo "son: ".$Horas." Horas de vida <br>";
    endif;
else:
    echo "¿alguno de los valores asignados de las variables no son valores numericos?";
endif;
?>