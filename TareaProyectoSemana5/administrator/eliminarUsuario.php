<?php
include("../dll/config.php");
include("../dll/class_mysqli.php");

// Puede venir por GET (desde el botón) o por POST (por si acaso)
$id = $_GET['id'] ?? ($_POST['idEliminar'] ?? '');

if ($id !== '') {

    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

    $id_safe = intval($id);

    $sql = "DELETE FROM usuarios WHERE id = $id_safe";
    $miconexion->consulta($sql);
}

// Siempre volvemos al dashboard
header("Location: ../administrator/dashboard.php");
exit;
