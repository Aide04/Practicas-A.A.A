<?php
  $valor1 = 52;
  $valor2 = 76;
  $valor3 = 183;
  $persona = "Mujer";
  $letra = 'a';
  // sentencia if operadores relacionales o operadores logicos
 /* if (condicion) {
      codigo o accion a realizar en el navegador si se cumple la condicion 
  }
    else{
      si la accion es contraria al if dentro de las llaves la accion a ejecutarse
    }
  */
  // este if ocupara operadores relacionales
  /*if ($valor1 >= $valor2){
      echo "verdadero";
  }
  else{
    echo "falso";
  }
  */
  /*
     comparando el valor de la variable con un string
     if ($persona ==  'Hombre') {
        echo "el genero de la variable de la persona es Hombre se llamara jorge <br>";
     }
     else{
        echo "como no se cumple el if entonces el genero no es Hombre por lo tanto no puedo darle nombre";
     }
     */
     /*if ($valor1 >= $valor2 && $valor1 >= $valor3){
        echo "el valor de: ".$valor1." es mayor a ".$valor2." y mayor a: ".$valor3;
     }
     elseif ($valor2 >= $valor1 && $valor2 >= $valor3){
        echo "el valor de: ".$valor2." es mayor a ".$valor1." y mayor a: ".$valor3;
     }
     elseif ($valor3 >= $valor1 && $valor3 >= $valor2){
        echo "el valor de: ".$valor3." es mayor a ".$valor1." y mayor a: ".$valor2;
     }
     else{
        echo "no se cumple ninguna de las condiciones";
     }
     */
    if ($letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o' || $letra == 'u'){
        echo "el valor de la variable letra: ".$letra." es una vocal";
    }
    else {
        echo "el valor de la variable letra es una consonante";
    }
?>