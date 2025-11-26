<?php
session_start(); // Inicia la sesión
include("../dll/config.php");
include("../dll/class_mysqli.php");

$mensajeError = ""; // Variable para mostrar errores

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $correo = trim($_POST['correo']);
    $contra = trim($_POST['contra']);

    if (empty($correo) || empty($contra)) {
        $mensajeError = "Todos los campos son obligatorios.";
    } else {
        $miconexion = new clase_mysqli;
        $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

        $correo_safe = $miconexion->real_escape_string($correo);

        $sql = "SELECT * FROM registrorutas WHERE correo='$correo_safe' LIMIT 1";
        $result = $miconexion->consulta($sql);
        $usuario = $miconexion->fetch_assoc($result);

        if ($usuario) {
            if ($contra === $usuario['contraseña']) {
                $_SESSION['usuario'] = $usuario['nombre'] . ' ' . $usuario['apellido'];
                $mensajeError = "¡Login correcto! Bienvenido, " . $_SESSION['usuario'];
                // Aquí podrías redirigir después de un tiempo si quieres
            } else {
                $mensajeError = "Contraseña incorrecta.";
            }
        } else {
            $mensajeError = "Correo no registrado.";
        }
    }
}
?>