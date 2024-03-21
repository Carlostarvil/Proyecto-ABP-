<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monlau Motors - Contacto</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="Principal.css">
    <link rel="icon" type="image/jpg" href="logo.png" />

</head>

<body>
    <header>
        <div class="fondo_fotoContacto">
            <div class="fondo_color">
                <div class="tituloContacto">
                    <h1>Contacto</h1>
                </div>
            </div>
        </div>
    </header>
    <nav id="mainNav" style="width: 100%;">
        <ul>
            <li><a href="principal.php"><img src="image.png" alt="Principal" style="width: 110px; height: 35px;"></a>
            </li>
            <li><a href="sobre.php">Sobre nosotros</a></li>
            <li><a href="catalogo.php">Vehículos</a></li>
            <li><a class="activonav" href="contacto.php">Contacto</a></li>
            <li>
                <a class="instagram" href="https://www.instagram.com/monlau_motul/"><img src="instagram.png"
                        alt="INSTAGRAM" style="height: 30px;"></a>
                <a class="facebook" href="https://www.facebook.com/monlau_motul/"><img src="facebook.png" alt="facebook"
                        style="height: 30px;"></a>
            </li>
        </ul>
    </nav>

    <section class="destacados">
        <br>
        <h2>Formulario de Contacto</h2>
        <div class="contact_form">

            <div class="formulario">
                <h3 class="formularioh3">Escríbenos y en breve nos pondremos en contacto contigo</h3>
            <div>
                <form id="miFormulario" action="" method="POST">
                    <p>
                        <label for="nombre" class="colocar_nombre">Nombre
                            <span class="obligatorio">*</span>
                        </label>
                        <input type="text" name="introducir_nombre" id="nombre" required="obligatorio"
                            placeholder="Escribe tu nombre">
                    </p>

                    <p>
                        <label for="email" class="colocar_email">Email
                            <span class="obligatorio">*</span>
                        </label>
                        <input type="email" name="introducir_email" id="email" required="obligatorio"
                            placeholder="Escribe tu Email">
                    </p>

                    <p>
                        <label for="telefone" class="colocar_telefono">Teléfono
                        </label>
                        <input type="tel" name="introducir_telefono" id="telefono" placeholder="Escribe tu teléfono">
                    </p>

                    <p>
                        <label for="asunto" class="colocar_asunto">Asunto
                            <span class="obligatorio">*</span>
                        </label>
                        <input type="text" name="introducir_asunto" id="assunto" required="obligatorio"
                            placeholder="Escribe un asunto">
                    </p>

                    <p>
                        <label for="mensaje" class="colocar_mensaje">Mensaje
                            <span class="obligatorio">*</span>
                        </label>
                        <textarea name="introducir_mensaje" class="texto_mensaje" id="mensaje" required="obligatorio"
                            placeholder="Deja aquí tu mensaje..."></textarea>
                    </p>
                    <p class="aviso">
                        Los campos<span class="obligatorio"> * </span>son obligatorios.
                    </p>
                    <button class="botoncontacto" type="submit" name="enviar_formulario" id="enviar">
                        <p>Enviar</p>
                    </button>
                </form>
            </div>
            </div>
        </div>

        <?php if(isset($_POST['enviar_formulario'])){
            require("connection.php");
            $nombre = $_POST['introducir_nombre'];
            $email = $_POST['introducir_email'];
            $telefono = $_POST['introducir_telefono'];
            $asunto = $_POST['introducir_asunto'];
            $mensaje = $_POST['introducir_mensaje'];
            $insertar = $con->query("INSERT INTO formcontacto (nombre,email,telefono,asunto,mensaje) VALUES ('$nombre','$email','$telefono','$asunto','$mensaje')");
            if($insertar){?>
                <div id="notificacion" class="notificacion hidden">
                    <span class="icono">&#10003;</span>
                    <span class="mensaje">Solicitud enviada correctamente</span>
                </div>
                        
                <script>
                    var formulario = document.getElementById("miFormulario");
                    formulario.addEventListener("submit", function(event) {
                        event.preventDefault();
                        mostrarNotificacion();
                    });
                    function mostrarNotificacion() {
                        var notificacion = document.getElementById("notificacion");
                        notificacion.style.display = "block";
                        setTimeout(function() {
                            notificacion.style.display = "none";
                        }, 3000);
                    }
                </script>
            <?php } 
        }?>

        <h2>Dirección</h2>
        <div class="mapaDireccion">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2990.778403272769!2d2.2024253!3d41.44402970000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4bceb6c812ea7%3A0x48f0c5af0b005259!2sMonlau%20Formaci%C3%B3n%20Profesional%20-%20La%20Maquinista!5e0!3m2!1ses!2sfr!4v1709725929168!5m2!1ses!2sfr" 
                width="450px" 
                height="300px" 
                style="border:0;" 
                allowfullscreen="True" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

    </section>

    <button onclick="scrollToTop()" id="scrollBtn" title="Ir arriba">&#8679;</button>

<script src="script4.js"></script>


    <footer>
        <p>&copy; 2024 Monlau Motors. Todos los derechos reservados.</p>
    </footer>

    <script>
        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                document.getElementById("mainNav").style.backgroundColor = "rgba(55, 55, 55, 1)";
            } else {
                document.getElementById("mainNav").style.backgroundColor = "transparent";
            }
        }
    </script>

</body>

</html>