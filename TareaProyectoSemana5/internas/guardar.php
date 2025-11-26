<?php
    include("../dll/config.php");
    include("../dll/class_mysqli.php");
    extract($_POST);

    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST,DBUSER,DBPASS,DBNAME);
    
    $sql = "INSERT INTO registrorutas
    (nombre, apellido, cedula, correo, telefono, procedencia, fechanacimiento, tipousuario, tiporuta, contraseña)
    VALUES
    ('$nombre', '$apellido', '$cedula', '$correo', '$telefono', '$procedencia', '$fecha', '$tipoUsuario', '$tipRuta', '$contra')";

    $miconexion->consulta($sql);

    $sql3="select * from registrorutas";
    
    $miconexion->consulta($sql3);
    $miconexion->verconsulta();

?>