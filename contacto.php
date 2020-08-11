<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 
$pg = "contacto";

include_once ("PHPMailer/src/PHPMailer.php");
include_once ("PHPMailer/src/SMTP.php");

$msg="";
//Definicion
function guardarCorreo($correo){
    $archivo = fopen("mails.txt","a+");
    fwrite($archivo, $correo."\n");//En linux 
    fclose($archivo);
}

if($_POST){ /* es postback */
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $asunto = $_POST["txtAsunto"];
    $mensaje = $_POST["txtMensaje"];

    guardarCorreo($correo);
    //guardarCorreo()

    if($nombre != "" && $correo != ""){
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "mail.dominio.com"; // SMTP a utilizar
        $mail->Username = "chejojesus@gmail.com"; // Correo completo a utilizar
        $mail->Password = "aqui va la clave de tu correo";
        $mail->Port = 25;
        $mail->From = "info@dominio.com.ar"; //Desde la cuenta donde enviamos
        $mail->FromName = "Tu nombre a mostrar";
        $mail->IsHTML(true);
        $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );

        //Destinatarios
        $mail->addAddress($correo);
        $mail->addBCC("otrocorreo@gmail.com"); //Copia oculta
        $mail->Subject = utf8_decode("Contacto página Web");
        $mail->Body = "Recibimos tu consulta, te responderemos a la brevedad.";
        if(!$mail->Send()){
            $msg = "Error al enviar el correo, intente nuevamente mas tarde.";
        }
        $mail->ClearAllRecipients(); //Borra los destinatarios

        //Envía ahora un correo a nosotros con los datos de la persona
        $mail->addAddress("info@dominio.com.ar");
        $mail->Subject = utf8_decode("Recibiste un mensaje desde tu página Web");
        $mail->Body = "Te escribio $nombre cuyo correo es $correo, con el asunto $asunto y el siguiente mensaje:<br><br>$mensaje";
       
        if($mail->Send()){ /* Si fue enviado correctamente redirecciona */
            header('Location: confirmacion-envio.php');
        } else {
            $msg = "Error al enviar el correo, intente nuevamente mas tarde.";
        }    
    } else {
        $msg = "Complete todos los campos";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
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

        <section id="contacto">
            <div class="row py-sm-5 py-3"><!--agrega un paddind en el eje y-->
                <div class="col-12">
                    <h1>¡Trabajemos juntos!</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <h2>Para más detalles sobre mi
                        trabajo podés ver mi <span><a href="https://www.linkedin.com"></a> </span> Linkedin,<br>
                        descargar mi CV o mandarme<br>
                        un mensaje.
                    </h2>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-10">
                <form action="" method="POST">
                <div class="row">
                    <div class="col-sm-6 col-12 form-group">
                            <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="NOMBRE" value="">
                    </div>
                    <div class="col-sm-6 col-12 form-group">
                            <input type="email" id="txtCorreo" name="txtCorreo" class="form-control" placeholder="CORREO" value="">
                    </div>
                    <div class="col-12 form-group">
                            <input type="text" class="form-control" id="txtAsunto" name="txtAsunto" placeholder="ASUNTO">
                    </div>
                    <div class="col-12 form-group">
                            <textarea name="txtMensaje" id="txtMensaje" rows="7" class="form-control" placeholder="MENSAJE" required></textarea>
                    </div>
                </div>
                <div class="row">
                     <div class="col-12 text-center">
                        <input type="submit" name="btnEnviar" value="ENVIAR" class="btn">
                    </div>
                </div>
               </form>
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