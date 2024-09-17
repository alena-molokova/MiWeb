<!-- header.php -->

<?php include_once('contact_form.php'); ?>

<div class="container-xxl">
    <div class="row">
        <div class="navbar-custom">
            <a href="index.php"><img src="static/images/logo.svg" alt="Estudio Innovación Visual"></a>
            <div class="drop">
                <button class="nav-btn">&#9776;</button>
                <div class="nav-list">
                    <?php
                        
                        $menu_items = [
                            "Proyectos" => "proyectos.php",
                            "Nosotros" => "nosotros.php",
                            "Contactos" => "contactos.php"
                        ];
                        
                        foreach ($menu_items as $name => $link) {
                            echo "<a href='$link'>$name</a>";
                        }
                    ?>
                </div>
            </div>
            <button class="custom-button" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Discutir el proyecto</button>
        </div>
    </div>
</div>
