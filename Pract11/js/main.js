// Obtén una referencia al botón y al div de información adicional
var mostrarBtn = document.getElementById('mostrarBtn');
var informacionAdicional = document.getElementById('informacionAdicional');
var progSpaceSuspensive = document.getElementById('progSpaceSuspensive');

// Agrega un evento de clic al botón
mostrarBtn.addEventListener('click', function () {
    // Verifica el estado actual del div de información adicional
    if (informacionAdicional.style.display === 'none') {
        // Si está oculto, muéstralo
        informacionAdicional.style.display = 'block';
        mostrarBtn.textContent = "Ocultar información.";
        progSpaceSuspensive.textContent = "";
    } else {
        // Si está visible, ocúltalo
        informacionAdicional.style.display = 'none';
        mostrarBtn.textContent = "Mostrar más información"
        progSpaceSuspensive.textContent = "...";
    }
});

// Logistica
var mostrarBtnLog = document.getElementById('mostrarBtnLog');
var informacionAdicionalLog = document.getElementById('informacionAdicionalLog');
var logSpaceSuspensive = document.getElementById('logSpaceSuspensive');
//Logistica
mostrarBtnLog.addEventListener('click', function () {
    // Verifica el estado actual del div de información adicional
    if (informacionAdicionalLog.style.display === 'none') {
        // Si está oculto, muéstralo
        informacionAdicionalLog.style.display = 'block';
        mostrarBtnLog.textContent = "Ocultar información.";
        logSpaceSuspensive.textContent = "";
    } else {
        // Si está visible, ocúltalo
        informacionAdicionalLog.style.display = 'none';
        mostrarBtnLog.textContent = "Mostrar más información"
        logSpaceSuspensive.textContent = "...";
    }
});
// Iniciar sesion
var showLogin = document.getElementById('btn-login');
var formLogin = document.getElementById('login-form');
//Logistica
showLogin.addEventListener('click', function () {
    // Verifica el estado actual del div de información adicional
    if (formLogin.style.display === 'none') {
        // Si está oculto, muéstralo
        formLogin.style.display = 'block';
        showLogin.textContent = "Cerrar sesion";
    } else {
        // Si está visible, ocúltalo
        formLogin.style.display = 'none';
        mostrashowLoginrBtnLog.textContent = "Iniciar sesion"
    }
});

//comparar sesion para agregar *Administrar*
window.onload = function () {
    var usuario = localStorage.getItem('usuario');
    var menuSecionIniciada = document.querySelector('.menuSecionIniciada');

    if (usuario) {
        // El usuario ha iniciado sesión, muestra el menú adicional
        menuSecionIniciada.style.display = 'block';
    } else {
        // No se encontraron datos de sesión, no muestra el menú adicional
        menuSecionIniciada.style.display = 'none';
    }
};