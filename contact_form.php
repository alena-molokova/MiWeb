<?php

session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de recogida de contactos</title>
</head>
<body>
    <h2>Форма сбора контактов</h2>
    <form action="process_form.php" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="email">Correo electronico:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="image">Imagen:</label>
        <input type="file" id="image" name="image" accept="image/*" required><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
