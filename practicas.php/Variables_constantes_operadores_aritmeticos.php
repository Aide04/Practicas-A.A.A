<?php
  //Declarar uan variable $ + identificador + asignacion del tipo de dato o valor
  $variable = 45;
  $Mensaje = "El valor de la variable es: ";
  $Numero1 = 5; $Numero2 = 4; $Numero3 = 89;
  $Suma = $Numero1 + $Numero2 + $Numero3;
  $Resta = $Numero1 - $Numero2 - $Numero3;
  $Multiplicacion = $Numero1 * $Numero2 * $Numero3;
  $Divicion = $Numero1 / $Numero2 / $Numero3;
  $radio = 2;
  define('pi','3.1416');
  $Decremento = 10;
  $Incremento = 10;
  echo "La suma de ".$Numero1." + ".$Numero2." + ".$Numero3." es: ".$Suma."<br>";
  echo "La resta de ".$Numero1." - ".$Numero2." - ".$Numero3." es: ".$Resta."<br>";
  echo "La multiplicacion de ".$Numero1." * ".$Numero2." * ".$Numero3." es: ".$Multiplicacion."<br>";
  echo "La divicion de ".$Numero1." / ".$Numero2." / ".$Numero3." es: ".$Divicion."<br>";
  //echo var_dump(constant('hora'))."<br>";
  //echo var_dump($Suma);
  //echo $Mensaje, $variable;
  //area de un circulo
  $Ejemplo = pi * $radio + $radio;
  $Mensaje2 = "el area del circulo con el radio de: ".$radio." por el valor de pi que es ".pi." el resultado es ".$Ejemplo;
  echo $Mensaje2."<br>";
  echo var_dump(constant('pi'))."<br>";
  echo "el valor de decremento es: ".--$Decremento."<br>";
  echo "el valor de incremento es:".++$Incremento."<br>";
?>