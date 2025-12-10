<?php
include("../dll/config.php");
include("../dll/class_mysqli.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id       = $_POST['idEditar']       ?? '';
    $nombre   = $_POST['nombreEditar']   ?? '';
    $apellido = $_POST['apellidoEditar'] ?? '';
    $correo   = $_POST['correoEditar']   ?? '';
    $contra   = $_POST['contraEditar']   ?? '';
    $tipo     = $_POST['tipoEditar']     ?? '';

    if ($id !== '' && $nombre !== '' && $apellido !== '' && $correo !== '' && $contra !== '' && $tipo !== '') {

        $miconexion = new clase_mysqli;
        $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

        // Sanitizar ID
        $id_safe = intval($id);

        // Si quieres guardar la clave en md5 como en crearUsuario:
        // $contraHash = md5($contra);
        // y usar $contraHash en lugar de $contra

        $sql = "UPDATE usuarios
                SET nombre   = '$nombre',
                    apellido = '$apellido',
                    correo   = '$correo',
                    clave    = '$contra',
                    roll     = '$tipo'
                WHERE id = $id_safe";

        $miconexion->consulta($sql);
    }

    // Volver al dashboard
    header("Location: ../administrator/dashboard.php?seccion=actualizar");
    exit;
} else {
    header("Location: ../administrator/dashboard.php");
    exit;
}
