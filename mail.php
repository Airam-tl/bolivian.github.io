<?php
if($_SERVER['REQUEST_METHOD'] != 'POST' ){
    header("Location: reservaservicio.php" );
}

header('Content-Type: text/php; charset=utf-8');

use phpmailer\PHPMailer\PHPMailer;
use phpmailer\PHPMailer\Exception;

require './phpmailer/PHPMailer.php'; 
require './phpmailer/SMTP.php';


$to = "maria.limachi@ba.com.bo";                        
$subject = "RESERVA DE SERVICIO TECNICO";

if(!isset($_POST["nombre"]) || !isset($_POST["apellido"]) 
                            || !isset($_POST["placa"])
                            || !isset($_POST["kilometraje"])
                            || !isset($_POST["ciudad"])
                            || !isset($_POST["email"])
                            || !isset($_POST["phone"])
                            || !isset($_POST["marca"])
                            || !isset($_POST["modelo"])
                            || !isset($_POST["fecha"])
                            || !isset($_POST["hora"])
                            || !isset($_POST["taller"])){

                            echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br/>";
                            echo "Por favor, vuelva atrás y verifique la información ingresada<br/>";
                            die();
                            }

$contenido = "Detalles del formulario:\n\n";
$contenido = "Nombres: ".$_POST["nombre"]."\n";
$contenido .= "Apellidos: ".$_POST["apellido"]."\n";
$contenido .= "Placa: ".$_POST["placa"]."\n";  
$contenido .= "Kilometraje: ".$_POST["kilometraje"]."\n";
$contenido .= "Ciudad: ".$_POST["ciudad"]."\n";
$contenido .= "Correo: ".$_POST["email"]."\n";
$contenido .= "Celular: ".$_POST["phone"]."\n";
$contenido .= "Marca: ".$_POST["marca"]."\n";
$contenido .= "Modelo: ".$_POST["modelo"]."\n";
$contenido .= "Fecha: ".$_POST["fecha"]."\n";
$contenido .= "Hora: ".$_POST["hora"]."\n\n";
$contenido .= "Taller: ".$_POST["taller"]."\n\n";

$header = "MIME-Version: 1.0 \r\n";
$header = 'From: '.$_POST["email"]."\r\n".
            'Reply-To: '.$_POST["email"]."\r\n".
            'X-Mailer: PHP/' . phpversion();
$header .= "Mime-Version: 1.0\n";
$header .= "Content-Type: text/plain; charset=UTF-8\r\n";
//$header ="De:Envia\'semail";

if(@mail($to, $subject, $contenido, $header)){

echo "¡El formulario se ha enviado con éxito!";
}
else{
    echo "¡Email fallo al enviar!";
}
header("Location: reservaservicio.php" );
/*if(mail($to, $subject, $contenido ,$header)){
    echo "Formulario Enviado.";
    }*/

?>