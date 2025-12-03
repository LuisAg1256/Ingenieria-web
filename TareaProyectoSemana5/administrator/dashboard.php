<?php
    include("security/seguridad.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido Administrador <?php echo $_SESSION['username']." ".$_SESSION['userlastname']; ?> </h1>
    <?php
            $miconexion->consulta("select * from usuarios ");
			$list=$miconexion->verconsulta();
    ?>
</body>
</html>