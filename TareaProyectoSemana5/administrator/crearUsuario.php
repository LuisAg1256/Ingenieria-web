
<?php
include("../dll/config.php");
include("../dll/class_mysqli.php");

// Solo procesar si viene por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Recibir datos del formulario
    $nombre   = $_POST['nombre']   ?? '';
    $apellido = $_POST['apellido'] ?? '';
    $correo   = $_POST['correo']   ?? '';
    $contra   = md5($_POST['contra']   ?? '');
    $tipo     = $_POST['tipo']     ?? '';

    // Conexión
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $sql = "INSERT INTO usuarios
            (nombre, apellido, correo, clave, roll)
            VALUES
            ('$nombre', '$apellido', '$correo', '$contra', '$tipo')";

    $miconexion->consulta($sql);

    // Después de insertar, redirigimos de vuelta al dashboard
    header("Location: ../administrator/dashboard.php");
    exit;
}
