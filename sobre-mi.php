<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pg = "sobre-mi";
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mi</title>
    <!--INCLUSION DE LINK-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
</head>
<!--COL-SM: ES PARA TABLETS EN ADELANTE -->
<!--CUANDO NO ESPECIFICO CUANTAS COLUMNAS: SE ESPECIFICA EL PORCENTAJE-->
<!--etiqueta HR : ES PARA SEPARAR UN ESPACIO-->
<!--"SM" ES PARA TABLET EN ADELANTE-->

<body>
    <div class="container">
        <!--puede que enves de "md" seria "lg"-->
        <nav class="navbar navbar-expand-md">
        <?php
        include_once("menu.php");
        ?>
        </nav>

        <section id="sobre-mi">
	<div class="row mt-5">
		<div class="col-sm-7 col-12">
            <h1>Sobre mí</h1>
            <h2>Desarrollador Web FullStack. Estudiante de sistemas de información, apasionado por la tecnologia.</h2>
            <a href="" class="btn my-4" target="_blank">Descargar CV</a>
		</div>
        <div class="col-sm-3 col-9 mx-5">
            <img src="images/obvioooo1.jpeg" alt="Jesus Chejo" title="Jesus Chejo" class="img-fluid img-circle">
        </div>
	</div>
    <div class="row my-sm-4 my-3">
        <div class="col-sm-6 col-12 px-2 my-2">
            <div class="bg-white">
                <div class="p-3"><i class="fas fa-code"></i></div>
                <div class="row px-3">
                    <div class="col-12">
                        <h3>PROGRAMACIÓN</h3>
                    </div>
                </div>
                <div class="row p-3">
                    <div class="col-12">
                        <p>HTML, CSS, Bootstrap, PHP, POO, MVC, Framework Laravel, Javascript, jQuery, React.js, AJAX, REST API, WSDL, JSON, C, C++, ASP.NET, C#.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-12 px-2 my-2">
            <div class="bg-white">
                <div class="p-3"><i class="fas fa-database"></i></div>
                <div class="row px-3">
                    <div class="col-12">
                        <h3>BASE DE DATOS</h3>
                    </div>
                </div>
                <div class="row p-3">
                    <div class="col-12">
                        <p>MySQL/MariaDB, SQL Server, PostgreSQL, MySQL Workbench, Heidi SQL.</p>
                    </div>
                </div>
            </div>
        </div><div class="col-sm-6 col-12 px-2 my-2">
            <div class="bg-white">
                <div class="p-3"><i class="fas fa-server"></i></div>
                <div class="row px-3">
                    <div class="col-12">
                        <h3>SERVIDORES</h3>
                    </div>
                </div>
                <div class="row p-3">
                    <div class="col-12">
                        <p>HTTP Apache, XAMPP, migraciones y upgrades.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-12 px-2 my-2">
            <div class="bg-white">
                <div class="p-3"><i class="fas fa-language"></i></div>
                <div class="row px-3">
                    <div class="col-12">
                        <h3>IDIOMAS</h3>
                    </div>
                </div>
                <div class="row p-3">
                    <div class="col-12">
                        <p>INGLES - Basico<br>ESPAÑOL - Nativo</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-12 px-2 my-2">
            <div class="bg-white">
                <div class="p-3"><i class="fas fa-window-restore"></i></div>
                <div class="row px-3">
                    <div class="col-12">
                        <h3>SOFTWARE</h3>
                    </div>
                </div>
                <div class="row p-3">
                    <div class="col-12">
                        <p>GIT, GitHub, Visual Code, Sublime, WinSCP/Filezilla, Adobe Illustrator, MS Office, Google Docs. Trello. MS Windows.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-12 px-2 my-2">
            <div class="bg-white">
                <div class="p-3"><i class="fas fa-puzzle-piece"></i></div>
                <div class="row px-3">
                    <div class="col-12">
                        <h3>HOBBIES</h3>
                    </div>
                </div>
                <div class="row p-3">
                    <div class="col-12">
                        <p>Futbol</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>

        </div>

        <section id="experiencia">
        <div class="container py-sm-5 py-4">
        <div class="row">
            <div class="col-12 py-4">
                <h2>Cursos de programación</h2>
            </div>
        </div>
    
        <div class="row py-2">
            <div class="col-12 col-sm-2">
                <h3>Aug.2019-Nov.2019</h3>
            </div>
            <div class="col-12 col-sm-2">
                <img src="images/ape.png" class="img-resposive py-3 py-sm-0" width="70" alt="Buenos Aires Ciudad" title="Golshy">
            </div>
            <div class="col-12 col-sm-8">
                <h4>Aprende programando. Desarrollo web nivel 3 backend.Aprendí los comandos para gestionar desde la terminal de windows, realicé un proyecto de alta, baja y modificación con HTML, CSS, Bootstrap, Node.js, Jquery, JSON, API Rest.</h4>
            </div>
        </div><div class="row py-2">
            <div class="col-12 col-sm-2">
                <h3>Apr.2018-Jul.2018</h3>
            </div>
            <div class="col-12 col-sm-2">
                <img src="images/ape.png" class="img-resposive py-3 py-sm-0" width="70" alt="Golshy" title="Golshy">
            </div>
            <div class="col-12 col-sm-8">
                <h4>Aprende programando. Desarrollo web nivel 2 frontend. Practiqué ejercicios de programación en lenguaje javascript y realicé un proyecto web basico, con HTML, CSS y Javascript. </h4>
            </div>
        </div>
    </div>
</section>
        <footer>
        <?php
        include_once("footer.php");
        ?> 
        </footer>
</body>
</html>