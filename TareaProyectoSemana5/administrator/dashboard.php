<?php
    include("security/seguridad.php");
    // Aquí ya deberías tener tu objeto $miconexion disponible
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

                <!-- ================== USUARIOS ================== -->
                <section id="usuarios" class="section active">
                    <h2 class="section-title">Usuarios</h2>

                    <div class="placeholder">
                        <!-- Tarjetas informativas -->
                        <div class="stats-grid">
                            <div class="stat-card stat-blue">
                                <span class="stat-label">Usuarios totales</span>
                                <span class="stat-value">120000</span>
                                <span class="stat-extra">Registros en el sistema</span>
                            </div>

                            <div class="stat-card stat-green">
                                <span class="stat-label">Usuarios activos</span>
                                <span class="stat-value">87</span>
                                <span class="stat-extra">Con actividad reciente</span>
                            </div>

                            <div class="stat-card stat-purple">
                                <span class="stat-label">Nuevos este mes</span>
                                <span class="stat-value">15</span>
                                <span class="stat-extra">Altas registradas</span>
                            </div>

                            <div class="stat-card stat-orange">
                                <span class="stat-label">Ingresos hoy</span>
                                <span class="stat-value">12</span>
                                <span class="stat-extra">Inicios de sesión</span>
                            </div>
                        </div>

                        <!-- Bloque estilo panel (como el de la foto) -->
                        <div class="dashboard-block">

                            <!-- MÉTRICAS PRINCIPALES -->
                            <div class="metrics-grid">

                                <div class="metric-card">
                                    <span class="metric-title">Usuarios activos</span>
                                    <span class="metric-number">1,248</span>
                                    <span class="metric-sub">Últimas 24 horas</span>
                                </div>

                                <div class="metric-card">
                                    <span class="metric-title">Ingresos</span>
                                    <span class="metric-number">$12,430</span>
                                    <span class="metric-sub">Mes actual</span>
                                </div>

                                <div class="metric-card">
                                    <span class="metric-title">Tareas pendientes</span>
                                    <span class="metric-number">34</span>
                                    <span class="metric-sub">Asignadas</span>
                                </div>

                                <div class="metric-card">
                                    <span class="metric-title">Alertas</span>
                                    <span class="metric-number">3</span>
                                    <span class="metric-sub">Requieren atención</span>
                                </div>

                            </div>

                            <!-- CONTENIDO INFERIOR -->
                            <div class="dashboard-lower">

                                <!-- ACTIVIDAD RECIENTE -->
                                <div class="activity-box">
                                    <h3>Actividad reciente</h3>

                                    <div class="activity-item">
                                        <span class="activity-user">Laura</span>
                                        <span class="activity-desc">creó un proyecto.</span>
                                        <span class="activity-time">2h</span>
                                    </div>

                                    <div class="activity-item">
                                        <span class="activity-user">Carlos</span>
                                        <span class="activity-desc">subió un archivo.</span>
                                        <span class="activity-time">4h</span>
                                    </div>

                                    <div class="activity-item">
                                        <span class="activity-user">María</span>
                                        <span class="activity-desc">actualizó permisos.</span>
                                        <span class="activity-time">6h</span>
                                    </div>

                                    <div class="activity-item">
                                        <span class="activity-user">Equipo</span>
                                        <span class="activity-desc">ejecutó backup.</span>
                                        <span class="activity-time">2d</span>
                                    </div>
                                </div>

                                <!-- USUARIOS RECIENTES -->
                                <div class="recent-users-box">
                                    <h3>Usuarios recientes</h3>

                                    <table class="recent-users-table">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Email</th>
                                                <th>Rol</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Ana</td>
                                                <td>ana@example.com</td>
                                                <td>Admin</td>
                                            </tr>

                                            <tr>
                                                <td>Juan</td>
                                                <td>juan@example.com</td>
                                                <td>Cliente</td>
                                            </tr>

                                            <tr>
                                                <td>Sofía</td>
                                                <td>sofia@example.com</td>
                                                <td>Empleado</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>

                            </div>

                        </div><!-- /dashboard-block -->
                    </div><!-- /placeholder -->
                </section>
                <!-- ================== ACTUALIZAR USUARIOS ================== -->
