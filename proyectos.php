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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="padding: 10px; background-color: #f3f3f3;">
                <div class="modal-header" style="margin: 15px 0;">
                    <h3 class="modal-title" id="exampleModalLabel">Deje sus datos de contacto y nos pondremos en
                        contacto con usted en breve</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="popupForm">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="3" required></textarea>
                        </div>
                        <div class="text-center" style="margin: 20px;">
                            <button type="submit" class="btn btn-primary">Enviar solicitud</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('header.php'); ?>

    <main>
        <section class="section-1">
            <div class="container-xxl">
                <div class="row">
                    <div class="col-md-7">
                        <div>
                            <h1>Conozca nuestros mejores trabajos</h1>
                            <p>Creamos una herramienta no solo visualmente atractiva, sino
                                también efectiva, cuidadosamente elaborada en cada paso, desde la estructura hasta la
                                maquetación. Durante el proceso, coordinamos cada etapa contigo y avanzamos juntos.
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

        <section class="section-four">
            <div class="container-xxl">
                <h2>Proyectos realizados</h2>
                <div class="row">
                    <div class="col-md-5">
                        <div>
                            <h3>Sitio web para la clínica veterinaria MASVET</h3>
                            <p>El objetivo del proyecto era crear un sitio web cómodo e informativo en tres idiomas
                                (inglés, indonesio y ruso) para atraer a los clientes de la clínica veterinaria en Bali
                            </p>
                            <a href="proyect-1.html" class="custom-button">Ver el caso</a>
                        </div>
                        <div class="tabs-grup">
                            <p class="tabs">Análisis del PO</p>
                            <p class="tabs">Diseño de maquetas</p>
                            <p class="tabs">Maquetación en Tilda</p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <img src="static/images/Rectangle 1.jpg" alt="mi-project1">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div>
                            <h3>Sitio web para una empresa que fabrica productos metálicos</h3>
                            <p>El objetivo del proyecto era crear un diseño moderno: bastante conciso, que apoyara la
                                temática del sector de la organización y que resaltara su seriedad
                            </p>
                            <a href="proyect-1.html" class="custom-button">Ver el caso</a>
                        </div>
                        <div class="tabs-grup">
                            <p class="tabs">Análisis del PO</p>
                            <p class="tabs">Diseño de maquetas</p>
                            <p class="tabs">Maquetación en Tilda</p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <img src="static/images/Rectangle 2.jpg" alt="mi-project1">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div>
                            <h3>Sitio web de una empresa que ofrece servicios de información y análisis</h3>
                            <p>El objetivo del proyecto era crear un diseño moderno y desarrollar el contenido del sitio
                                web que comunique todas las ventajas de los productos de la empresa
                            </p>
                            <a href="proyect-1.html" class="custom-button">Ver el caso</a>
                        </div>
                        <div class="tabs-grup">
                            <p class="tabs">Análisis del PO</p>
                            <p class="tabs">Diseño de maquetas</p>
                            <p class="tabs">Maquetación en Tilda</p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <img src="static/images/Rectangle 3.jpg" alt="mi-project1">
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include_once('footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>