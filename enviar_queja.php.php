<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];

    // Dirección de correo electrónico a la que quieres enviar el mensaje
    $destinatario = "josedavinchi123456@gmail.com";

    // Asunto del correo electrónico
    $asunto = "Nuevo mensaje de formulario de contacto";

    // Construir el cuerpo del correo electrónico
    $cuerpo = "Nombre: $nombre\n";
    $cuerpo .= "Email: $email\n\n";
    $cuerpo .= "Mensaje:\n$mensaje";

    // Enviar el correo electrónico
    mail($destinatario, $asunto, $cuerpo);

    // Redirigir de vuelta al formulario después de enviar el correo
    header("Location: formulario_contacto.html");
} else {
    // Si alguien intenta acceder directamente a este script, simplemente redirigirlos
    header("Location: formulario_contacto.html");
}
?>
