<?php
// la salida de datos sera true el valor es tipo string y false de lo contrario
$valores = array(false, true, null, 78, '23', 23, '23.5', '', '', '0', 0);
foreach ($valores as $valor) {
    echo "es un string(";
    var_export($valor);
    echo ") = ";
    echo var_dump(is_string($valor));
    echo"<br><br>";
}
$mensaje = "esto es una cadena de caracteres";
if (Is_string($mensaje)) {
    echo $mensaje."<br>";
    var_dump($mensaje);
}
else {
    echo "el valor de mensaje no es un string ".$mensaje;
    
}
?>