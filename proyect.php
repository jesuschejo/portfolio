<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pg = "proyectos"
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <!--INCLUSION DE LINK-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
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

        <section id="proyecto">
            <div class="row mt-5">
                <div class="col-12">
                    <h1>Mis proyectos</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h2>Estos son algunos de los trabajos que he realizado:</h2>
                </div>
            </div>
        </section>

        <section>
        
        <div class="row my-sm-4 my-3">
        <div class=" item col-sm-6 col-12 px-2 my-2" id="item2">
            <div class="bg-white">
            <img src="images/abmclientes.png" alt="ABM Ventas" class="img-fluid">
                <div class="row p-3">
                        <div class="col-12">
                            <h4>ABM Clientes</h4>
                        </div>
                </div>
                <div class="row px-3">
                    <div class="col-12">
                    <p> Alta, Baja, modificación de un registro de clientes empleando:. Realizado en HTML, CSS, PHP, Bootstrap y Json. </p>
                    </div>
                </div>
                <div class="row p-3">
                <div class="col-6">
                   <a href="" class="btn" target="_blank">Ver online</a>
                </div>
                <div class="col-6 text-right">
                     <a href="https://github.com/jesuschejo/abmcliente" target="_blank">Código fuente</a>
                </div>
                </div>
            </div>
        </div>

        <div class="item col-sm-6 col-12 px-2 my-2" id="item2">
            <div class="bg-white">
            <img src="images/abmventas.png" alt="ABM Ventas" class="img-fluid">
                <div class="row p-3">
                        <div class="col-12">
                            <h4>Sistema de Gestión de ventas</h4>
                        </div>
                </div>
                <div class="row px-3">
                    <div class="col-12">
                    <p> Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos. </p>
                    </div>
                </div>
                <div class="row p-3">
                <div class="col-6">
                   <a href="" class="btn" target="_blank">Ver online</a>
                </div>
                <div class="col-6 text-right">
                     <a href="https://github.com/depcsuite/abmventas" target="_blank">Código fuente</a>
                </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-12 px-2 my-2">
            <div class="bg-white">
            <img src="images/sistema-admin.png" alt="ABM Ventas" class="img-fluid">
                <div class="row p-3">
                        <div class="col-12">
                            <h4>Proyecto integrador</h4>
                        </div>
                </div>
                <div class="row px-3">
                    <div class="col-12">
                    <p> Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines. </p>
                    </div>
                </div>
                <div class="row p-3">
                <div class="col-6">
                   <a href="" class="btn" target="_blank">Ver online</a>
                </div>
                <div class="col-6 text-right">
                     <a href="https://github.com/depcsuite/abmventas" target="_blank">Código fuente</a>
                </div>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-12 px-2 my-2">
            <div class="bg-white">
            <img src="images/ok.png" alt="ABM Ventas" class="img-fluid">
                <div class="row p-3">
                        <div class="col-12">
                            <h4>ABM Peliculas</h4>
                        </div>
                </div>
                <div class="row px-3">
                    <div class="col-12">
                    <p> Alta, Baja, modificación de un registro de Peliculas empleando:. Realizado en HTML, CSS, PHP, Bootstrap, Json, jQuery, Ajax. </p>
                    </div>
                </div>
                <div class="row p-3">
                <div class="col-6">
                   <a href="" class="btn" target="_blank">Ver online</a>
                </div>
                <div class="col-6 text-right">
                     <a href="https://github.com/depcsuite/abmventas" target="_blank">Código fuente</a>
                </div>
                </div>
            </div>
        </div>
       
       </div>
        </section>
        
        </div>
        <br>
        <footer>
        <?php
        include_once("footer.php");
        ?> 
</footer>
</body>
</html>