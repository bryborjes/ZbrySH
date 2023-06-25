/*$('#BotonLogin').click(function () {
    let usuario = retornarUsuario();
    loginUsuario(usuario);
});*/

var btnlogin = document.getElementById('log-in');
btnlogin.addEventListener('click', function() {
    let user = retornarUsuario();
    loginUsuario(user);
});

function retornarUsuario() {
    let user = {
        user: $('#UserName').val(),
        clave: $('#Password').val()
    };
    return usuario;
}
function loginUsuario(user) {
    $.ajax({
        type: 'POST',
        url: 'login.php',
        data: user,
        success: function (respuesta) {
            if (respuesta == 'correcta') {
                window.location = 'index.php';
            }
            else
                alert('nombre de usuario o clave incorrecta');
        },
        error: function () {
            alert('Error');
        }
    });
}