<section id="actualizar" class="section">
    <h2 class="section-title">Actualizar usuarios</h2>

    <div class="placeholder crear-wrapper">

        <!-- LISTA DE USUARIOS EXISTENTES -->
        <div class="card-users-list">
            <h3 class="card-title">Usuarios registrados</h3>

            <div class="table-wrapper">
                <?php

                    $miconexion->consulta("SELECT id, nombre, apellido, roll FROM usuarios");
                    $miconexion->verconsulta();
                ?>
            </div>
        </div>

        <!-- FORMULARIO PARA ACTUALIZAR USUARIO POR ID -->
        <div class="card-user-form">
            <h3 class="card-title">Actualizar datos de un usuario</h3>

            <form method="POST" action="actualizarUsuarios.php" class="user-form">

                <!-- ID DEL USUARIO A MODIFICAR -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="idEditar">ID del usuario a modificar</label>
                        <input type="number" id="idEditar" name="idEditar" required>
                    </div>
                </div>

                <!-- NUEVOS DATOS -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="nombreEditar">Nombre</label>
                        <input type="text" id="nombreEditar" name="nombreEditar" required>
                    </div>

                    <div class="form-group">
                        <label for="apellidoEditar">Apellido</label>
                        <input type="text" id="apellidoEditar" name="apellidoEditar" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="correoEditar">Correo</label>
                        <input type="email" id="correoEditar" name="correoEditar" required>
                    </div>

                    <div class="form-group">
                        <label for="contraEditar">Contraseña</label>
                        <input type="password" id="contraEditar" name="contraEditar" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="tipoEditar">Tipo de usuario (roll)</label>
                        <select id="tipoEditar" name="tipoEditar" required>
                            <option value="">Seleccione...</option>
                            <option value="1">Admin</option>
                            <option value="2">Usuario</option>
                            <option value="3">Empleado</option>
                        </select>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary btn-large">
                        Actualizar usuario
                    </button>
                </div>
            </form>
        </div>

    </div>
</section>

                <!-- ================== ELIMINAR USUARIOS ================== -->
                <section id="eliminar" class="section">
                    <h2 class="section-title">Eliminar usuarios</h2>

                    <div class="placeholder crear-wrapper">

                        <!-- LISTA DE USUARIOS EXISTENTES -->
                        <div class="card-users-list">
                            <h3 class="card-title">Usuarios registrados</h3>

                            <div class="table-wrapper">
                                <?php
                                    // MOSTRAR: id, nombre, apellido, roll
                                    $miconexion->consulta("SELECT id, nombre, apellido, roll FROM usuarios");
                                    $miconexion->verconsulta();
                                ?>
                            </div>
                        </div>

                        <!-- FORMULARIO PARA ELIMINAR POR ID -->
                        <div class="card-user-form">
                            <h3 class="card-title">Eliminar usuario por ID</h3>

                            <form method="POST" action="eliminarUsuario.php" class="user-form">
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="idEliminar">ID del usuario</label>
                                        <input type="number" id="idEliminar" name="idEliminar" required>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button type="submit" class="btn btn-danger btn-large">
                                        Eliminar usuario
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </section>

    

                <!-- ================== CREAR USUARIO ================== -->
                <section id="crear" class="section">
                    <h2 class="section-title">Crear usuario</h2>

                    <div class="placeholder crear-wrapper">

                        <!-- LISTA DE USUARIOS EXISTENTES -->
                        <div class="card-users-list">
                            <h3 class="card-title">Usuarios registrados</h3>

                            <div class="table-wrapper">
                                <?php
                                    // Consulta simple usando tu clase y tu estilo
                                    $miconexion->consulta("SELECT id, nombre, apellido, roll FROM usuarios");
                                    $miconexion->verconsulta();
                                ?>
                            </div>
                        </div>

                        <!-- FORMULARIO PARA CREAR NUEVO USUARIO -->
                        <div class="card-user-form">
                            <h3 class="card-title">Registrar nuevo usuario</h3>

                            <form  action="crearUsuario.php" method="POST"  class="user-form">
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" id="nombre" name="nombre" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="apellido">Apellido</label>
                                        <input type="text" id="apellido" name="apellido" required>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="correo">Correo</label>
                                        <input type="email" id="correo" name="correo" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="contra">Contraseña</label>
                                        <input type="password" id="contra" name="contra" required>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="tipo">Tipo de usuario</label>
                                        <select id="tipo" name="tipo" required>
                                            <option value="">Seleccione...</option>
                                            <option value="1">Admin</option>
                                            <option value="2">Usuario</option>
                                            <option value="3">Empleado</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button type="submit" name="btnRegistrar" class="btn btn-primary btn-large">
                                        Registrar cliente
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                </section>

            </div><!-- /content -->
        </main>

    </div><!-- /layout -->

    <script src="app.js"></script>
</body>
</html>
