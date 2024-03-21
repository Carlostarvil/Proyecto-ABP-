<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monlau Motors - Sobre Nosotros</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="Principal.css">
    <link rel="icon" type="image/jpg" href="logo.png" />

</head>

<body>
    <header>
        <div class="fondo_fotoSN">
            <div class="fondo_color">
                <div class="tituloContacto">
                    <h1>Sobre Nosotros</h1>
                </div>
            </div>
        </div>
    </header>
    <nav id="mainNav" style="width: 100%;">
        <ul>
            <li><a href="principal.php"><img src="image.png" alt="Principal" style="width: 110px; height: 35px;"></a>
            </li>
            <li><a class="activonav" href="sobre.php">Sobre nosotros</a></li>
            <li><a href="catalogo.php">Vehículos</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <li>
                <a class="instagram" href="https://www.instagram.com/monlau_motul/"><img src="instagram.png"
                        alt="INSTAGRAM" style="height: 30px;"></a>
                <a class="facebook" href="https://www.facebook.com/monlau_motul/"><img src="facebook.png" alt="facebook"
                        style="height: 30px;"></a>
            </li>
        </ul>
    </nav>

    <section class="destacados sobreNosotros">
        <br>
        <h2>Somos una empresa dedicada a la compra y venta de turismos y vehiculos industriales</h2>
        <p>Todos nuestros vehiculos estan totalmente <b>revisados</b> en nuestros propios centros y plenamente <b>garantizados</b> hasta un minimo de 12 meses, con el libro de mantenimiento al dia.</p>
        <p>Vendemos <b>vehiculos para particulares a precios de profesionales</b> aceptando su coche antiguo como parte de pago.</p>
        <p>Tambien ofrecemos una amplia gama de vehiculos industriales para profesionales de diversos sectores.</p>
        <img class="imgDoc" src="taller.jpg" alt="Docs">

        <h2 class="titulo2SN">Tambien realizamos todo tipo de tramites sin necesidad de ir a la oficina de trafico:</h2>
        <ul>
            <li>Cambio de Titularidad</li>
            <li>Matriculación de Vehículos</li>
            <li>Seguros de Vehículos</li>
            <li>Duplicados de Permisos de Conducir</li>
            <li>Duplicados de Fichas Técnicas</li>
            <li>Duplicados de Permisos de Circulación</li>
            <li>Altas y Bajas de Vehículos</li>
            <li>Informes de Vehículos</li>
            <li>Preparación de Contratos</li>
            <li>Asesoramiento</li>
        </ul>
        <img class="imgDoc" src="documentacion.jpg" alt="Docs">
    
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