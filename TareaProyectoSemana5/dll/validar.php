<?php

 session_start();

if (!empty($_POST['correo']) && !empty($_POST['clave'])) {

    $username = $_POST['correo'];
    $userpass = md5($_POST['clave']);   // en la BD guardaremos MD5(clave)

    include("config.php");
    include("class_mysqli.php");

    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);

    $sql = "SELECT * FROM usuarios 
            WHERE correo = '$username' AND clave = '$userpass'";

    $miconexion->consulta($sql);
    $list = $miconexion->consulta_lista();

    if ($list && $list[0]) {
        // Usuario encontrado
        $_SESSION['autentificado'] = true;
        $_SESSION['iduser'] = $list[0];       // id
        $_SESSION['username'] = $list[1];     // nombre
        $_SESSION['userlastname'] = $list[2]; // apellido
        $_SESSION['roll'] = $list[5];         // roll

        echo "<script>location.href='../administrator/dashboard.php';</script>";
        exit;
    } else {
        // No coincide usuario/clave
        echo '<script>alert("Datos Incorrectos...");</script>';
        echo "<script>location.href='../security/index.html';</script>";
        exit;
    }
} else {
    // No enviaron ambos campos
    echo '<script>alert("Complete usuario y contraseña");</script>';
    echo "<script>location.href='../security/index.html';</script>";
    exit;
}

?>