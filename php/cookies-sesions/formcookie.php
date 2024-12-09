  
<?php
// Verificar si la cookie ya está configurada
$usuario = isset($_COOKIE['usuario']) ? $_COOKIE['usuario'] : ''; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Usuario</title>
</head>
<body>
    <!-- Formulario que enviará el nombre al archivo validaLogin.php por GET -->
    <form method="GET" action="cookieform.php">
        <label for="usuario">Tu nombre:</label>
        <input type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>" required>
        <button type="submit">Enviar</button>
    </form>

</body>
</html>