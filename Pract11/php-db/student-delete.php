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
                background-image: url('../src/Carrusel/CBTIS_FT\ \(6\).jpg');
                background-repeat: no-repeat;
                background-size: cover;
            }
        }

        /* Imagen de fondo para pantallas altas */
        @media screen and (max-height: 1080px) {
            body {
                background-image: url('../src/CBTIS_FT\ \(6\).jpg');
                background-repeat: no-repeat;
                background-size: cover;
            }
        }

        #showButtonsModifier {
            display: none;
        }
    </style>
</head>
<?php
//Establecer conexión a base de datos
include "conection.php";

//Traer el valor de los datos a borrar
$ID=$_GET['mat'];

//Contruir la consulta para eliminar los datos
$sql = "DELETE FROM student WHERE IDcontrol = '$ID'";

// Ejecutar la consulta SQL
if (mysqli_query($conection, $sql)) {
    echo "
    <script type='text/JavaScript'>
        alert('Los datos han sido eliminados exitosamente');
        window.location.href='../php/students/';
    </script>";
}
else {
    echo "
    <script type='text/JavaScript'>
        alert('La operacion no se pudo llevar a cabo');
        window.location.href='../php/students/';
    </script>";
}

// Cerrar la conexión con la base de datos
mysqli_close($conection);
?>