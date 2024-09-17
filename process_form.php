<?php

session_start();

// Comprobando que todos los campos obligatorios han sido enviados
if (isset($_POST['nombre'], $_POST['email'], $_FILES['image'])) {
    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $image = $_FILES['image'];

    // Comprobando que los campos no están vacíos y que la imagen ha sido cargada
    if (!empty($nombre) && !empty($email) && !empty($image['name'])) {
        
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $upload_dir = 'uploads/';
            $upload_file = $upload_dir . basename($image['name']);
            $image_type = strtolower(pathinfo($upload_file, PATHINFO_EXTENSION));

            $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];

            if (in_array($image_type, $allowed_types)) {
                if (move_uploaded_file($image['tmp_name'], $upload_file)) {
                    $_SESSION['nombre'] = $nombre;
                    $_SESSION['email'] = $email;
                    $_SESSION['image'] = $upload_file;

                    header('Location: welcome.php');
                    exit();
                } else {
                    echo "Error al cargar la imagen.";
                }
            } else {
                echo "Formato de imagen no válido. Sólo se permiten JPG, JPEG, PNG, GIF.";
            }
        } else {
            echo "Dirección de correo electrónico no válida.";
        }
    } else {
        echo "Todos los campos son obligatorios.";
    }
} else {
    echo "Los datos no fueron enviados.";
}
?>
