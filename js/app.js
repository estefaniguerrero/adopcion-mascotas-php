const menuBtn = document.getElementById('menuBtn');
const menu = document.getElementById('menu');

menuBtn.addEventListener('click', () => {
    const abierto = menu.classList.toggle('abierto');
    menuBtn.setAttribute('aria-expanded', abierto);
});

document.querySelectorAll('nav a').forEach(enlace => {
    enlace.addEventListener('click', () => menu.classList.remove('abierto'));
});

document.querySelectorAll('[data-mascota]').forEach(enlace => {
    enlace.addEventListener('click', () => {
        document.getElementById('mascotaSelect').value = enlace.dataset.mascota;
    });
});

document.getElementById('formAdopcion').addEventListener('submit', (evento) => {
    evento.preventDefault();
    const aviso = document.getElementById('aviso');
    aviso.textContent = 'Solicitud registrada. Nos comunicaremos contigo pronto.';
    evento.target.reset();
    setTimeout(() => aviso.textContent = '', 5000);
});

