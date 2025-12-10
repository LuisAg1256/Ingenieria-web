<?php
    //include("security/seguridad.php")
?>
<?php //Esto iba alado de h1 //echo $_SESSION['username']." ".$_SESSION['userlastname']; ?> 
 <?php
    //      Esto iba debajo de salir de la aplicacion
    //        $miconexion->consulta("select * from usuarios ");
	//		$list=$miconexion->verconsulta();
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="sytilesDashboard.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="layout">

        <!-- SIDEBAR -->
        <aside class="sidebar">
            <div class="sidebar-logo">
                <span class="logo-icon">Tp</span>
                <span class="logo-text">Trip Clone</span>
            </div>

            <nav class="sidebar-menu">
                <h4 class="sidebar-title">Menú</h4>

                <button class="menu-item active" data-section="usuarios">
                    <span class="menu-dot"></span>
                    Usuarios
                </button>

                <button class="menu-item" data-section="actualizar">
                    <span class="menu-dot"></span>
                    Actualizar usuarios
                </button>

                <button class="menu-item" data-section="eliminar">
                    <span class="menu-dot"></span>
                    Eliminar usuarios
                </button>

                <button class="menu-item" data-section="crear">
                    <span class="menu-dot"></span>
                    Crear usuario
                </button>
            </nav>
        </aside>

        <!-- MAIN -->
        <main class="main">
            <!-- TOPBAR -->
            <header class="topbar">
                <div class="topbar-left">
                    <h1 class="topbar-title">Panel de administración</h1>
                </div>
            </header>

            <!-- CONTENIDO -->
            <div class="content">

                <!-- USUARIOS -->
                <section id="usuarios" class="section active">
                    <h2 class="section-title">Usuarios</h2>
                    <div class="placeholder">
                        <!-- Aquí vas a poner mañana tu tabla/listado de usuarios -->
                    </div>
                </section>

                <!-- ACTUALIZAR USUARIOS -->
                <section id="actualizar" class="section">
                    <h2 class="section-title">Actualizar usuarios</h2>
                    <div class="placeholder">
                        <!-- Aquí va el diseño para actualizar usuarios -->
                    </div>
                </section>

                <!-- ELIMINAR USUARIOS -->
                <section id="eliminar" class="section">
                    <h2 class="section-title">Eliminar usuarios</h2>
                    <div class="placeholder">
                        <!-- Aquí va el diseño para eliminar usuarios -->
                    </div>
                </section>

                <!-- CREAR USUARIO -->
                <section id="crear" class="section">
                    <h2 class="section-title">Crear usuario</h2>
                    <div class="placeholder">
                        <!-- Aquí va el formulario/diseño para crear un nuevo usuario -->
                    </div>
                </section>

            </div>
        </main>

    </div>

    <script src="app.js"></script>
</body>
</html>



