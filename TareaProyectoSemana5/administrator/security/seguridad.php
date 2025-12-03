<?php
    session_start();
    if($_SESSION['autentificado']&& $_SESSION['iduser']){
        include ("../dll/config.php");
        include ("../dll/class_mysqli.php");

        $miconexion = new clase_mysqli;
        $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    }else{
        session_destroy();
        echo '<script>alert("Datos Incorrectos...");</script>';
		        echo "<script>location.href='../'</script>";
    }
?>