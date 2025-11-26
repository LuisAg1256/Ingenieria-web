
<?php
    include("../dll/config.php");
    include("../dll/class_mysqli.php");
    extract($_POST);
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST,DBUSER,DBPASS,DBNAME);

    $sql3="select * from registrorutas where nombre='$buscar'";
    
    $miconexion->consulta($sql3);
    $miconexion->verconsulta();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/buscar.css">
</head>
<body>  
    <form method="POST" action="buscar.php" class="buscar-form">
            <button type="submit">Volver</button>
    </form>
    
</body>
</html>
