// Script para alternar entre tema claro y oscuro en tiempo real
document.addEventListener('DOMContentLoaded', function() {
    const btn = document.getElementById('tema-btn');
    const root = document.documentElement;
    // Guardar preferencia en localStorage
    function setTema(tema) {
        root.setAttribute('data-tema', tema);
        localStorage.setItem('tema', tema);
        btn.textContent = tema === 'claro' ? '☀️' : '🌙';
    }
    // Detectar preferencia previa
    let tema = localStorage.getItem('tema') || 'oscuro';
    setTema(tema);
    btn.addEventListener('click', function() {
        tema = (tema === 'oscuro') ? 'claro' : 'oscuro';
        setTema(tema);
    });
});
