<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <!-- Agrega los enlaces a los archivos CSS de Bootstrap y jQuery -->
    <link rel="stylesheet" href="../../../bootstrap-5.3.0-alpha3-dist/css/bootstrap.css">
    <script src="../../../bootstrap-5.3.0-alpha3-dist/js/bootstrap.min.js"></script>
    <!--Libreria SweetAlert-->
    <script src="../../../bootstrap-5.3.0-alpha3-dist/sweetalert2.js"></script>
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="shortcut icon" href="../../src/dgeti.ico" type="image/x-icon">
    <title>Registro de maestros</title>
    <style>
        .navbar {
            position: relative;
        }

        .navbar .navbar-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 15px;
        }
    </style>
    <style>
        /* Estilos generales del cuerpo */
        body {
            margin: 0;
            padding: 0;
        }

        /* Imagen de fondo para pantallas anchas */
        @media screen and (min-width: 1200px) {
            body {
                background-image: url('../../src/Carrusel/CBTIS_FT\ \(6\).jpg');
                background-repeat: no-repeat;
                background-size: cover;
            }
        }

        /* Imagen de fondo para pantallas altas */
        @media screen and (max-height: 1080px) {
            body {
                background-image: url('../../src/CBTIS_FT\ \(6\).jpg');
                background-repeat: no-repeat;
                background-size: cover;
            }
        }

        #showButtonsModifier {
            display: none;
        }
    </style>
</head>

<body class="text-white bodysh bg-black">

    <!--Barra de inicio-->

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-image: linear-gradient(to bottom, #000000, #0000003b);">
        <a class="navbar-brand" href="../../" style="color: #ff0000;">&nbsp; <b>CBTIS N°254</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../../about/">Acerca de</a>
                </li>
            </ul>
        </div>
    </nav>

    <!--Comparar sesion-->
    <script>
        window.onload = function() {
            var usuario = localStorage.getItem('usuario');
            var mainSesionStart = document.querySelector('.menuSecionIniciada');

            if (usuario) {
                // El usuario ha iniciado sesión, muestra el menú adicional
                mainSesionStart.style.display = 'block';
            } else {
                // No se encontraron datos de sesión, no muestra el menú adicional
                mainSesionStart.style.display = 'block';
            }
        };
    </script>
    <!--Cuerpo de pagina-->

    <div class="container" style="min-height:700px;">
        <div class="table-responsive" style="background-color:#00000088; padding: 10px 0px;">
            <?php
            //Recuperar valores
            $ref = ConsultID($_GET['mat']);
            //verificar existencia y conexion a base de datos
            function ConsultID($id)
            {
                include "../../php-db/conection.php";
                $consult = "SELECT * FROM modules WHERE CodeModule = '" . $id . "'";
                $request = mysqli_query($conection, $consult);
                $colums = mysqli_fetch_assoc($request);
                return [
                    $colums['CodeModule'],
                    $colums['NameModule'],
                    $colums['Hours'],
                    $colums['Credits']
                ];
            }
            ?>

            <form action="../../php-db/module-update.php" method="post" class="form-text text-white w-100 text-center">
                <input type="hidden" name="mat" value="<?php echo $_GET['mat'] ?> ">
                <table class="w-100 justify-content-center">
                    <tbody>
                        <tr>
                            <td>
                                <label for="surname">Modulo:</label>
                            </td>
                            <td>
                                <input type="text" name="Module" id="Module" value="<?php echo $ref[1] ?>" required><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="surname">Horas:</label>
                            </td>
                            <td>
                                <input type="time" name="Hours" id="Hours" value="<?php echo $ref[2] ?>" required><br>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="adress">Creditos:</label></td>
                            <td><input type="number" max="10" name="Credits" id="Credits" value="<?php echo $ref[3] ?>" required><br></td>
                        </tr>
                    </tbody>
                </table><br>
                <button type="submit" class="btn btn-success">Guardar Cambios</button>
                <a href="../../php/modules/" class="btn btn-danger">Cancelar</a>
            </form>
        </div>
    </div>

    <!--Pie de pagina-->

    <footer class="footer bg-dark text-white">
        <div class="container">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <h3>Información de contacto</h3>
                    <p>Dirección: <a href="http://maps.app.goo.gl/v3r6MxB9kTSFnpPY7" target="_blank" rel="noopener noreferrer">Calle 12 Norte no. 102</a></p>
                    <p>Teléfono: <a href="tel:+522494225220">(249)-422-5220</a></p>
                    <p>Email: <a href="mailto:cbtis254.dir@dgeti.sems.gob.mx">cbtis254.dir@dgeti.sems.gob.mx</a></p>
                    <p>FB: <a href="https://www.facebook.com/CBTISNo254" target="_blank" rel="noopener noreferrer">
                            CBTIS N°254
                        </a></p>
                </div>
                <div class="col-lg-6">
                    <h3>Enlaces útiles</h3>
                    <ul class="list-unstyled">
                        <li><a href="../../about/">Acerca de</a></li>
                        <li><a href="#">Servicios</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center py-3">
            <p>&copy; 2023 ZONA_SH - ZbrySH. Todos los derechos reservados.</p>
        </div>
    </footer>
    <script src="../../../bootstrap-5.3.0-alpha3-dist/jquery-3.7.0.js"></script>
    <script src="../../../bootstrap-5.3.0-alpha3-dist/popper.js"></script>
    <script src="../../../bootstrap-5.3.0-alpha3-dist/bootstrap.min.js"></script>
</body>

</html>