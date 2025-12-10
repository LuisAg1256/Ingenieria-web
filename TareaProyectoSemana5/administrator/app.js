// Cambiar de sección al hacer clic en el menú lateral
const menuItems = document.querySelectorAll('.menu-item');
const sections = document.querySelectorAll('.section');

menuItems.forEach(item => {
    item.addEventListener('click', () => {
        const target = item.getAttribute('data-section');

        // activar botón
        menuItems.forEach(i => i.classList.remove('active'));
        item.classList.add('active');

        // mostrar sección correspondiente
        sections.forEach(sec => {
            if (sec.id === target) {
                sec.classList.add('active');
            } else {
                sec.classList.remove('active');
            }
        });
    });
});
