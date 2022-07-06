//funcion para el checbbox del perfil
function mostrarPerfil() {
    perfil = document.getElementById("showperfil");
    check = document.getElementById("check2");
    if (check.checked) {
        perfil.style.display = 'block';
    }
    else {
        perfil.style.display = 'none';
    }
}