<?php
// Verificar si el nombre ha sido enviado por GET
if (isset($_GET['usuario'])) {
    $usuario = $_GET['usuario'];

    setcookie('usuario', $usuario, time() + (3600 * 24 * 30), '/'); // Cookie expira en 30 días

    echo "cookie establecida";

} else {
    // Si no se ha enviado el nombre, redirigir al formulario
    echo "cookie NO establecida";
}
?>