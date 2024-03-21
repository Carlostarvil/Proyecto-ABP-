<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monlau Motors</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="Principal.css">
    <link rel="icon" type="image/jpg" href="logo.png"/>

</head>

<body>
    <header>
        <div class="fondo_fotoCat">
            <div class="fondo_color">
                <div class="tituloContacto">
                    <h1>Catálogo de Vehículos</h1>
                </div>
            </div>
        </div>
    </header>
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

    <section class="catalogo">
        <h2>Elige tu coche favorito!</h2>

        <?php
            if(isset($_GET['tipo'])){
                $tipo_carroceria = $_GET['tipo'];
            } else {
                $tipo_carroceria = "Todos";
            }
            if(isset($_GET['etiqueta'])){
                $etiqueta = $_GET['etiqueta'];
            } else {
                $etiqueta = "Todos";
            }
        ?>

<body onload="buscar_filtro(
    $('#marca').val(),
    $('#precio_min').val(),
    $('#precio_max').val(),
    $('#potencia_min').val(),
    $('#potencia_max').val(),
    $('#kilometros_min').val(),
    $('#kilometros_max').val(),
    $('#anyo_min').val(),
    $('#anyo_max').val(),
    $('#combustible').val(),
    $('#transmision').val(),
    '<?php echo $tipo_carroceria; ?>', 
    '<?php echo $etiqueta; ?>'
);">

        <div class="filtro">
            <div class="contact_form_filtro">
                <div class="formulario">
                    <h3 class="titulofiltro">Filtros</h3>
                    <div>
                        <p>
                            <label for="marca" class="colocar_nombre">Marca</label>
                            <input class="colocar_marca" type="marca" name="marca" id="marca"
                                    placeholder="Escribe una marca">
                        </p>
                        <p>
                            <label for="precio" class="colocar_email">Precio</label>
                            <input class="colocar_max-min" type="precio_min" name="precio_min" id="precio_min"
                                placeholder="Precio Mínimo">
                            <input class="colocar_max-min" type="precio_max" name="precio_max" id="precio_max"
                                placeholder="Precio Máximo">
                        </p>
                        <p>
                            <label for="potencia" class="colocar_email">Potencia</label>
                            <input class="colocar_max-min" type="potencia_min" name="potencia_min" id="potencia_min"
                                placeholder="CV Mínimos">
                            <input class="colocar_max-min" type="potencia_max" name="potencia_max" id="potencia_max"
                                placeholder="CV Máximos">
                        </p>
                        <p>
                            <label for="kilometros" class="colocar_email">Kilómetros</label>
                            <input class="colocar_max-min" type="kilometros_min" name="kilometros_min" id="kilometros_min"
                                placeholder="KM Mínimos">
                            <input class="colocar_max-min" type="kilometros_max" name="kilometros_max" id="kilometros_max"
                                placeholder="KM Máximos">
                        </p>
                        <p>
                            <label for="anyo" class="colocar_email">Año</label>
                            <input class="colocar_max-min" type="anyo_min" name="anyo_min" id="anyo_min"
                                placeholder="Año Mínimo">
                            <input class="colocar_max-min" type="anyo_max" name="anyo_max" id="anyo_max"
                                placeholder="Año Máximo">
                        </p>
                        <p>
                            <label for="combustible" class="colocar_email">Combustible</label>
                            <select class="colocar_marca" name="combustible" id="combustible">
                                <option value="Todos">Todos</option>
                                <option value="Gasolina">Gasolina</option>
                                <option value="Diesel">Diesel</option>
                                <option value="Hibrido">Híbrido</option>
                                <option value="Electrico">Eléctrico</option>
                            </select>
                        </p>
                        <p>
                            <label for="transmision" class="colocar_email">Transmisión</label>
                            <select class="colocar_marca" name="transmision" id="transmision">
                                <option value="Todos">Todos</option>
                                <option value="Manual">Manual</option>
                                <option value="Automatico">Automático</option>
                            </select>
                        </p>
                        <p>
                            <label for="tipo" class="colocar_email">Tipo de carrocería</label>
                            <select class="colocar_marca" name="tipo" id="tipo">
                                <option value="Todos">Todos</option>
                                <option value="Turismo">Turismo</option>
                                <option value="Suv-4x4">SUV y 4x4</option>
                                <option value="Monovolumen">Monovolumen</option>
                                <option value="Familiar">Familiar</option>
                                <option value="Deportivo">Deportivo</option>
                                <option value="Cabrio">Cabrio</option>
                                <option value="Furgoneta">Furgoneta</option>
                                <option value="Compacto">Compacto</option>
                            </select>
                        </p>
                        <p>
                            <label for="etiqueta" class="colocar_email">Etiqueta</label>
                            <select class="colocar_marca" name="etiqueta" id="etiqueta">
                                <option value="Todos">Todos</option>
                                <option value="Economico">Económico</option>
                                <option value="km0">kilómetro 0</option>
                                <option value="Premium">Premium</option>
                                <option value="Destacado">Destacado</option>
                                <option value="Oferta">En oferta</option>
                            </select>
                        </p>
                        
                        <button class="botonfiltro" type="submit" onclick="buscar_filtro($('#marca').val(),$('#precio_min').val(),$('#precio_max').val(),$('#potencia_min').val(),$('#potencia_max').val(),$('#kilometros_min').val(),$('#kilometros_max').val(),$('#anyo_min').val(),$('#anyo_max').val(),$('#combustible').val(),$('#transmision').val(),$('#tipo').val(),$('#etiqueta').val());" id="buscar">
                            <p>Buscar</p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
                    <div class="catalogoproductos" id="resultado_busqueda">
                    </div>
            
    </section>
    <button onclick="scrollToTop()" id="scrollBtn" title="Ir arriba">&#8679;</button>

<br>
    <footer>
        <p>&copy; 2024 Monlau Motors. Todos los derechos reservados.</p>
    </footer>


    <script>
        window.addEventListener('load', function() {
        var filtro = document.querySelector('.filtro');
        var distanciaDesdeArriba = 580;
        var posicionInicial;

        function obtenerPosicionInicial() {
            posicionInicial = filtro.getBoundingClientRect().top + window.pageYOffset;
        }

        obtenerPosicionInicial();

        window.addEventListener('scroll', function() {
            var alturaPagina = document.documentElement.scrollHeight;
            var alturaVentana = window.innerHeight;
            var distanciaDesdeAbajo = alturaPagina - alturaVentana - window.pageYOffset;

            if (window.pageYOffset <= distanciaDesdeArriba) {
            var nuevaPosicion = posicionInicial - window.pageYOffset;
            if (nuevaPosicion > 50) { 
                filtro.style.top = nuevaPosicion + 'px';
            } else {
                filtro.style.top = '50px'; 
            }
            } else {
            filtro.style.top = '50px'; 
            }

            if (distanciaDesdeAbajo <= 80) {
            filtro.style.bottom = '115px'; 
            } else {
            filtro.style.bottom = '20px'; 
            }
        });

        window.addEventListener('resize', function() {
            obtenerPosicionInicial();
        });
        });
  </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script3.js"></script>
    <script src="script4.js"></script>
    <script>
            window.onscroll = function () { scrollFunction() };

            function scrollFunction() {
                if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                    document.getElementById("mainNav").style.backgroundColor = "rgba(55, 55, 55, 1)";
                    document.getElementById("mainNav").style.color = "black";
                } else {
                    document.getElementById("mainNav").style.backgroundColor = "transparent";
                    document.getElementById("mainNav").style.color = "white";
                }
            }
        </script>

</body>
</html>