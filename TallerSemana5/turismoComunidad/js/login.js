document.getElementById("formLogin").addEventListener("submit", function(event) {
    event.preventDefault();

    const correo = document.getElementById("correo").value.trim();
    const contra = document.getElementById("contra").value.trim();
    const mensaje = document.getElementById("mensajeError");

    mensaje.textContent = "";

    // Validación básica
    if (!correo.includes("@")) {
        mensaje.textContent = "El correo no es válido.";
        return;
    }

    if (contra.length < 4) {
        mensaje.textContent = "La contraseña debe tener al menos 4 caracteres.";
        return;
    }

    // Animación al iniciar sesión
    const btn = document.querySelector(".btn-login");
    btn.textContent = "Ingresando...";
    btn.style.opacity = "0.6";

    setTimeout(() => {
        window.location.href = "../index.html";
    }, 800);
});
