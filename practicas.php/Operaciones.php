<?php
if (isset($_POST['btnsuma'])){
  $Num1= $_POST['numero1'];
  $Num2= $_POST['numero2'];
  if (!is_numeric($Num1)) {
    echo"El valor asignado a la caja 1 no es un valor numerico";
  }
  elseif(!is_numeric($Num2)){
    echo "El valor asignado a la caja 2 no es un valor numerico";
  }
  else{
    $respueta = $Num1 + $Num2;
    echo "El resultado de la suma es: ".$respueta;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operaciones con php</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <input type="text" name="numero1" placeholder="Digita un numero" required> +
    <input type="text" name="numero2" placeholder="Digita un numero" required>
    <input type="submit" value="sumar" name="btnsuma">
</form>
</body>
</html>