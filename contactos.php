<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudio Innovación Visual</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="static/styles/style.css">
    <link rel="stylesheet" href="static/styles/navbar.css">
    <link rel="stylesheet" href="static/styles/footer.css">

</head>

<body>
    <?php include_once('header.php'); ?>

    <main>
        <section class="section">
            <div class="container-xxl">
                <div class="row">
                    <div class="col-md-8">
                        <div>
                            <h1>¡Bienvenidos a Estudio Innovación Visual !</h1>
                            <p>Nos complace darles la bienvenida a nuestro espacio
                                creativo. Nuestro equipo está listo para hacer realidad sus ideas con un diseño único и
                                soluciones innovadoras. No duden en contactarnos con cualquier pregunta o idea: estamos
                                aquí para ayudarles a alcanzar sus objetivos и crear algo verdaderamente excepcional.
                            </p>
                            <button class="custom-button" type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Discutir el proyecto</button>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img class="w-100" src="static/images/img.svg" alt="img">
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container-xxl">
                <div class="row justify-content-between">
                    <div class="col-md-4">
                        <p>Pres. José Evaristo Uriburu 1261, C1114 AAI, Cdad. Autónoma de Buenos Aires</p>
                    </div>
                    <div class="col-md-3">
                        <a href="mailto: alena.molokova@davinci.edu.ar"
                            target="_blank">alena.molokova@davinci.edu.ar</a>
                    </div>
                    <div class="col-md-3">
                        <a href="https://wa.me/+5491127649049" target="_blank">WhatsApp</a>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-md-4">
                        <p>Lunes a Viernes: 10:00 - 16:00</p>
                        <p>Sábado - Domingo: Días de descanso</p>
                    </div>
                    <div class="col-md-3">
                        <a href="tel:+5491127649049" target="_blank">+5491127649049</a>
                    </div>
                    <div class="col-md-3">
                        <a href="https://t.me/AlenaWebDesigner" target="_blank">Telegram</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container-xxl">
                <img class="w-100" src="static/images/mapa.jpg" alt="mapa">
            </div>
        </section>
    </main>

    <?php include_once('footer.php'); ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>