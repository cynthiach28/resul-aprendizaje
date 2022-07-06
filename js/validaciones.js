function verificarregistro() {
    var correore = document.getElementById('correore').value;
    var nomre = document.getElementById('nomre').value;
    var apere = document.getElementById('apere').value;
    var contra1 = document.getElementById('contra1re').value;
    var contra2 = document.getElementById('contra2re').value;
    var numre = document.getElementById('numre').value;
    var callere = document.getElementById('callere').value;
    var casare = document.getElementById('casare').value;
    var estadore = document.getElementById('estadore').value;
    var cpre = document.getElementById('cpre').value;
    var ciudadre = document.getElementById('ciudadre').value;

    if (correore == "" || nomre == "" || apere == "" || contra1 == "" || contra2 == "" || numre == "" || callere == "" || casare == "" || estadore == "" || cpre == "" || ciudadre == "") {
        alert('Tiene espacios vacíos en sus datos, favor de verificar');
    }
    else if (contra1 != contra2) {
        alert('Las contraseñas no coinciden');
    }
    else {
        alert('El registro ha sido validado.');
    }
}

function verificarlogin() {
    var correo = document.getElementById('correo').value;
    var contra = document.getElementById('contra').value;

    if (correo == "" || contra == "") {
        alert('Tiene espacios vacíos en sus datos, favor de verificar.');
    }
    else {
        alert('Campos del login validados.');
    }
}

function verificarsus() {
    var correo = document.getElementById('correosus').value;
    var nombre = document.getElementById('nomsus').value;
    var apellido = document.getElementById('apesus').value;

    if (correo == "" || nombre == "" || apellido == "") {
        alert('Tiene espacios vacíos en sus datos, favor de verificar.');
    }
    else {
        alert('Campos de suscripcon validados.');
    }
}

//Que sea solo numero
function Solonumero(event) {
    var ascii = (event.which) ? event.which : event.keyCode;

    if (ascii >= 48 && ascii <= 57) //numeros 0-9
    {
        return true;
    }
    else if (ascii == 8) //borrar
    {
        return true;
    }
    else {
        return false;
    }
}

//Mensaje de que no es numero
function mensaje(event) {
    var ascii2 = (event.which) ? event.which : event.keyCode;

    if ((ascii2 >= 48 && ascii2 <= 57) == false) //Es diferente a numero
    {
        if ((ascii2 != 8 && ascii2 != 37 && ascii2 != 38 && ascii2 != 39 && ascii2 != 40) == true) //No es backspace ni flechas
        {
            alert("Ingrese solamente numeros");
        }
    }
}

//verifica que el numero sea de 10 digitos
function tel() {
    var t = document.getElementById('numre').value;
    var tel = parseInt(t);
    if (tel < 1000000000 || tel > 9999999999) {
        alert('Ingrese un numero telefónico válido de 10 dígitos');
        document.getElementById('numre').value = "";
        document.getElementById('numre').style.border = "1px solid red";
    }
    else {
        document.getElementById('numre').style.border = "";
    }
}