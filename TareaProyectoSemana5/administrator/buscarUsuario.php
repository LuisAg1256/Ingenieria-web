<?php
include("../dll/config.php");
include("../dll/class_mysqli.php");

header("Content-Type: application/json; charset=utf-8");

if (!isset($_GET["id"])) {
    echo json_encode(["ok" => false, "msg" => "Falta ID"]);
    exit;
}

$id = intval($_GET["id"]);

$miconexion = new clase_mysqli;
$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

// OJO: tu clase devuelve lista con índices como en validar.php
$miconexion->consulta("SELECT * FROM usuarios WHERE id = $id");
$usuario = $miconexion->consulta_lista();

if (!$usuario || !$usuario[0]) {
    echo json_encode(["ok" => false, "msg" => "Usuario no encontrado"]);
    exit;
}

// $usuario[0] = id
// $usuario[1] = nombre
// $usuario[2] = apellido
// $usuario[3] = correo
// $usuario[5] = roll
echo json_encode([
    "ok"       => true,
    "id"       => $usuario[0],
    "nombre"   => $usuario[1],
    "apellido" => $usuario[2],
    "correo"   => $usuario[3],
    "roll"     => $usuario[5]
]);
