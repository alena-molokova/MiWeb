<?php
session_start();

if (isset($_SESSION['nombre'], $_SESSION['image'])) {
    $nombre = $_SESSION['nombre'];
    $image = $_SESSION['image'];
} else {
    header('Location: contact_form.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gracias</title>
</head>
<body>
    <h1> <?php echo htmlspecialchars($nombre); ?>!</h1>
    <p>Gracias por enviar tus datos de contacto!</p>
    
    <h2>Tu image:</h2>
    <img src="<?php echo htmlspecialchars($image); ?>" alt="Image" style="max-width: 300px;">
</body>
</html>
