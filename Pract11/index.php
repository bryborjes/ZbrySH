<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    //header("Location:login.html");
    //exit(0);
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
    <!-- Agrega los enlaces a los archivos CSS de Bootstrap y jQuery -->
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <!--JS-->
    <script src="../bootstrap-5.3.0-alpha3-dist/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="src/dgeti.ico" type="image/x-icon">
    <title>CBTIS N°254</title>
</head>

<body class="text-white bodysh bg-black" id="bodyAll">

    <!--Barra de inicio-->

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top"
        style="background-image: linear-gradient(to bottom, #000000, #0000003b);">
        <a class="navbar-brand" href="" style="color: #ff0000;">&nbsp; <b>CBTIS N°254</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about/">Acerca de</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Más
                    </a>
                    <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown1"
                        style="background-color: #00000085;">
                        <a class="dropdown-item" href="info/Admicion/">Requisitos de admision</a>
                        <a class="dropdown-item" href="#">Perfil de egreso</a>
                    </div>
                </li>
                <div class="menuSecionIniciada nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Administración
                    </a>
                    <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown"
                        style="background-color: #00000085;">
                        <a class="dropdown-item" href="#">Perfil</a>
                        <a class="dropdown-item" href="#">Configuración</a>
                        <div class="dropdown-divider bg-info"></div>
                        <a class="dropdown-item" href="php/teachers/">Maestros registrados</a>
                        <a class="dropdown-item" href="php/modules/">Modulos impartidos</a>
                        <a class="dropdown-item" href="php/students/">Alumnos inscritos</a>
                        <a class="dropdown-item" href="php/users/">Usuarios</a>
                        <div class="dropdown-divider bg-info"></div>
                        <a class="dropdown-item" href="#">Cerrar Sesión</a>
                    </div>
                </div>
                <a type="button" href="html-forms/login/" id="btn-login" class="btn btn-primary navbar-btn">Iniciar
                    Sesión</a>
            </ul>
        </div>
    </nav>
    <!--Carrusel de fotos-->
    <div class="container">
        <div id="photosCarousel" class="carousel slide" data-ride="carousel">
            <!-- Slides -->
            <div class="carousel-inner text-center">
                <div class="carousel-item active">
                    <img src="src/Carrusel/CBTIS_FT (6).jpg" alt="Imagen 1" class="w-75">
                </div>
                <div class="carousel-item">
                    <img src="src/Carrusel//CBTIS_FT (4).jpg" alt="Imagen 2" class="w-75">
                </div>
                <div class="carousel-item">
                    <img src="src/Carrusel//CBTIS_FT (3).jpg" alt="Imagen 3" class="w-75">
                </div>
                <div class="carousel-item">
                    <img src="src/Carrusel//CBTIS_FT (5).jpg" alt="Imagen 3" class="w-75">
                </div>
            </div>

            <!-- Controles -->
            <a class="carousel-control-prev bg-black" href="#photosCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
            <a class="carousel-control-next bg-black" href="#photosCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
        </div>
    </div>
    <!--Carrusel de información-->
    <div class="container">
        <div id="information" class="carousel slide pt-4" data-ride="carousel"
            style="background-color: rgba(0, 0, 0, 0.493); min-height: 100px;">
            <!-- Slides -->
            <div class="carousel-inner text-center">
                <div class="carousel-item active">
                    <div class="container w-75">
                        <div class="row">
                            <div class="col-12 text-center">
                                <p class="h1">Clubs deportivos y de competencias</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container w-75">
                        <div class="row">
                            <div class="col-12 text-center">
                                <p class="h1">Clubs desportivos</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container w-75">
                        <div class="row">
                            <div class="col-6">
                                <h4>Basquetbol</h4>
                                <p>Se organizan torneos de basquetbol locales y otros planteles.
                                </p>
                            </div>
                            <div class="col-6">
                                <h4>Futbol</h4>
                                <p>Se hacen torneos de futbol con equipos locales u otras instituciones.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container w-75">
                        <div class="row">
                            <div class="col-6">
                                <h4>Beisbol</h4>
                                <p>
                                    Actualmente se encuentra en proceso de implementación.
                                </p>
                            </div>
                            <div class="col-6">
                                <h4>Boleibol</h4>
                                <p>
                                    Se organizan torneos con otras escuelas de la comunidad.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container w-75">
                        <div class="row">
                            <div class="col-12 text-center">
                                <p class="h1">Clubs competitivos</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controles -->
            <a class="carousel-control-prev" href="#information" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
            <a class="carousel-control-next" href="#information" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
        </div>
    </div>
    <!--Fin de carousel-->


    <!--Cuerpo de pagina-->

    <div class="container pb-4">
        <div class="row" style="background-color: rgba(0, 0, 0, 0.452); padding: 5px; text-align: justify;">
            <div class="col-12">
                <p style="padding: 5px; text-align: justify;">
                    El <b>Centro de Bachillerato Tecnológico Industrial y de Servicios N°254</b> de nivel <b>Media
                        Superior</b>,
                    te da la bienvenida a su sitio web, donde te proporcionaremos la información que requieras
                    y así animarte a formar parte de nuestras filas
                </p>
            </div>pai
            <div class="col-12 text-center">
                <p>Actualmente, el centro educativo cuenta con 2 especialidades, las cuales son <b>Técnico en
                        Logística</b>
                    y <b>Técnico en Programación</b>. A continuación, se describirán ambas especialidades.
                </p>
            </div>
        </div>
        <div class="row" style="background-color: rgba(0, 0, 0, 0.452); padding: 5px; text-align: justify;">
            <div class="col-12">
                <h3>Técnico en Programación:</h3>
                <p>
                    La carrera de Técnico en Programación ofrece las competencias profesionales necesarias para que el
                    estudiante pueda realizar diversas actividades relacionadas con el análisis, diseño, desarrollo,
                    instalación y mantenimiento de software de aplicación, teniendo en cuenta los requerimientos del
                    usuario. Estas competencias permiten al egresado incorporarse al mundo laboral o emprender proyectos
                    independientes de acuerdo con sus intereses y las necesidades de su entorno social. <br>
                    Además, esta carrera contribuye al desarrollo de competencias genéricas que les permiten comprender
                    y influir en el mundo, aprender de forma autónoma a lo largo de la vida, establecer relaciones
                    armoniosas y participar en los ámbitos social, profesional y político.<br>
                    El Técnico en Programación puede encontrar oportunidades laborales en diversos ámbitos, como:
                    <a id="progSpaceSuspensive">...</a>
                    <a href="#addInfo1" id="mostrarBtn">Mostrar más información</a>
                <div id="informacionAdicional">
                    <a href="#addInfo1"></a>
                    <p>
                    <ul>
                        <li>Edición de software y desarrollo de software integrado con la producción.</li>
                        <li>Servicios de diseño de sistemas informáticos y servicios relacionados.</li>
                        <li>Escuelas de informática del sector privado.</li>
                        <li>Escuelas de informática del sector público.</li>
                        <li>Edición y difusión de contenido exclusivamente a través de Internet.</li>
                        <li>Servicios de búsqueda en la red.</li>
                    </ul> <br>
                    Para adquirir estas competencias, el estudiante debe completar una formación profesional que
                    abarca desde el segundo hasta el sexto semestre. Durante este período, se desarrollan las
                    competencias profesionales establecidas en el programa de estudios. Los primeros tres módulos de
                    la carrera tienen una duración de 272 horas cada uno, mientras que los dos últimos tienen una
                    duración de 192 horas, lo que suma un total de 1200 horas de formación profesional. Es
                    importante destacar que los módulos de formación profesional son transdisciplinarios, ya que
                    integran conocimientos de diferentes disciplinas para abordar objetos y procesos de
                    transformación. <br>
                    <span class="h4"> Perfil de egreso:</span><br>
                    La formación que ofrece la carrera de Técnico en Programación permite al egresado, a través de
                    la articulación de saberes de diversos campos, realizar actividades dirigidas a:
                    <ul>
                        <li>Instalación y desarrollo de software de aplicación utilizando programación estructurada y
                            orientada a objetos en entornos web y móviles, con almacenamiento persistente de datos.</li>
                        <li>Configuración y administración de plataformas de e-learning y comercio electrónico.</li>
                    </ul>
                    Durante el proceso de formación en los cinco módulos, el estudiante desarrollará o reforzará las
                    siguientes competencias profesionales:
                    <ul>
                        <li>Desarrolla e instala software de aplicación utilizando programación estructurada, con
                            almacenamiento persistente de los datos.</li>
                        <li>Desarrolla software de aplicación utilizando programación orientada a objetos, con
                            almacenamiento persistente de los datos.</li>
                        <li>Desarrolla aplicaciones web y móviles.</li>
                        <li>Administra sistemas operativos, aplicaciones y servicios.</li>
                        <li>Desarrolla, administra y configura soluciones de e-learning y comercio electrónico.</li>
                    </ul>
                    Además, se adquirirán competencias de empleabilidad y productividad:
                    <ul>
                        <li>Trabajo en equipo.</li>
                        <li>Comunicación efectiva.</li>
                        <li>Adaptabilidad.</li>
                        <li>Atención al proceso.</li>
                        <li>Orientación al logro.</li>
                        <li>Planeación y organización.</li>
                        <li>Orientación a la mejora continua.</li>
                        <li>Atención al cliente.</li>
                        <li>Ética profesional.</li>
                    </ul>
                    El egresado de la carrera de Técnico en Programación está en posibilidad de demostrar
                    competencias genéricas como:
                    <ul>
                        <li>Escucha, interpreta y emite mensajes pertinentes en distintos contextos mediante la
                            utilización de medios, códigos y herramientas apropiados.</li>
                        <li>Desarrolla innovaciones y propone soluciones a problemas utilizando métodos establecidos.
                        </li>
                        <li>Aprende por iniciativa e interés propio a lo largo de la vida.</li>
                        <li>Participa y colabora de manera efectiva en equipos.</li>
                    </ul><br>
                    Es importante recordar que, en este modelo educativo, el egresado de la educación media superior
                    desarrolla competencias genéricas a partir de la contribución de las competencias profesionales
                    al componente de formación profesional, y no de forma aislada e individual, sino a través de una
                    propuesta de formación integral en un marco de diversidad.

                    </p>
                </div>

                </p>
            </div>
            <div class="col-12">
                <h3>Técnico en Logística:</h3>
                <p>
                    Un Técnico en Logística es un profesional capacitado para llevar a cabo diversas actividades
                    relacionadas con la gestión y control de la cadena de suministro en una organización. Su función
                    principal es asegurar la eficiencia en el movimiento de bienes, desde su origen hasta su destino
                    final.

                    Las responsabilidades de un Técnico en Logística pueden incluir la planificación y coordinación de
                    actividades relacionadas con la adquisición, almacenamiento, transporte y distribución de productos.
                    Algunas de sus tareas específicas pueden ser:

                    Gestión de inventario: Realizar un seguimiento y control de los niveles de existencias, garantizando
                    que los productos estén disponibles en el momento y lugar adecuados.
                    <a id="logSpaceSuspensive">...</a>
                    <a href="#addInfo2" id="mostrarBtnLog">Mostrar más información</a>
                <div id="informacionAdicionalLog">
                    <a href="#addInfo2"></a>
                    Planificación y programación: Establecer los tiempos y secuencias de entrega, coordinando los
                    procesos logísticos para optimizar la eficiencia y minimizar los costos.

                    Transporte y distribución: Organizar el transporte de mercancías, seleccionando los medios de
                    transporte más adecuados y asegurando que se cumplan los plazos de entrega.

                    Coordinación con proveedores y clientes: Mantener una comunicación fluida y coordinar las
                    actividades logísticas con proveedores y clientes, asegurando la satisfacción de las necesidades y
                    requisitos de ambas partes.

                    Gestión de almacenes: Supervisar y administrar los procesos de recepción, almacenamiento y
                    distribución de productos en los almacenes, optimizando el espacio y garantizando un flujo
                    eficiente.

                    Utilización de herramientas tecnológicas: Aplicar sistemas informáticos y tecnologías de la
                    información para el control y seguimiento de la cadena de suministro, como el uso de software de
                    gestión de inventario y rastreo de envíos.

                    En resumen, un Técnico en Logística es un profesional encargado de asegurar una gestión eficiente y
                    efectiva de los procesos logísticos, buscando optimizar los recursos, reducir costos y mejorar la
                    satisfacción del cliente. Su conocimiento en logística y habilidades técnicas le permiten
                    desempeñarse en diferentes sectores como empresas de transporte, distribución, manufactura, comercio
                    internacional, entre otros.
                </div>
                </p>
            </div>
        </div>
        <div></div>
    </div>
    <!--Seccion de comentarios-->
    <div class="bg-dark container">
        <center>
            <h4>COMENTARIOS</h4>
        </center>
        <div class="container" style="max-height: 20rem; overflow-y: scroll;" id="contentComments">
            <div class="col-12 py-3 bg-dark" id="comment-body" style="border-radius: 10px;
        border: 0px solid; padding: 1rem 3rem;">
                <div style="background-color: rgba(133, 0, 0, 0.445); border-radius: 10px; padding: 1rem 4rem;">
                    <hr>
                    <?php
                    include "php-db/conection.php";
                    $consult = "SELECT * FROM feedback";
                    $result = mysqli_query($conection, $consult);

                    if (!$result) {
                        echo "Error al mostrar comentarios";
                    } else {
                        while ($comments = mysqli_fetch_array($result)) {
                            $user = "SELECT * FROM users WHERE id=$comments[IDuser]";
                            $recovery = mysqli_query($conection, $user);
                            $userName = mysqli_fetch_array($recovery);
                            echo ("
                        <p>
                            <span style='background-color: brown; border-radius: 10px; padding: 0rem 0.6rem; width:fit-content;'>
                                " . $userName['NameUser'] . "
                            </span>" .
                                "<br><span style='background-color: #ff0000; border-radius: 10px; padding: 0rem 0.6rem; width:fit-content;'>
                                " . $comments['FeedbackText'] . "
                            </span>
                        </p>
                    ");
                        }
                    }
                    ?>
                </div>
            </div>

            <div class="container bg-dark" style="border-radius: 15px;">
                <form action="" id="">
                    <div class="col-12 container pt-4 text-center">
                        <input type="text" name="newcomment" id="boxComment" placeholder="Comentar" class="w-75">
                        <button type="submit" value="Enviar" class="btn btn-success" id="SentComment">Enviar</button>
                    </div>
                </form>
                <br>
            </div>
            <br>
        </div>
    </div>

    <script>
        var objDiv = document.getElementById("contentComments");
        objDiv.scrollTop = objDiv.scrollHeight;
    </script>
    <!--Pie de pagina-->

    <footer class="footer bg-dark text-white">
        <div class="container">
            <div class="row pt-4">
                <div class="col-lg-6">
                    <h3>Información de contacto</h3>
                    <p>Dirección: <a href="http://maps.app.goo.gl/v3r6MxB9kTSFnpPY7" target="_blank"
                            rel="noopener noreferrer">Calle 12 Norte no. 102</a></p>
                    <p>Teléfono: <a href="tel:+522494225220">(249)-422-5220</a></p>
                    <p>Email: <a href="mailto:cbtis254.dir@dgeti.sems.gob.mx">cbtis254.dir@dgeti.sems.gob.mx</a></p>
                    <p>FB: <a href="https://www.facebook.com/CBTISNo254" target="_blank" rel="noopener noreferrer">
                            CBTIS N°254
                        </a></p>
                </div>
                <div class="col-lg-6">
                    <h3>Enlaces útiles</h3>
                    <ul class="list-unstyled">
                        <li><a href="about/">Acerca de</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center py-3">
            <p>&copy; 2023 ZONA_SH - ZbrySH. Todos los derechos reservados.</p>
        </div>
    </footer>
    <script src="../bootstrap-5.3.0-alpha3-dist/jquery-3.7.0.js"></script>
    <script src="../bootstrap-5.3.0-alpha3-dist/popper.js"></script>
    <script src="../bootstrap-5.3.0-alpha3-dist/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>