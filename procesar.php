<?php

$host="localhost"; //o ip de tu servidor mysql
$user="root"; //usuario de la base de datos
$password=""; //contraseña de la base de datos
$ddatabase="web2"; //nombre de la base de datos

//crear conexion
$conexion = mysqli_connect($host, $user, $password, $ddatabase);

//verificar conexion    
if (!$conexion) {
    die("Conexion fallida: " . mysqli_connect_error());
}
echo "conexion exitosa";

$sql = "INSERT INTO usuarios (nombre, apellidos, email, fecha, password)
 VALUES ('".$_POST["nombre"]."', '".$_POST["apellidos"]."', '".$_POST["email"]."', '".$_POST["fecha"]."', '".$_POST["password"]."')";

if (mysqli_query($conexion, $sql)) {
    echo "Nuevo registro creado";
} else {    
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
    
//cerrar conexion
mysqli_close($conexion);


?>