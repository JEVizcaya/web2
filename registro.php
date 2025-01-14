<?php 
if(isset($_POST["nombre"])){
    include("conexiondb.php");
    try{ 
        $sql = "INSERT INTO usuarios (nombre, apellidos, email, fecha, password) 
                VALUES (:nombre, :apellidos, :email, :fecha, :password)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':nombre', $_POST["nombre"]);
        $stmt->bindParam(':apellidos', $_POST["apellidos"]);
        $stmt->bindParam(':email', $_POST["email"]);
        $stmt->bindParam(':fecha', $_POST["fecha"]);
        // Encriptar la contraseña antes de guardarla
        $hashed_password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $stmt->bindParam(':password', $hashed_password);
        $stmt->execute();
        echo "Registro insertado exitosamente";
        header("Location: login.php");
    } catch (PDOException $e) {
        echo "Conexión fallida: " . $e->getMessage();
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web2 - registro</title>
    <link rel="stylesheet" href="css/login.css">
   
<body>
    <div>
    <a href="index.php"><img src="img/logo.svg" alt="Logo"></a>
    <form class="register" action="" method="post">
    <label for="nombre">Nombre</label>
    <input required type="text" name="nombre" id="nombre">
    <label for="apellidos">Apellidos</label>
    <input required type="text" name="apellidos" id="apellidos">
    <label for="email">Email</label>
    <input required type="email" name="email" id="email">
    <label for="fecha">Fecha Nacimiento</label>
    <input type="date" name="fecha" id="fecha">
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <label for="password">Confirmar Password</label>
    <input type="password" name="" id="repassword">
    <span id="msg">*Las contraseñas deben ser iguales</span>
    <button id="btnCrear" disabled="disabled">Crear usuario</button>
    
    
</form>
<p>*Si tienes usuario <a href="login.php">login</a></p>
</div>
<script src="js/registro.js"></script>
</body>
</html>