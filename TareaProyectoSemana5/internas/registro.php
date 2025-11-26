<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro | Turismo Comunitario</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- TU CSS -->
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>

    <div class="login-wrapper fade-in">
        <div class="login-card">

            <div class="logoLogin"></div>

            <h2>Registro de Usuario</h2>
            <p class="sub">Complete sus datos para continuar</p>

            <form id="formLogin" action="guardar.php" method="POST">

                <!-- NOMBRE -->
                <div class="mb-3 text-start">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese su nombre" >
                </div>

                <!-- APELLIDO -->
                <div class="mb-3 text-start">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" id="apellido" name="apellido" class="form-control" placeholder="Ingrese su apellido" >
                </div>

                <!-- CORREO -->
                <div class="mb-3 text-start">
                    <label for="correo" class="form-label">Correo</label>
                    <input type="email" id="correo" name="correo" class="form-control" placeholder="Ingrese su correo" >
                </div>

                <!-- CEDULA -->
                <div class="mb-3 text-start">
                    <label for="cedula" class="form-label">Cédula</label>
                    <input type="text" id="cedula" name="cedula" class="form-control" placeholder="Ingrese su cédula" >
                </div>


                <!-- TELÉFONO -->
                <div class="mb-3 text-start">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="number" id="telefono" name="telefono" class="form-control" placeholder="Ingrese su teléfono" >
                </div>

                <!-- PROCEDENCIA -->
                <div class="mb-3 text-start">
                    <label for="procedencia" class="form-label">Procedencia</label>
                    <select name="procedencia" id="procedencia" class="form-select">
                        <option value="ec">Ecuador</option>
                        <option value="co">Colombia</option>
                        <option value="pe">Perú</option>
                    </select>
                </div>

                <!-- FECHA NACIMIENTO -->
                <div class="mb-3 text-start">
                    <label for="fecha" class="form-label">Fecha de nacimiento</label>
                    <input type="date" id="fecha" name="fecha" class="form-control" >
                </div>

                <!-- TIPO DE USUARIO -->
                <div class="mb-3 text-start">
                    <label for="tipoUsuario" class="form-label">Tipo de usuario</label>
                    <select name="tipoUsuario" id="tipoUsuario" class="form-select">
                        <option value="usuario1">Docente UTPL</option>
                        <option value="usuario2">Estudiante UTPL</option>
                        <option value="usuario3">Usuario Normal</option>
                    </select>
                </div>

                <!-- RUTA -->
                <div class="mb-3 text-start">
                    <label for="tipRuta" class="form-label">Seleccione la Ruta</label>
                    <select name="tipRuta" id="tipRuta" class="form-select">
                        <option value="ruta1">Ruta 1 ($120)</option>
                        <option value="ruta2">Ruta 2 ($420)</option>
                        <option value="ruta3">Ruta 3 ($320)</option>
                    </select>
                </div>

                <!-- CONTRASEÑA -->
                <div class="mb-3 text-start">
                    <label for="contra" class="form-label">Contraseña</label>
                    <input type="password" id="contra" name="contra" class="form-control" placeholder="Ingrese su contraseña" >
                </div>
                <button type="submit" class="btn-login mt-3">Registrarse</button>
            </form>

            <p id="mensajeError" class="mensaje-error"></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
