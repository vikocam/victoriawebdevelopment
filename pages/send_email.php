<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $nombre = $_POST["name"];
    $email = $_POST["email"];
    $company = $_POST["company"];
    $mensaje = $_POST["message"];

    // Configurar los detalles del correo
    $destinatario = "victoriagecam@gmail.com";
    $asunto = "Nuevo mensaje del formulario de contacto";
    $cuerpo = "Nombre: " . $nombre . "\n";
    $cuerpo .= "Email: " . $email . "\n";
    $cuerpo .= "Company: " . $company . "\n";
    $cuerpo .= "Mensaje: " . $mensaje;

    // Enviar el correo
    if (mail($destinatario, $asunto, $cuerpo)) {
        echo "El mensaje ha sido enviado correctamente.";
    } else {
        echo "Ha ocurrido un error al enviar el mensaje.";
    }
}
?>