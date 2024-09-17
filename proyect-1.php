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
        <section class="section-2">
            <div class="container-xxl">
                <div class="row">
                    <div class="col-md-8">
                        <h1>Sitio web para la clínica veterinaria MASVET</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <p>El objetivo del proyecto era crear un sitio web cómodo e informativo en tres idiomas
                            (inglés, indonesio y ruso) para atraer a los clientes de la clínica veterinaria en Bali.
                            Uno de los requisitos del cliente era desarrollar un sitio web que destacara el
                            profesionalismo por un lado y expresara un amor hacia los animales, similar al que se
                            tiene por los niños, por el otro.</p>
                    </div>
                    <div class="col-md-3">
                        <a href="https://masvetbali.com/" class="custom-button" target="_blank">Ir al sitio web</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-3">
            <div class="container-xxl center-img-container">
                <img src="static/images/mockup.svg" alt="mockup">
            </div>
        </section>
               
        <section class="section-4">
            <div class="container-xxl">
                <h2>Fases del trabajo en el proyecto</h2>
                <ol class="numbered-list">
                    <li>Realicé una reunión con el cliente para aclarar los detalles del negocio y identificar las
                        ventajas para diferenciarse de la competencia</li>
                    <li>Estudié la audiencia objetivo para comprender sus necesidades y deseos, incluyendo el
                        monitoreo de foros temáticos y reseñas sobre clínicas veterinarias</li>
                    <li>Analicé a los competidores para identificar sus fortalezas y debilidades.</li>
                    <li>Con base en los datos recopilados, desarrollé la estructura del sitio web y de cada página.
                    </li>
                    <li>Creé un prototipo del sitio web y obtuve la aprobación del cliente para el mismo y para el
                        estilo del proyecto</li>
                    <li>Diseñé el layout del sitio web.</li>
                    <li>Después de la aprobación del cliente, el sitio web se trasladó a la plataforma Tilda en tres
                        idiomas, y todas las secciones se llenaron con la información proporcionada por el cliente.
                    </li>
                    <li>Conecté todos los formularios necesarios, el dominio, el certificado SSL seguro y realicé la
                        optimización inicial para los motores de búsqueda (SEO).</li>
                </ol>
            </div>
        </section>

        <section class="section-5">
            <img src="static/images/img1.svg" alt="proyecto">
        </section>

        <section class="section-6">
            <div class="container-xxl center-img-container">
                <img src="static/images/img2.svg" alt="mobile">
            </div>
        </section>

    </main>

    <?php include_once('footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>