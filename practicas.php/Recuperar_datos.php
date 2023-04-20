<?php
if(isset($_POST['enviar'])){
$Nombre =$_POST['nombre'];
$Apellidos =$_POST['apellidos'];
$FechaN =$_POST['fecha'];
$Email =$_POST['email'];
if($Nombre== ""){
echo "No hay un nombre asigna uno nombre ";
}
elseif($Apellidos==""){
echo "No hay  apellidos asigna los apellidos";
}
elseif($FechaN== ""){
    echo "falta asignar una fecha";
}
elseif($Email==""){
    echo "No hay un email asigna uno email";
}
else{
    echo "tu nombre es: ".$Nombre." tus apellidos son: ".$Apellidos." tu fecha de nacimiento es: ".$FechaN."tu email es: ".$Email;
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recuperacion de datos desde formulario php</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" name="nombre"placeholder="Nombre completo"/><br>
    <input type="text" name="apellidos" placeholder="Apellidos"/><br>
    <label for="fechaN">selecciona tu fecha de nacimiento</label><input type="date" name="fecha" /><br>
    <input type="email" name="email" placeholder="Ejemplo@yo.com"/><br>
    <input type="submit" value="enviar" name="enviar"/>
    </form>
</body>
</html>