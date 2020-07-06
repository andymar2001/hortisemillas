﻿<?php
$emailTo = "andymarrey30@gmail.com";
$emailFrom = "andymarrey30@gmail.com";

$subject = "FORMULARIO DE CONTACTO - HORTISEMILLAS";
if (isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['empresa']) && isset($_POST['mensaje'])) {
    $nombre = strip_tags($_POST['nombre']);
    $correo = strip_tags($_POST['correo']);
    $empresa = strip_tags($_POST['empresa']);
    $mensaje = strip_tags($_POST['mensaje']);
}

$body = "Nombres y Apellidos: " . $nombre . "\n";
$body .= "Correo: " . $correo . "\n";
$body .= "Empresa: " . $empresa . "\n";
$body .= "Mensaje: " . $mensaje . "\n";

$headers = "From: " . $emailFrom . " <" . $correo . ">\r\n";
$headers .= "Reply-To: " . $correo . " <" . $correo . ">\r\n";

$envio = mail($emailTo, $subject, $body, $headers);



if ($envio) {

    $miresultado = '<figure class="imagen__confirmacion" id="">

    <svg class="svg-inline--fa fa-check-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>

                    </figure>

                    <h4>El correo ha sido enviado! Gracias por ponerse en contacto con nosotros.</h4>

                    <a href="index.php" class="button__cancelar">Regresar a inicio</a>';
} else {

    $miresultado = '<figure class="imagen__confirmacion" id="">

                        <i class="fas fa-times"></i>

                    </figure>

                    <h4>No se envió el correo. Por favor trate de comunicarse por otro medio.</h4>

                    <a href="index.php" class="button__cancelar">Regresar a inicio</a>';
}

echo $miresultado;
