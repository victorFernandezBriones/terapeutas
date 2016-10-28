<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Terapeutas del Marga Marga</title>
        <link href="css/materialize/css/materialize.min.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">        
        <link href="js/responsiveSlides/responsiveslides.css" rel="stylesheet" type="text/css">        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="js/wow-js/animations.css" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Proza+Libre" rel="stylesheet"> 

    </head>
    <body>
        <header id="inicio">
            <div class="navbar-fixed">
                <nav class="z-depth-4">
                    <div class="nav-wrapper navContainer">
                        <a href="#" class="brand-logo"><img src="media/imagenes/logo.jpg" width="80" height="80"></a>
                        <a href="#" data-activates="mobile-demo" class="button-collapse right"><i class="material-icons">menu</i></a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li><a href="#inicio">Inicio</a></li>
                            <li><a href="#nosotros">Sobre nosotros</a></li>
                            <li><a href="#servicios">Servicios</a></li>
                            <li><a href="#equipo">Nuestro Equipo</a></li>
                            <li><a href="#">Galer&iacute;a</a></li>
                            <li><a href="#">Contacto</a></li>

                        </ul>

                        <!--Side nav bar -->
                        <ul class="side-nav" id="mobile-demo">
                            <li><a href="sass.html">Sass</a></li>
                            <li><a href="badges.html">Components</a></li>
                            <li><a href="collapsible.html">Javascript</a></li>
                            <li><a href="mobile.html">Mobile</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div>
                <ul class="rslides">
                    <li><img src="media/imagenes/68C.jpg" alt=""></li>
                    <li><img src="media/imagenes/69c.jpg" alt=""></li>
                    <li><img src="media/imagenes/70c.jpg" alt=""></li>
                </ul>
            </div>
        </header>


        <!-- NOSOTROS -->
        <div id="nosotros"></div>
        <section id="sobreNosotros" class="row">
            <div class="container">
                <h5 class="center-align marginBottom wow fadeIn" data-wow-duration="2s">Sobre Nosotros</h5>
                <div class="col s12 m6 ">
                    <p class="justify wow fadeIn" data-wow-duration="2s">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                </div>
                <div class="col s12 m6 center">
                    <img src="media/imagenes/imagen2.jpg" class="responsive-img circle z-depth-3 wow fadeIn" data-wow-duration="2s">
                </div>  
            </div>

        </section>

        <!--SERVICIOS -->
        <section id="servicios" class="row">
            <div class="col m12 ">            
                <div class="row paddingTop">
                    <div class="container">
                        <h5 class="center-align marginBottom wow fadeIn" data-wow-duration="2s">Servicios</h5>
                        <div class="col m4 s12">
                            <div class="card z-depth-3 hoverable wow fadeIn" data-wow-duration="2s">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="media/imagenes/masoterapia.jpeg">
                                </div>
                                <div class="card-content lime accent-1">
                                    <span class="card-title activator grey-text text-darken-4">Masoterapia<i class="material-icons right">more_vert</i></span>
                                    <p><a class="activator pointer">Ver m&aacute;s</a></p>
                                </div>
                                <div class="card-reveal lime accent-1">
                                    <span class="card-title grey-text text-darken-4">Masoterapia<i class="material-icons right">close</i></span>
                                    <p class="justify">La masoterapia es una de las técnicas de belleza y salud en auge en nuestros tiempos. Se trata de la aplicación de palpación y masajes sobre puntos determinados del cuerpo, para aliviar dolencias y mejorar la condición física y estética.</p>
                                    <p class="justify">Esta técnica combina masajes y movimientos de presión, realizados mayormente con las manos del terapeuta, aliviando molestias, mejorando los procesos metabólicos y orgánicos, y también colaborando en el drenaje del cuerpo para eliminar las toxinas y grasas acumuladas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col m4 s12">
                            <div class="card z-depth-3 hoverable wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="media/imagenes/reflexologia.jpg">
                                </div>
                                <div class="card-content lime accent-1">
                                    <span class="card-title activator grey-text text-darken-4"><p>Reflexiolog&iacute;a</p><i class="material-icons right">more_vert</i></span>
                                    <p><a class="activator pointer">Ver m&aacute;s</a></p>
                                </div>
                                <div class="card-reveal lime accent-1">
                                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col m4 s12">
                            <div class="card z-depth-3 hoverable wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="media/imagenes/yesoterapia.jpg">
                                </div>
                                <div class="card-content lime accent-1">
                                    <span class="card-title activator grey-text text-darken-4">Yesoterapia<i class="material-icons right">more_vert</i></span>
                                    <p><a class="activator pointer">Ver m&aacute;s</a></p>
                                </div>
                                <div class="card-reveal lime accent-1">
                                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--NUESTRO EQUIPO -->
        <section id="equipo" class="row paddingBottom">
            <div class="col m12 ">
                <h5 class="center-align marginBottom paddingTop wow fadeIn" data-wow-duration="2s">Nuestro Equipo</h5>
                <div class="container">
                    <div class="row">
                        <div class="col m4 s12">
                            <div class="card lime accent-1">
                                <div class="card-content white-text">
                                    <div class="divFoto white">
                                        <img src="media/imagenes/icono.png" class="responsive-img circle">
                                    </div>

                                    <span class="card-title">Lorem ipsum</span>
                                    <p class="justify">I am a very simple card. I am good at containing small bits of information.
                                        I am convenient because I require little markup to use effectively.</p>
                                    <ul>
                                        
                                    </ul>
                                </div>                               
                            </div>
                        </div>
                        <div class="col m4 s12">
                            <div class="card lime accent-1">
                                <div class="card-content white-text">
                                    <div class="divFoto white">
                                        <img src="media/imagenes/icono.png" class="responsive-img circle">
                                    </div>

                                    <span class="card-title">Lorem ipsum</span>
                                    <p class="justify">I am a very simple card. I am good at containing small bits of information.
                                        I am convenient because I require little markup to use effectively.</p>
                                </div>                               
                            </div>
                        </div>
                        <div class="col m4 s12">
                            <div class="card lime accent-1">
                                <div class="card-content white-text">
                                    <div class="divFoto white">
                                        <img src="media/imagenes/icono.png" class="responsive-img circle">
                                    </div>

                                    <span class="card-title">Lorem ipsum</span>
                                    <p class="justify">I am a very simple card. I am good at containing small bits of information.
                                        I am convenient because I require little markup to use effectively.</p>
                                </div>                               
                            </div>
                        </div>

                    </div>
                </div>

            </div>            
        </section>
        <!--PARALLAX -->
        <div class="parallax-container">
            <div class="parallax"><img src="media/imagenes/arroyo.jpg"></div>
        </div>



        <script src="js/jquery.js"></script>
        <script src="css/materialize/js/materialize.min.js"></script>
        <script src="js/responsiveSlides/responsiveslides.min.js"></script>
        <script src="js/wow-js/wow.min.js"></script>
        <script src="js/iniciar.js"></script>
    </body>
</html>
