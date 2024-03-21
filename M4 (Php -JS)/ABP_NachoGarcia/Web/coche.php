<?php
if(isset($_GET['id'])) {
    $coche_id = $_GET['id'];
} 
?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Monlau Motors - Inicio</title>
        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
        <link rel="stylesheet" href="Principal.css">
        <link rel="icon" type="image/jpg" href="logo.png" />

    </head>

    <body>
        <nav id="mainNav" style="width: 100%;">
            <ul>
                <li><a href="principal.php"><img src="image.png" alt="Principal" style="width: 110px; height: 35px;"></a>
                </li>
                <li><a href="sobre.php">Sobre nosotros</a></li>
                <li><a class="activonav" href="catalogo.php">Vehículos</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li>
                    <a class="instagram" href="https://www.instagram.com/monlau_motul/"><img src="instagram.png"
                            alt="INSTAGRAM" style="height: 30px;"></a>
                    <a class="facebook" href="https://www.facebook.com/monlau_motul/"><img src="facebook.png" alt="facebook"
                            style="height: 30px;"></a>
                </li>
            </ul>
        </nav>

        <main>
            <section class="destacados cochePag" id="destacados">
                <?php
                    require("connection.php");
                    $vehiculo = $con->query("SELECT * FROM vehiculos WHERE id = $coche_id");
                    while ($row = $vehiculo->fetch_assoc()){
                ?>

                <h2><?php echo $row['marca']; echo ' '; echo $row['modelo']; echo ' '; echo $row['anyo']; ?></h2>
                <div class="slideshow-container-cochesPag">
                    <div class="slide">
                        <img class="imagencochesPag" src="<?php echo $row['foto_delantera']; ?>" alt="Slide 1">
                    </div>
                    <div class="slide">
                        <img class="imagencochesPag" src="<?php echo $row['foto_trasera']; ?>" alt="Slide 2">
                    </div>
                    <div class="slide">
                        <img class="imagencochesPag" src="<?php echo $row['foto_interior']; ?>" alt="Slide 2">
                    </div>
                    <div class="slide">
                        <img class="imagencochesPag" src="<?php echo $row['foto_lateral']; ?>" alt="Slide 2">
                    </div>
                    <div class="slide">
                        <img class="imagencochesPag" src="<?php echo $row['foto_lateral2']; ?>" alt="Slide 2">
                    </div>
                    <button class="prev" onclick="moveSlide(-1)"><</button>
                    <button class="next" onclick="moveSlide(1)">></button>
                </div>
                <div class="caracteristicasCochePag">
                    <p>Kilómetros: <span><?php echo $row['kilometros']; ?> km</span></p>
                    <p>Combustible: <span><?php echo $row['combustible']; ?></span></p>
                    <p>Transmisión: <span><?php echo $row['transmision']; ?></span></p>
                    <p>Potencia: <span><?php echo $row['potencia']; ?> cv</span></p>
                    <p>Tipo de carrocería: <span><?php echo $row['tipo']; ?></span></p>
                    <p>Precio: <span><?php echo $row['precioVenta']; ?> €</span></p>

                    <button class="botoncontactoCoche" type="submit" onclick="location.href='contacto.php'">
                        <p>Contactar</p>
                    </button>
                </div>

                <script src="script.js"></script>
            </section>
            <?php } ?>


            <script>
                document.getElementById("mainNav").style.backgroundColor = "rgba(55, 55, 55, 1)";
                document.getElementById("mainNav").style.color = "black";
            </script>
        </main>
    </body>
</html>



