<!DOCTYPE html>
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
                <nav class="z-depth-4 purple lighten-3">
                    <div class="nav-wrapper navContainer">
                        <a href="#" class="brand-logo">Logo</a>
                        <a href="#" data-activates="mobile-demo" class="button-collapse right"><i class="material-icons">menu</i></a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li><a href="#inicio">Inicio</a></li>
                            <li><a href="#nosotros">Sobre nosotros</a></li>
                            <li><a href="#servicios">Servicios</a></li>
                            <li><a href="#equipo">Nuestro Equipo</a></li>
                            <li><a href="#galeria">Galer&iacute;a</a></li>
                            <li><a href="#contacto">Contacto</a></li>
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
                <h5 class="center marginBottom wow fadeIn" data-wow-duration="2s">Sobre Nosotros</h5>
                <div class="col s12 m6 ">
                    <p class="justify wow fadeIn" data-wow-duration="2s">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                </div>
                <div class="col s12 m6 center">
                    <img src="media/imagenes/imagen2.jpg" class="responsive-img circle z-depth-3 wow fadeIn" data-wow-duration="2s">
                </div>  
            </div>
        </section>

        <!--SERVICIOS -->
        <section id="servicios" class="row deep-purple lighten-5">
            <div class="col m12 ">            
                <div class="row paddingTop">
                    <div class="container">
                        <h5 class="center-align marginBottom wow fadeIn" data-wow-duration="2s">Nuestros Servicios</h5>
                        <div class="col m4 s12">
                            <div class="card z-depth-3 hoverable wow fadeIn" data-wow-duration="2s">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img class="activator" src="media/imagenes/masoterapia.jpeg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Masoterapia<i class="material-icons right">more_vert</i></span>
                                    <p><a class="activator pointer">Ver m&aacute;s</a></p>
                                </div>
                                <div class="card-reveal">
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
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4"><p>Reflexiolog&iacute;a</p><i class="material-icons right">more_vert</i></span>
                                    <p><a class="activator pointer">Ver m&aacute;s</a></p>
                                </div>
                                <div class="card-reveal">
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
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Yesoterapia<i class="material-icons right">more_vert</i></span>
                                    <p><a class="activator pointer">Ver m&aacute;s</a></p>
                                </div>
                                <div class="card-reveal">
                                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
                                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--PARALLAX -->
        <div class="parallax-container valign-wrapper">         


            <h3 id="textParallax" class="valign white-text center-align">"Sirve, ama, da, purifícate, medita, realízate."</h3>

            <div class="parallax"><img src="media/imagenes/70c.jpg"></div>
        </div>

        <!--NUESTRO EQUIPO -->
        <section id="equipo" class="row paddingBottom ">
            <div class="col m12 ">               
                <div class="container">
                    <h5 class="center-align marginBottom paddingTop wow fadeIn" data-wow-duration="2s">Nuestro Equipo</h5>
                    <div class="row">
                        <div class="col m4 s12">
                            <div class="card z-depth-3 hoverable">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img src="media/imagenes/icono.png" class="responsive-img circle">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Persona 1<i class="material-icons right">more_vert</i></span>
                                    <p class="justify">I am a very simple card. I am good at containing small bits of information.
                                        I am convenient because I require little markup to use effectively.</p>
                                </div>

                            </div>
                        </div>
                        <div class="col m4 s12">
                            <div class="card z-depth-3 hoverable">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img src="media/imagenes/icono.png" class="responsive-img circle">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Persona 2<i class="material-icons right">more_vert</i></span>
                                    <p class="justify">I am a very simple card. I am good at containing small bits of information.
                                        I am convenient because I require little markup to use effectively.</p>
                                </div>

                            </div>
                        </div>
                        <div class="col m4 s12">
                            <div class="card z-depth-3 hoverable">
                                <div class="card-image waves-effect waves-block waves-light">
                                    <img src="media/imagenes/icono.png" class="responsive-img circle">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4">Persona 3<i class="material-icons right">more_vert</i></span>
                                    <p class="justify">I am a very simple card. I am good at containing small bits of information.
                                        I am convenient because I require little markup to use effectively.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </section>
        <section id="galeria" class="row deep-purple lighten-5">
            <div class="container">
                <div class="col s12 m12">
                    <h5 class="center-align">Galer&iacute;a</h5>

                    <div class="carousel carousel-slider center" data-indicators="true">
                        <div id="foto1" class="carousel-item red white-text" href="#one!">
                            <h2>First Panel</h2>
                            <p class="white-text">This is your first panel</p>
                        </div>
                        <div id="foto2" class="carousel-item amber white-text" href="#two!">
                            <h2>Second Panel</h2>
                            <p class="white-text">This is your second panel</p>
                        </div>
                        <div id="foto3" class="carousel-item green white-text" href="#three!">
                            <h2>Third Panel</h2>
                            <p class="white-text">This is your third panel</p>
                        </div>
                        <div  id="foto4" class="carousel-item blue white-text" href="#four!">
                            <h2>Fourth Panel</h2>
                            <p class="white-text">This is your fourth panel</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <footer id="contacto" class="row purple lighten-4 z-depth-4">
            <div class="container">
                <div class="col m6  s12">
                    <h5 class="white-text center">Cont&aacute;ctanos</h5>
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="icon_prefix" type="text" class="validate">
                                <label for="icon_prefix">Nombre</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">phone</i>
                                <input id="icon_telephone" type="tel" class="validate">
                                <label for="icon_telephone">Tel&eacute;fono</label>
                            </div>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">mail</i>
                                <input id="email" type="email" class="validate">
                                <label for="icon_telephone">Email</label>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col m6  s12">
                    <h5 class="white-text center">Direcci&oacute;n</h5>
                    <div id="map" class="z-depth-3">
                        
                    </div>
                </div>
            </div>

        </footer>

        <script src="js/jquery.js"></script>
        <script src="css/materialize/js/materialize.min.js"></script>
        <script src="js/responsiveSlides/responsiveslides.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDpv4OBSCJJDwBIbYCOn5C5q6973npBNQ"></script>
        <script src="js/googleMap.js"></script>
        <script src="js/wow-js/wow.min.js"></script>
        <script src="js/iniciar.js"></script>
    </body>
</html>
