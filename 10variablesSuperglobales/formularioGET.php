<?php
?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
            <meta charset="UTF-8">
            <title>Formulario via GET</title>
    </head>
    <body>
        <h1>Formulario via GET</h1>
    <form method="get" action="variablesGET.php">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos">
        <input type="submit" value="enviar">
    </form>
    </body>
</html>
