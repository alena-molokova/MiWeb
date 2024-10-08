<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudio Innovación Visual</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
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
        <section class="section-first">
            <div class="container-xxl">
                <div class="row">
                    <div class="col-md-7">
                        <div>
                            <h1>Creamos sitios web que te ayudan
                                a vender
                                y atraer clientes potenciales</h1>
                            <p>Utilizamos un enfoque integral:
                                comenzamos con
                                la construcción de una estructura lógica
                                de páginas y terminamos con configuraciones técnicas y SEO avanzado</p>
                            <button class="custom-button" type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Discutir el proyecto</button>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div>
                            <p class="bold">Enfocados en la mejor opción</p>
                            <p>Creamos sitios web que desde el primer día de lanzamiento se
                                convierten en los favoritos de los motores de búsqueda</p>
                        </div>
                        <div>
                            <p class="bold">Nos sumergimos en tu negocio </p>
                            <p>Identificamos los objetivos y valores de tu audiencia, para
                                que tus clientes se sientan cómodos y comprendan la página desde el primer
                                momento</p>
                        </div>
                        <div style="margin-bottom: 0;">
                            <p class="bold">Experiencia en diversos sectores</p>
                            <p>Ofrecemos soluciones basadas en las necesidades específicas de tu
                                negocio</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="section-second">
            <div class="container-xxl">
                <div class="row">
                    <div class="col-md-5">
                        <div>
                            <div>
                                <p style="font-size: 48px; font-weight: bold;">300+</p>
                                <p>proyectos realizados</p>
                            </div>
                        </div>
                        <div class="numbers">
                            <div>
                                <p style="font-size: 48px; font-weight: bold;">5+</p>
                                <p style="width: 160px;">años en desarrollo de sitios web</p>
                            </div>
                            <div>
                                <p style="font-size: 48px; font-weight: bold;">100%</p>
                                <p style="width: 160px;">de soporte post-lanzamiento</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <h2><span style="color: #2C04FF;">Estudio Innovación
                                Visual</span> — un equipo de especialistas comprometidos con tu proyecto</h2>
                        <p>Nuestro estudio de diseño se especializa en la creación de sitios web en la plataforma Tilda.
                            Estamos enfocados en alcanzar los objetivos comerciales y aumentar la participación de los
                            clientes.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-third">
            <div class="container-xxl">
                <h2>El principio fundamental de nuestro trabajo es la colaboración</h2>
                <div class="row">
                    <div class="col-md-3">
                        <div class="col-3-text">
                            <h3>Celebración de contratos</h3>
                            <p>Trabajamos bajo contrato, valoramos su tiempo. Entregamos los proyectos en el plazo
                                acordado por escrito</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="col-3-text">
                            <h3>Asociación y responsabilidad</h3>
                            <p>Nos involucramos en cada proyecto más de lo esperado. Pensamos en cómo mejorar lo que ya
                                se ha logrado</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="col-3-text">
                            <h3>Inmersión total en el nicho</h3>
                            <p>Nos importa transmitir el valor al cliente. Analizamos el nicho y comunicamos los
                                significados a través del sitio web</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="col-3-text">
                            <h3>Atención a los detalles</h3>
                            <p>No pasamos por alto los detalles, trabajamos en todos los aspectos del proyecto.
                                Grabaremos un video con instrucciones para usted</p>
                        </div>
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

        <section class="section-fifth">
            <div class="container-xxl">
                <h2>Costo del desarrollo</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="tarjeta">
                            <p style="margin-bottom: 20px;">7-10 días</p>
                            <h3>Sitio web de una sola página</h3>
                            <p style="margin-bottom: 30px;">Página para la presentación de servicios o
                                venta de un producto</p>
                            <div class="precio">
                                <h3>desde U$D 400</h3>
                                <button class="custom-button-2" type="button" class="btn btn-primary"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">Discutir el proyecto</button>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tarjeta">
                            <p style="margin-bottom: 20px;">desde 30 días</p>
                            <h3>Sitio web corporativo</h3>
                            <p style="margin-bottom: 30px;">Compuesto por varias páginas y mejor
                                optimizado para los motores de búsqueda</p>
                            <div class="precio">
                                <h3>desde U$D 700</h3>
                                <button class="custom-button-2" type="button" class="btn btn-primary"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">Discutir el proyecto</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tarjeta">
                            <p style="margin-bottom: 20px;">desde 30 días</p>
                            <h3>Tienda en línea</h3>
                            <p style="margin-bottom: 30px;">Para la venta de productos con desarrollo
                                de catálogo, integración de carrito de compras y sistema de pago</p>
                            <div class="precio">
                                <h3>desde U$D 800</h3>
                                <button class="custom-button-2" type="button" class="btn btn-primary"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">Discutir el proyecto</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tarjeta">
                            <p style="margin-bottom: 20px;">hasta 10 días</p>
                            <h3>Solo diseño</h3>
                            <p style="margin-bottom: 30px;">Desarrollo del diseño según las
                                especificaciones técnicas y sus deseos</p>
                            <div class="precio">
                                <h3>desde U$D 250</h3>
                                <button class="custom-button-2" type="button" class="btn btn-primary"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">Discutir el proyecto</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-sixth">
            <div class="container-xxl">
                <h2>Opiniones de los clientes</h2>
                <div class="row flex-row">
                    <div class="col-md-4">
                        <div class="col-4-text">
                            <h3>Anastasia A.</h3>
                            <p class="mini">Clínica veterinaria MASVET</p>
                            <p>Estudio Innovación Visual transformó nuestra visión en realidad. El equipo es altamente
                                profesional y siempre estuvo disponible para responder a nuestras preguntas. El
                                resultado final fue un sitio web moderno y funcional que refleja perfectamente nuestra
                                marca.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="col-4-text">
                            <h3>Maksim G.</h3>
                            <p class="mini">Fábrica Metalinvest</p>
                            <p>Estoy muy contenta con el sitio web que Estudio Innovación Visual desarrolló para nuestra
                                empresa. No solo es estéticamente atractivo, sino que también es muy fácil de navegar.
                                ¡Gracias por un trabajo excelente!</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="col-4-text">
                            <h3>Andrés R.</h3>
                            <p class="mini">Agencia de análisis Smyslografia</p>
                            <p>Trabajar con Estudio Innovación Visual fue una experiencia increíble. Desde el primer
                                día, entendieron nuestras necesidades y crearon un sitio web que ha superado todas
                                nuestras expectativas. ¡Muy recomendable!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-seventh">
            <div class="container-xxl">
                <h2>Preguntas Frecuentes (FAQ)</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <h3>¿De qué depende el costo del proyecto?</h3>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Para la venta de productos con desarrollo de catálogo, integración de carrito de
                                        compras y sistema de pago
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <h3>¿Aceptan proyectos urgentes?</h3>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A veces aceptamos, depende de la carga de trabajo y la precisión en la
                                        definición de la tarea. En la mayoría de los casos, los proyectos urgentes no
                                        tienen una especificación técnica clara. Trabajar sin una comprensión clara del
                                        resultado final no es fácil, ni para los especialistas ni para la parte
                                        contratante.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <h3>He lanzado el sitio web, ¿cuándo esperar ventas?</h3>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        TSimplemente lanzar el sitio web no es suficiente. Es como imprimir folletos
                                        publicitarios y guardarlos en un cajón. Son importantes sus acciones y la
                                        cantidad de visitas a las páginas. Damos recomendaciones después del
                                        lanzamiento.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        <h3>¿Es posible trabajar sin contrato?</h3>
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        No, con él fijamos nuestros acuerdos. Especificamos todos los detalles. El
                                        contrato es una garantía del cumplimiento de las obligaciones de ambas partes.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tarjeta" style="padding: 30px;">
                            <h3>¿Necesitas ayuda?</h3>
                            <p>¿No sabes qué tipo de sitio web te conviene o simplemente tienes preguntas? Contáctanos
                                de la
                                manera que te sea más conveniente y lo discutiremos todo.</p>
                            <div class="contactos">
                                <button class="custom-button-2" type="button" class="btn btn-primary"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">Contacta con nosotros</button>
                                <div class="social-icons" style="margin: 0;">
                                    <a href="https://t.me/AlenaWebDesigner" target="_blank" class="social-icon">
                                        <img src="static/images/social (1).svg" alt="telegram">
                                    </a>
                                    <a href="https://wa.me/+5491127649049" target="_blank" class="social-icon">
                                        <img src="static/images/social (2).svg" alt="whatsapp">
                                    </a>
                                </div>
                            </div>
                        </div>

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