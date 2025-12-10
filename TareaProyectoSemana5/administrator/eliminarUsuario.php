<?php
include("../dll/config.php");
include("../dll/class_mysqli.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['idEliminar'] ?? '';

    if ($id !== '') {

        $miconexion = new clase_mysqli;
        $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

        // Convertir ID a entero por seguridad
        $id_safe = intval($id);

        $sql = "DELETE FROM usuarios WHERE id = $id_safe";

        $miconexion->consulta($sql);
    }

    header("Location: ../administrator/dashboard.php");
    exit;
} 
