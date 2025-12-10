console.log("✅ app.js cargado (versión simple)");

const buttons  = document.querySelectorAll(".menu-item");
const sections = document.querySelectorAll(".section");

console.log("Botones encontrados:", buttons.length);
console.log("Secciones encontradas:", sections.length);

buttons.forEach(btn => {
    btn.addEventListener("click", () => {
        const target = btn.getAttribute("data-section"); // usuarios, actualizar, eliminar, crear

        // Quitar "active" de todos los botones
        buttons.forEach(b => b.classList.remove("active"));
        btn.classList.add("active");

        // Ocultar todas las secciones
        sections.forEach(sec => sec.classList.remove("active"));

        // Mostrar la sección clicada
        const sectionToShow = document.getElementById(target);
        if (sectionToShow) {
            sectionToShow.classList.add("active");
        }
    });
});

const btnBuscar = document.getElementById("btnBuscar");

if (btnBuscar) {
    btnBuscar.addEventListener("click", () => {

        const id = document.getElementById("idBuscar").value.trim();
        if (id === "") {
            alert("Escribe un ID primero");
            return;
        }

        console.log("🔍 Buscando usuario con ID:", id);

        fetch(`buscarUsuario.php?id=${encodeURIComponent(id)}`)
            .then(r => {
                console.log("📡 Respuesta HTTP:", r.status);
                return r.json();
            })
            .then(data => {
                console.log("📦 JSON recibido:", data);

                if (!data.ok) {
                    alert(data.msg || "No se encontró el usuario");
                    return;
                }

                // rellenar campos
                document.getElementById("nombreEditar").value   = data.nombre;
                document.getElementById("apellidoEditar").value = data.apellido;
                document.getElementById("correoEditar").value   = data.correo;
                document.getElementById("tipoEditar").value     = data.roll;

                // id oculto
                document.querySelector("input[name='idEditar']").value = data.id;
            })
            .catch(err => {
                console.error("❌ Error en fetch:", err);
                alert("Error buscando usuario");
            });

    }); 
}
