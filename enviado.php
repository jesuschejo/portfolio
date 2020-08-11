<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pg = "inicio"
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
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

<body>
<div id="home" class="container-fluid">

<div class="container">
   <nav class="navbar navbar-expand-sm">
   <?php
   include_once "menu.php";
   ?>
   </nav>
</div>

<div class="container">
<section id="hola">
	<div class="row py-5">
	    <div class="col-10">
            <h1> Recibimos tu consulta <br>te respondemos a la brevedad</h1>
           </div>
        </div>
       
</section>
</div>
</div>
        <footer>
        <?php
        include_once "footer.php";
        ?>
        </footer>
</body>
</html>