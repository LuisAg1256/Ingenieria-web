
<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Registros | Turismo Comunitario</title>
    <link rel="stylesheet" href="../css/buscar.css">
</head>
<body>

    <div class="container">
        <h2>Buscar Registros</h2>

        <form method="POST" action="mostrar.php" class="buscar-form">
            <input type="text" name="buscar" placeholder="Buscar por nombre">
            <button type="submit">Buscar</button>
        </form>
    </div>
</body>
</html>
<?php
    include("../dll/config.php");
    include("../dll/class_mysqli.php");
    extract($_POST);
     $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST,DBUSER,DBPASS,DBNAME);
    
    $sql3="select * from registrorutas";
    
    $miconexion->consulta($sql3);
    $miconexion->verconsulta();

?>
