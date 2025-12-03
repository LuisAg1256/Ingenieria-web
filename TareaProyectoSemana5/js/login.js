document.getElementById("formLogin").addEventListener("submit", function(event) {

    const correo = document.getElementById("correo").value.trim();
    const contra = document.getElementById("password").value.trim(); 
    const mensaje = document.getElementById("mensajeError");

    mensaje.textContent = "";

    // Validación básica
    if (!correo.includes("@")) {
        event.preventDefault();
        mensaje.textContent = "El correo no es válido.";
        return;
    }

    if (contra.length < 4) {
        event.preventDefault();
        mensaje.textContent = "La contraseña debe tener al menos 4 caracteres.";
        return;
    }

    // Si todo está bien → se envía al validar.php
});
