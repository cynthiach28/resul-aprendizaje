<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estiloheader.css" />
    <link rel="stylesheet" href="css/estilopagina.css" />
    <title>Connie Bella</title>

    <script type="text/javascript">
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
            else {
                if (contra1 != contra2) {
                    alert('Las contraseñas no coinciden');
                }
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

    </script>

</head>
<body>
    <header>
        <div class="franjablanca">
            <div class="conticonos">
                <input type="checkbox" name="" id="check2" onchange="mostrarPerfil();">
                <div class="conticon">
                    <div class="profile-icon"></div>
                </div>
            </div>
            <div class="logocont">
                <h3 class="logo">C<span>onnie</span> B<span>ella</span></h3>
            </div>
            <div class="conticonos">
                <div class="conticon">
                    <a href="#">
                        <img src="img/carrito.png" class="icono" />
                    </a>
                </div>
            </div>
        </div>
        <div class="contenedor">
            <div class="perfil" id="showperfil">
                <ul>
                    <li class="perfilinks">
                        <a href="iniciosesion.html">Iniciar sesión</a>
                    </li>
                    <div class="flecha2"></div>
                </ul>
            </div>

            <div class="menu">
                <div class="opciones">
                    <ul>
                        <li class="linkmenu">
                            <a href="index.html">Inicio</a>
                        </li>
                        <li class="linkmenu">
                            <a href="mujeres.html">Mujeres</a>
                        </li>
                        <li class="linkmenu">
                            <a href="hombres.html">Hombres</a>
                        </li>
                        <li class="linkmenu">
                            <a href="ninos.html">Niños</a>
                        </li>
                        <li class="linkmenu">
                            <a href="general.html">Productos generales</a>
                        </li>
                        <li class="linkmenu">
                            <a href="#popupsus">Suscribirse</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </header>