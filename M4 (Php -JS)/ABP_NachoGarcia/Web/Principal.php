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
    <header>
        <div class="fondo_foto">
            <div class="fondo_color">
                <div class="logo"><img src="logo.png"></div>
            </div>
        </div>
    </header>

    <nav id="mainNav" style="width: 100%;">
        <ul>
            <li><a href="principal.php"><img src="image.png" alt="Principal" style="width: 110px; height: 35px;"></a>
            </li>
            <li><a href="sobre.php">Sobre nosotros</a></li>
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
    <main>
        
        <section class="destacados" id="destacados">

            <h2>- Vehículos destacados -</h2>
            <div class="slideshow-container">
            <?php
                require("connection.php");
                $vehiculo = $con->query("SELECT * FROM vehiculos WHERE etiquetas = 'Destacados'");
                while ($row = $vehiculo->fetch_assoc()){
            ?>
                    <div class="slide slidemargin">
                        <img class="imagendestacados" onclick="location.href='coche.php?id=<?php echo $row['id']; ?>'" src="<?php echo $row['foto_delantera']; ?>" alt="Slide 1">
                        <img class="imagendestacados" onclick="location.href='coche.php?id=<?php echo $row['id']; ?>'" src="<?php echo $row['foto_trasera']; ?>" alt="Slide 1">
                    </div>
            <?php } ?>

                <button class="prev" onclick="moveSlide(-1)">Anterior</button>
                <button class="next" onclick="moveSlide(1)">Siguiente</button>
            </div>
            <script src="script.js"></script>
        </section>

        <br>
        <section class="resenas">
            <h2 class="tituloResenas">- Opiniones de nuestros clientes -</h2>
            <br>
            <section id="tranding">
                <div class="container">
                    <div class="swiper tranding-slider">
                        <div class="swiper-wrapper">
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="images/coche1.jpeg" alt="Tranding">
                                    <div class="overlay">
                                        <p>BMW Serie 3</p>
                                    </div>
                                    <div class="overlay3">
                                        <p>16.000€</p>
                                    </div>
                                    <div class="overlay2">

                                        <p>Carlos García</p>
                                        <p>El coche superó mis expectativas en términos de rendimiento y comodidad. Sin
                                            duda recomendaría esta marca a mis amigos y familiares.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide-end -->
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="images/coche2.jpg" alt="Tranding">
                                    <div class="overlay">
                                        <p>Seat Ibiza</p>
                                    </div>
                                    <div class="overlay3">
                                        <p>14.900</p>
                                    </div>
                                    <div class="overlay2">
                                        <p>Esteban García</p>
                                        <p>Estoy impresionado con la calidad y el rendimiento de mi nuevo coche. La
                                            atención al cliente fue excepcional y el proceso de compra fue muy rápido.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide-end -->
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="images/coche3.jpg" alt="Tranding">
                                    <div class="overlay">
                                        <p>BMW Serie 1</p>
                                    </div>
                                    <div class="overlay3">
                                        <p>22.000€</p>
                                    </div>
                                    <div class="overlay2">
                                        <p>Antonio Alonso</p>
                                        <p>La experiencia de compra de mi nuevo coche fue impecable. Desde la primera
                                            visita a la concesionaria hasta la entrega final, todo fue perfecto. </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide-end -->
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="images/coche4.jpg" alt="Tranding">
                                    <div class="overlay">
                                        <p>Porsche Macan</p>
                                    </div>
                                    <div class="overlay3">
                                        <p>44.950€</p>
                                    </div>
                                    <div class="overlay2">
                                        <p>Laura Gimenez</p>
                                        <p>¡Me encanta mi nuevo coche! La entrega fue puntual y el personal de la
                                            concesionaria fue muy amable y servicial. </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide-end -->
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="images/coche5.jpg" alt="Tranding">
                                    <div class="overlay">
                                        <p>Maserati Ghibli</p>
                                    </div>
                                    <div class="overlay3">
                                        <p>65.000€</p>
                                    </div>
                                    <div class="overlay2">
                                        <p>Ramon Buenafuente</p>
                                        <p>Mi nuevo coche es una verdadera joya. Desde el momento en que lo vi en la
                                            sala de exhibición, supe que era el indicado para mí. </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide-end -->
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="images/coche6.jpg" alt="Tranding">
                                    <div class="overlay">
                                        <p>Mercedes Clase C</p>
                                    </div>
                                    <div class="overlay3">
                                        <p>19.000€</p>
                                    </div>
                                    <div class="overlay2">
                                        <p>Maria Quintás</p>
                                        <p>¡Qué experiencia tan gratificante comprar mi nuevo coche en esta
                                            concesionaria! El equipo de ventas fue muy informativo y me ayudó a elegir
                                            el coche perfecto para mis necesidades.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide-end -->
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <img src="images/coche7.jpg" alt="Tranding">
                                    <div class="overlay">
                                        <p>BMW Serie 3</p>
                                    </div>
                                    <div class="overlay3">
                                        <p>4.900</p>
                                    </div>
                                    <div class="overlay2">
                                        <p>Hugo Fernandez</p>
                                        <p>Después de investigar varias opciones, decidí comprar mi nuevo coche aquí, ¡y
                                            no podría estar más feliz con mi elección!</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Slide-end -->
                        </div>

                        <div class="tranding-slider-control">
                            <div class="swiper-button-prev slider-arrow">
                                <ion-icon name="arrow-back-outline"></ion-icon>
                            </div>
                            <div class="swiper-button-next slider-arrow">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </section>
        </section>


        <section class="categorias">
            <h2>- Categorías de vehículos -</h2>

            <div class="MuiBox-root jss96 jss94 jss91">
                <a class="MuiTypography-root MuiLink-root MuiLink-underlineNone jss97 MuiTypography-colorInherit"
                    href="catalogo.php?tipo=Turismo"><svg width="77" height="36" viewBox="0 0 77 36" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M66.5 14.5c-2-.8-8.5-1.333-11.5-1.5-5.6-4-12.667-7-15.5-8h-15c-5.6 0-10 4.333-11.5 6.5-4.4 0-6.833 1-7.5 1.5v9c0 2.4 1.667 4 2.5 4.5h3c-.5-2.5 1-7.5 6.5-7.5 6.4 0 7.333 5.667 7 8.5H52c0-2 1-8.5 7-8.5 4.8 0 6.333 5 6.5 7.5H70c.5-1.5 1.5-4.9 1.5-6.5 0-2-2.5-4.5-5-5.5zm-32.5-1V7h-9.5c-.5.833-1.6 4.1-2 6.5H34zM35.5 7h4c2.5.833 8.6 3.3 13 6.5H37c-.333-1.667-1.1-5.3-1.5-6.5zm-17 5c.8-2 3-3.167 4-3.5l-1.5 4-2.5-.5zm51 8.5c-1.5 0-4.7-.3-5.5-1.5-1-1.5.5-3 2-2.5s4.5 4.036 3.5 4z"
                            fill="currentColor"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17.5 23a2.5 2.5 0 100 5 2.5 2.5 0 000-5zM12 25.5a5.5 5.5 0 1111 0 5.5 5.5 0 01-11 0zM59 23a2.5 2.5 0 100 5 2.5 2.5 0 000-5zm-5.5 2.5a5.5 5.5 0 1111 0 5.5 5.5 0 01-11 0z"
                            fill="currentColor"></path>
                    </svg>
                    <p class="MuiTypography-root jss98 MuiTypography-body2">Turismo</p>
                </a>
                <a class="MuiTypography-root MuiLink-root MuiLink-underlineNone jss97 MuiTypography-colorInherit"
                    href="catalogo.php?tipo=Suv-4x4"><svg width="77" height="36" viewBox="0 0 77 36" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17.967 2H34.99l2.15 2.688-.78.624L34.51 3H18.533L17.18 5.257l-.858-.514L17.967 2zM17.75 31a3.5 3.5 0 100-7 3.5 3.5 0 000 7zm0 3a6.5 6.5 0 100-13 6.5 6.5 0 000 13zM60.75 31a3.5 3.5 0 100-7 3.5 3.5 0 000 7zm0 3a6.5 6.5 0 100-13 6.5 6.5 0 000 13z"
                            fill="currentColor"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M67.25 15c-1.6-1.2-9-1.833-12.5-2l-13.5-9h-27c-3.6 0-7.5 6.167-9 9v7.5c-.333 1-1 3.3-1 4.5 0 1.2 1.667 2.167 2.5 2.5h3.5c0-2.333 1.5-7 7.5-7s7.5 5 7.5 7.5l28 .5c-.333-2.667.7-8 7.5-8s7.833 5.333 7.5 8h1.5c1-1.167 3-4 3-6 0-2.5-3.5-6-5.5-7.5zm-48.5-3l2-6h-6c-2 .8-3.167 3.667-3.5 5l7.5 1zm14.5 1l-11.5-.5 1.5-6.5h10v7zm7.5-7l12 8.5-17.5-1.5V6h5.5zm23.5 10.012c1 .167 3.3.8 4.5 2 1.5 1.5.5 3.5-.5 3s-5.202-5.283-4-5z"
                            fill="currentColor"></path>
                    </svg>
                    <p class="MuiTypography-root jss98 MuiTypography-body2">SUV y 4x4</p>
                </a>
                <a class="MuiTypography-root MuiLink-root MuiLink-underlineNone jss97 MuiTypography-colorInherit"
                    href="catalogo.php?tipo=Monovolumen"><svg width="77" height="36" viewBox="0 0 77 36" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M3.75 14.5V20l-1 1v4c0 1.2 1.333 2.167 2 2.5h5c0-2.5 1.5-7.5 7.5-7.5s6.833 5 6.5 7.5l32.5.5c-.333-2.667.6-8 7-8s7.333 5 7 7.5h3c0-1.6.667-3.333 1-4V20c-2-2-6.3-6.2-7.5-7-1.2-.8-5.5-1.333-7.5-1.5l-13-7.5h-34c-5.2 1.2-7.833 7.5-8.5 10.5zm11-8.5h6v8H9.25c0-2.8 3.667-6.5 5.5-8zm8 0h16v5.5l-1 2.5h-15V6zm18 0h5.5l11 6.5V14h-14.5l-2-2.5V6zm30 13.5c-.667-1.167-2.4-3.6-4-4-1.6-.4-2 .167-2 .5l3 3.5h3z"
                            fill="currentColor"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17.25 23a3.5 3.5 0 100 7 3.5 3.5 0 000-7zm-5.5 3.5a5.5 5.5 0 1111 0 5.5 5.5 0 01-11 0zM63.25 23a3.5 3.5 0 100 7 3.5 3.5 0 000-7zm-5.5 3.5a5.5 5.5 0 1111 0 5.5 5.5 0 01-11 0z"
                            fill="currentColor"></path>
                    </svg>
                    <p class="MuiTypography-root jss98 MuiTypography-body2">Monovolumen</p>
                </a>
                <a class="MuiTypography-root MuiLink-root MuiLink-underlineNone jss97 MuiTypography-colorInherit"
                    href="catalogo.php?tipo=Familiar"><svg width="77" height="36" viewBox="0 0 77 36" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M14.75 5h20.925L39 7.5h-1.5L35.325 6H15.25L14 7.5h-1.5L14.75 5z" fill="currentColor">
                        </path>
                        <circle cx="18" cy="26.5" r="4.5" stroke="currentColor" stroke-width="2"></circle>
                        <circle cx="63" cy="26.5" r="4.5" stroke="currentColor" stroke-width="2"></circle>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M62 15h-7.5c-5.2-4.8-11.5-7-14-7.5H12L4.5 15v5c-.667 0-2 .7-2 3.5s2 4.167 3 4.5H11c-.5-2.667.2-8 7-8s7.5 4.333 7 6.5h31c-.333-2.167.6-6.5 7-6.5s7.667 5.333 7.5 8c2.8 0 3.834-1.333 4-2v-4c0-5.2-8.333-6.833-12.5-7zm-51-.5L13.5 9h9l-3 5.5H11zM24.5 9H35l1.5 6.5h-15l3-6.5zM38 15.5L36.5 9H42c6 2.4 8.833 5.667 9.5 6.5H38zm30 1.53c1.5.334 4.5 1.5 4.5 3.5H70c-.5-.666-1.6-2-2-2-.5 0-1-1.784 0-1.5z"
                            fill="currentColor"></path>
                    </svg>
                    <p class="MuiTypography-root jss98 MuiTypography-body2">Familiar</p>
                </a>
                <a class="MuiTypography-root MuiLink-root MuiLink-underlineNone jss97 MuiTypography-colorInherit"
                    href="catalogo.php?tipo=Deportivo"><svg width="77" height="36" viewBox="0 0 77 36" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M16.914 19a4 4 0 100 8 4 4 0 000-8zm-6 4a6 6 0 1112 0 6 6 0 01-12 0zM60.914 19a4 4 0 100 8 4 4 0 000-8zm-6 4a6 6 0 1112 0 6 6 0 01-12 0z"
                            fill="currentColor"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M48.914 13h14.5c3.334 0 10.1 1 10.5 5 .234 2.342-.19 2.38-.707 2.427-.586.053-1.293.117-1.293 3.573h-4c.334-2.667-.6-8-7-8-7.32 0-7.105 6.28-7.015 8.88.008.24.015.45.015.62h-30c.667-3.167.2-9.5-7-9.5s-7.666 6-7 9h-2.5c-.5-2-1.7-6.1-2.5-6.5-1-.5-2-5.5-1-6.5.8-.8 7-.667 10-.5 1.167-1.5 4.7-4.5 9.5-4.5h13.5l12 6zm-21-5v6h-9c-.166-1.167.6-4 5-6h4zm2 6h18l-12-6h-6v6z"
                            fill="currentColor"></path>
                    </svg>
                    <p class="MuiTypography-root jss98 MuiTypography-body2">Deportivo</p>
                </a>
                <a class="MuiTypography-root MuiLink-root MuiLink-underlineNone jss97 MuiTypography-colorInherit"
                    href="catalogo.php?tipo=Cabrio"><svg width="77" height="36" viewBox="0 0 77 36" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M36.954 8c2.167.667 7 2.6 9 5 4.667 0 15.4.5 21 2.5 7 2.5 7.5 8 1.5 9 .167-2.833-1.2-8.5-8-8.5s-7.833 5.667-7.5 8.5h-29.5c.5-2.833-.3-8.5-7.5-8.5s-8 5.667-7.5 8.5h-2.5c-.833-2.667-1.1-8.7 4.5-11.5h13l-1-5 5.5 5h9v-1.5h1V13h4c.167-.833-.6-3-5-5zm33.5 11.5c.5.5 1.2 1.6 0 2-1.5.5-1-2 0-2z"
                            fill="currentColor"></path>
                        <path fill="currentColor" d="M14.954 8.5h6v1h-6zM12.954 10.5h8v1h-8zM12.954 12.5h8v1h-8z">
                        </path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M15.954 18.5a4 4 0 100 8 4 4 0 000-8zm-6 4a6 6 0 1112 0 6 6 0 01-12 0zM60.954 18.5a4 4 0 100 8 4 4 0 000-8zm-6 4a6 6 0 1112 0 6 6 0 01-12 0z"
                            fill="currentColor"></path>
                    </svg>
                    <p class="MuiTypography-root jss98 MuiTypography-body2">Cabrio</p>
                </a>
                <a class="MuiTypography-root MuiLink-root MuiLink-underlineNone jss97 MuiTypography-colorInherit"
                    href="catalogo.php?tipo=Furgoneta"><svg width="77" height="36" viewBox="0 0 77 36" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M5.5 26v-3.5l1-1.5c.5-4.667 1.8-14.6 3-17h33l11 9.5c6-.167 17.6 1 16 7 .5.167 1.5 1 1.5 3s-1 3.167-1.5 3.5H66c-.167-2.5-1.9-7.5-7.5-7.5s-7.333 5.333-7.5 8H24c.167-2.667-1-8-7-8S9.333 23.833 9.5 26h-4zM35 7.5v6h13.5l-5-6H35z"
                            fill="currentColor"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M16.5 24a2.5 2.5 0 100 5 2.5 2.5 0 000-5zM11 26.5a5.5 5.5 0 1111 0 5.5 5.5 0 01-11 0zM58.5 24a2.5 2.5 0 100 5 2.5 2.5 0 000-5zM53 26.5a5.5 5.5 0 1111 0 5.5 5.5 0 01-11 0z"
                            fill="currentColor"></path>
                    </svg>
                    <p class="MuiTypography-root jss98 MuiTypography-body2">Furgoneta</p>
                </a>
                <a class="MuiTypography-root MuiLink-root MuiLink-underlineNone jss97 MuiTypography-colorInherit"
                    href="catalogo.php?tipo=Compacto"><svg width="77" height="36" viewBox="0 0 77 36" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M7.32 26c-.5-4 0-14.5 7.5-21h30.5l7.5 8.5c5.333 0 16 1.5 16 7.5v6c-.167.333-1.4 1-5 1 .333-2.333-.6-7-7-7s-6.667 5.333-6 8h-26c.333-2.667-.5-8-6.5-8s-6.834 4-6.5 6l-4.5-1zm19-18v5h-11l2-5h9zm3 0h12.5l4.5 5h-17V8zm34 12v-1h3v1h-3zm-17-12l4.5 5h-2l-4.5-5h2z"
                            fill="currentColor"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M57.32 32a5 5 0 100-10 5 5 0 000 10zm0-2a3 3 0 100-6 3 3 0 000 6zM18.32 32a5 5 0 100-10 5 5 0 000 10zm0-2a3 3 0 100-6 3 3 0 000 6z"
                            fill="currentColor"></path>
                    </svg>
                    <p class="MuiTypography-root jss98 MuiTypography-body2">Compacto</p>
                </a>
            </div>

            <div class="cat2 MuiBox-root jss96 jss94 jss91">
                <a class="MuiTypography-root MuiLink-root MuiLink-underlineNone jss97 MuiTypography-colorInherit"
                    href="catalogo.php?etiqueta=Economico"><svg width="32" height="32" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" color="currentColor">
                        <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path
                            d="M15 8.5c-.685-.685-1.891-1.161-3-1.191M9 15c.644.86 1.843 1.35 3 1.391m0-9.082c-1.32-.036-2.5.561-2.5 2.191 0 3 5.5 1.5 5.5 4.5 0 1.711-1.464 2.446-3 2.391m0-9.082V5.5m0 10.891V18.5"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <p class="MuiTypography-root jss98 MuiTypography-body2">Económico</p>
                </a>
                <a class="MuiTypography-root MuiLink-root MuiLink-underlineNone jss97 MuiTypography-colorInherit"
                    href="catalogo.php?etiqueta=Km-0"><svg width="32" height="32" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" color="currentColor">
                        <path d="M8 10h8M7 14h1M16 14h1" stroke="currentColor" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                        <path
                            d="M3 18v-6.59a2 2 0 01.162-.787l2.319-5.41A2 2 0 017.319 4h9.362a2 2 0 011.838 1.212l2.32 5.41a2 2 0 01.161.789V18M3 18v2.4a.6.6 0 00.6.6h2.8a.6.6 0 00.6-.6V18m-4 0h4m14 0v2.4a.6.6 0 01-.6.6h-2.8a.6.6 0 01-.6-.6V18m4 0h-4M7 18h10"
                            stroke="currentColor"></path>
                    </svg>
                    <p class="MuiTypography-root jss98 MuiTypography-body2">Kilómetro 0</p>
                </a>
                <a class="MuiTypography-root MuiLink-root MuiLink-underlineNone jss97 MuiTypography-colorInherit"
                    href="catalogo.php?etiqueta=Premium"><svg width="32" height="32" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" color="currentColor">
                        <path
                            d="M14.272 10.445L18 2m-8.684 8.632L5 2m7.761 8.048L8.835 2m5.525 0l-1.04 2.5M6 16a6 6 0 1012 0 6 6 0 00-12 0z"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <p class="MuiTypography-root jss98 MuiTypography-body2">Premium</p>
                </a>
                <a class="MuiTypography-root MuiLink-root MuiLink-underlineNone jss97 MuiTypography-colorInherit"
                    href="catalogo.php?etiqueta=En-oferta"><svg width="32" height="32" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" color="currentColor">
                        <path
                            d="M4.635 14.415l1.039-2.203a.357.357 0 01.652 0l1.04 2.203 2.323.356c.298.045.416.429.2.649l-1.68 1.713.396 2.421c.051.311-.26.548-.527.401L6 18.812l-2.078 1.143c-.267.147-.578-.09-.527-.4l.396-2.422-1.68-1.713c-.217-.22-.098-.604.2-.65l2.324-.355zM16.635 14.415l1.039-2.203a.357.357 0 01.652 0l1.04 2.203 2.323.356c.298.045.416.429.2.649l-1.68 1.713.396 2.421c.051.311-.26.548-.527.401L18 18.812l-2.078 1.143c-.267.147-.578-.09-.527-.4l.396-2.422-1.68-1.713c-.216-.22-.098-.604.2-.65l2.324-.355zM10.635 5.415l1.039-2.203a.357.357 0 01.652 0l1.04 2.203 2.323.356c.298.045.416.429.2.649l-1.68 1.713.396 2.421c.051.311-.26.548-.527.401L12 9.812l-2.078 1.143c-.267.147-.578-.09-.527-.4l.396-2.422-1.68-1.713c-.217-.22-.098-.604.2-.65l2.324-.355z"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <p class="MuiTypography-root jss98 MuiTypography-body2">En oferta</p>
                </a>
                <a class="botonDestacados MuiTypography-root MuiLink-root MuiLink-underlineNone jss97 MuiTypography-colorInherit"
                    href="#destacados"><svg width="32" height="32" stroke-width="1.5" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg" color="currentColor">
                        <path
                            d="M8.587 8.236l2.598-5.232a.911.911 0 011.63 0l2.598 5.232 5.808.844a.902.902 0 01.503 1.542l-4.202 4.07.992 5.75c.127.738-.653 1.3-1.32.952L12 18.678l-5.195 2.716c-.666.349-1.446-.214-1.319-.953l.992-5.75-4.202-4.07a.902.902 0 01.503-1.54l5.808-.845z"
                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <p class="MuiTypography-root jss98 MuiTypography-body2">Destacados</p>
                </a>
            </div>
        </section>
        <section class="destacados videos" id="destacados">
                <h2>- Proceso de compra -</h2>
                <h3>1. Contacto</h3>
                <video controls>
                    <source src="videosProceso/Contacto.mp4" type="video/mp4">
                </video>
                <h3>2. Presentación</h3>
                <video controls>
                    <source src="videosProceso/Presentación.mp4" type="video/mp4">
                </video>
                <h3>3. Datos</h3>
                <video controls>
                    <source src="videosProceso/Datos.mp4" type="video/mp4">
                </video>
                <h3>4. Compra</h3>
                <video controls>
                    <source src="videosProceso/Compra-Tramites.mp4" type="video/mp4">
                </video>
                <h3>5. Entrega</h3>
                <video controls>
                    <source src="videosProceso/Entrega.mp4" type="video/mp4">
                </video>
        </section>
        <button onclick="scrollToTop()" id="scrollBtn" title="Ir arriba">&#8679;</button>

        <script>
            document.querySelectorAll('.botonDestacados').forEach(function(boton) {
                boton.addEventListener('click', function(event) {
                    event.preventDefault();
                    var navbarHeight = document.getElementById('mainNav').offsetHeight;
                    var destacadosPosition = document.getElementById('destacados').offsetTop;
                    window.scrollTo({
                        top: destacadosPosition - navbarHeight, 
                        behavior: 'smooth'
                    });
                });
            });
        </script>

        <script src="script4.js"></script>
        <footer>
            <p>&copy; 2024 Monlau Motors. Todos los derechos reservados.</p>
        </footer>

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



        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
        <script src="script2.js"></script>
    </main>

</body>

</html>