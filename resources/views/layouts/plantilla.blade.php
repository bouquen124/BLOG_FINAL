@include('pagina.headerMOBILE')
@include('pagina.header')
<!DOCTYPE html>
<html dir="ltr" lang="en-US">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="p:domain_verify" content="b493153664334d774a9ca9db0dbc6097"/>
        <!-- Google Fonts
        ============================================= -->
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,500,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

        <!-- Stylesheets
        ============================================= -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('css/plugin.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css" />

        <!-- External Styles
        ============================================= -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <!-- JavaScripts
        ============================================= -->
        <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>

        <!-- Document Title
        ============================================= -->
        <title>Edyno Estudio</title>

        <!--[if gte IE 9]>
          <style type="text/css">
            .gradient {
               filter: none;
            }
          </style>
        <![endif]-->
    </head>

    <body>

        <!-- MAIN WRAPPER START
        ============================================= -->
        <div id="main-wrapper" class="animsition clearfix">

            <!-- HEADER START
            ============================================= -->
            <header id="header" class="site-header clearfix">
                <div class="container">
                    <div class="row">
                        <!-- LOGO START
                        ============================================= -->
                        <div class="logo col-md-2">
                            <a href="index.html"><img src="{{asset('img/logo.png')}}" style=" max-width:110px" /></a>
                        </div>
                        <!-- LOGO END -->

                        <!-- NAVIGATION START
                        ============================================= -->
                        <div class="navigation col-md-10 text-right">

                            <!-- SEARCH BAR START
                            ============================================= -->
                            <div id="sb-search" class="sb-search">
                                <form>
                                    <input class="sb-search-input" placeholder="Enter your search term..." type="search" value="" name="search" id="search">
                                    <input class="sb-search-submit" type="submit" value="">
                                    <span class="sb-icon-search"><i class="fa fa-search"></i></span>
                                </form>
                            </div>
                            <!-- SEARCH BAR END -->

                            <!--MOBILE MENU START
                            ============================================= -->
                            <div class="mobile-menu">
                                <button id="slide-buttons" class="icon icon-navicon-round"></button>
                            </div>
                            <!--header de laravel
                            ============================================= -->
                            @yield('headerMOBILE')

                            <div id="slide-overlay" class="slide-overlay"></div>
                            <!-- MOBILE MENU -->

                            <!-- MAIN NAVIGATION START
                            ============================================= -->
                            @yield('header')
                            <!-- MAIN NAVIGATION END -->
                        </div>
                        <!-- NAVIGATION END -->
                    </div>
                </div>
            </header>
            <!-- HEADER END -->

            <!-- SLIDER START
            ============================================= -->
            <section id="slider" class="flexslider-wrap fullscreen clearfix">
                <div class="slider-wrapper">
                    <div class="flexslider clearfix">
                        <ul class="slides">
                            <li class="clearfix" style="background-image: url(img/banner.png); background-size: cover; background-repeat: no-repeat;">
                                <div class="overlay color"></div>    
                                <div class="flex-content vertical-center">
                                    <div class="container">
                                        <div class="caption wow fadeInLeft">
                                            <h3 style="color: #ffffff; font-weight: 500;">Hola Aventureros</h3>
                                        </div>
                                        <div class="caption wow fadeInUp">
                                            <h1 style="color: #ffffff; font-size: 46px;">Este es el hogar<br>del doctor monstruo.</h1>
                                        </div> 
                                        <div class="caption wow fadeIn">
                                            <p style="color: #ffffff; font-size: 18px;">El universo es un lugar increíble, listo para que lo descubramos juntos. <br> ¡Acompañame junto a Chan-Ek a descubrir esta aventura!</p>
                                        </div>
                                        <div class="caption wow fadeInUp">
                                            <div class="button-normal white">
                                                <a href="#">Precompra hoy</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- SLIDER END -->

            <!-- CONTENT START
            ============================================= -->
            <section id="content">

                <!-- BANNER START
                ============================================= -->
                <div class="banner large text-center wow fadeInUp">
                    <div class="container">
                        <div class="row">
                            <h1 class="no-margin">Bienvenidos <span class="yellow-text">Edyno estudio</span> </h1>
                        </div>
                    </div>
                </div>
                <!-- BANNER END -->

                <!-- ABOUT US SECTION START
                ============================================= -->
                <div class="about-us no-padding-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 wow fadeIn">
                                <div class="heading-block">
                                    <h2>Escuela de videojuegos</h2>
                                </div>
                                <p>
                                    Primer taller dedicado a enseñar modelado 3d, rigg y 
                                    programación a niños menores de 17 años en el estado de 
                                    Oaxaca. Decidimos compartir con ellos la experiencia que 
                                    hemos tenido por años para poder magnificar el alcance y
                                     la creatividad de estos jóvenes impulsando un paradigma 
                                     educativo integral que les permita validarse en diferentes
                                      áreas para encontrar cuál es en la que se pueden desempeñar 
                                      con mayor fluidez y que los hace sentir cómodos con sus 
                                      habilidades con el fin de fortalecerlas.

                                </p>
                                <p>
                                    Una vez que encuentran cuál es la habilidad que desean 
                                    magnificar se integran a un plan de desarrollo específico 
                                    en el cual construyen habilidades técnicas muy puntuales 
                                    para cada área artística o programática.

                                </p>
                                <div class="button-normal green">
                                    <a href="#">Ver mas</a>
                                </div>
                            </div>

                            <div class="about-img col-md-6 wow fadeInLeft">
                                <img src="img/ninos.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ABOUT US SECTION END -->

                <!-- FEATURES SECTION START
                ============================================= -->
                <div class="our-features grey-background">
                    <div class="container">
                        <div class="heading-block wow fadeIn">
                            <h2>Nuestras actividades</h2>
                            <h4 class="tagline">Tenemos participación en diferentes ramas de la industria</h4>
                        </div>

                        <div class="row">
                            <div class="features">
                                <div class="feature-item custom-food col-md-4 wow fadeInUp">
                                    <div class="feature-icon">
                                        <div class="icon icon-computers10"></div>
                                    </div>
                                    <div class="feature-desc">
                                        <h4>Desarrollo de software</h4>
                                    <p>
                                        Desarrollo de software para empresas que necesitan sistemas complejos en diferentes plataformas para facilitar el manejo administrativo y de logística.                                    </p>    
                                    </div>
                                </div>

                                <div class="feature-item many-support col-md-4 wow fadeInUp">
                                    <div class="feature-icon">
                                        <div class="icon icon-maths5"></div>
                                    </div>
                                    <div class="feature-desc">
                                        <h4>Talleres para escuelas unidades educativas</h4>
                                        <p>
                                            Capacitaciones técnicas en el desarrollo audiovisual para colectivos o escuelas que requieran de transmitir este conocimiento a sus usuarios.
                                        </p>
                                    </div>
                                </div>

                                <div class="feature-item bus-service col-md-4 wow fadeInUp">
                                    <div class="feature-icon">
                                        <div class="icon icon-paint81"></div>
                                    </div>
                                    <div class="feature-desc">
                                        <h4>Construcción de assets personalizados.</h4>
                                    <p>
                                        Desarrollo de recursos programáticos y modelos 3D para proyectos personales o industriales diseñados a medida desde un modelo Outsorcing.
                                    </p> 
                                    </div>
                                </div>

                                <div class="feature-item music-lesson col-md-4 wow fadeInUp">
                                    <div class="feature-icon">
                                        <div class="icon icon-paint81"></div>
                                    </div>
                                    <div class="feature-desc">
                                        <h4>Diseño de assets</h4>
                                        <p>
                                            Desarrollo de recursos programáticos y modelos 3D para proyectos personales o industriales reutilizables para múltiples proyectos    
                                        </p>                                    
                                    </div>
                                </div>

                                <div class="feature-item excursions col-md-4 wow fadeInUp">
                                    <div class="feature-icon">
                                        <div class="icon icon-rugby-ball"></div>
                                    </div>
                                    <div class="feature-desc">
                                        <h4>Taller continuo de expresión.</h4>
                                        <p>
                                            Talleres de modelado 3D, animación y texturizado a mediano plazo y largo plazo basado en proyectos (siempre jugando).
                                        </p>
                                    </div>
                                </div>

                                <div class="feature-item languages col-md-4 wow fadeInUp">
                                    <div class="feature-icon">
                                        <div class="icon icon-bars2"></div>
                                    </div>
                                    <div class="feature-desc">
                                        <h4>Taller continuo programático.</h4>
                                        <p>Taller de programación desde básico a avanzado iniciando a edades cortas que acompañan y construyen a un programador competente.</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- FEATURES SECTION END -->

                <!-- FACILITY SECTION START
                ============================================= -->
                <div class="our-facility with-bg-image" style="background-image: url('img/fondo800x533.png')">
                    <div class="container">
                        <div class="row">
                            <div class="facility-item col-md-3 text-center wow fadeIn">
                                <div class="counter-number">
                                    <h2 class="counter">2</h2>
                                </div>
                                <h4 class="title">Libros con realidad aumentada</h4>
                                <p>Éstos proyectos están listos para pre ordenar</p>
                            </div>

                            <div class="facility-item col-md-3 text-center wow fadeIn">
                                <div class="counter-number">
                                    <h2 class="counter">36</h2>
                                </div>
                                <h4 class="title">Assets</h4>
                                <p>Recursos a la venta en 3D</p>
                            </div>

                            <div class="facility-item col-md-3 text-center wow fadeIn">
                                <div class="counter-number">
                                    <h2 class="counter">4</h2>
                                </div>
                                <h4 class="title">Talleres</h4>
                                <p>Talleres personalizados en activo constante, presenciales y a distancia</p>
                            </div>

                            <div class="facility-item col-md-3 text-center wow fadeIn">
                                <div class="counter-number">
                                    <h2 class="counter">6</h2>
                                </div>
                                <h4 class="title">Cortos animados del Doctor mounstruo</h4>
                                <p>Para concientizar acerca del impacto que tenemos como humanidad en este planeta que es prestado</p>
                            </div>
                        </div>
                    </div>
                    <div class="overlay dark"></div>
                </div>
                <!-- FEATURES SECTION END -->

                <!-- OUR TEACHER SECTION START
                ============================================= -->
                <div class="our-teacher">
                    <div class="container">
                        <div class="row">
                            <!-- Tab panes -->
                            <div class="teacher-profile-tab col-md-4"> 
                                <div role="tabpanel" class="teacher-desc fade in active" id="stela">
                                    <div class="heading-block">
                                        <h3>Instructores.</h3>
                                        <p class="position">Instructores personales a distancia y presenciales.</p>
                                    </div>
                                    <p>
                                        La escuela además del edificio físico tiene una plataforma llamada al LIZYMA en la cual nos permite comunicarnos y trabajar en tiempo real a través de un espacio virtual completamente seguro y privado.
                                    </p>
                                    <p>
                                        Somos un equipo pequeño pero nos caracteriza el amor con el que realizamos nuestra labor día con día para hacer la diferencia.
                                    </p>
                                    <ul class="no-padding">
                                        <li><a href="https://www.facebook.com/EdynoEstudio/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/edynoestudio" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://www.instagram.com/edynoestudio/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="https://www.pinterest.com.mx/EdynoEstudio/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>

                                <div role="tabpanel" class="teacher-desc fade in" id="kayla">
                                    <div class="heading-block">
                                        <h3>Kayla Lawrence</h3>
                                        <p class="position">Painting Teacher</p>
                                    </div>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lada tum, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lada tum, totam rem aperiam</p>
                                    <ul class="no-padding">
                                        <li><a href="http://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="http://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="http://linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>

                                <div role="tabpanel" class="teacher-desc fade in" id="stefanie">
                                    <div class="heading-block">
                                        <h3>Stefanie Moe</h3>
                                        <p class="position">Sport Teacher</p>
                                    </div>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lada tum, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque lada tum, totam rem aperiam</p>
                                    <ul class="no-padding">
                                        <li><a href="http://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="http://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="http://linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Tab Panes End -->
                            
                            <!-- Nav Tabs -->
                            <div class="teacher-photo col-md-8" role="tablist" id="planTabs">
                                <div class="row">
                                    <ul>
                                        <li role="presentation" class="teacher-photo-box col-md-4 active">
                                            <a href="#" aria-controls="stela"  data-toggle="tab">
                                                <img src="img/liz.png" alt="" />
                                            </a>
                                        </li>
                                        <li role="presentation" class="teacher-photo-box col-md-4 active">
                                            <a href="#" aria-controls="kayla"  data-toggle="tab">
                                                <img src="img/lalo.png" alt="" />
                                            </a>
                                        </li>
                                        <li role="presentation" class="teacher-photo-box col-md-4 active">
                                            <a href="#" aria-controls="stefanie"  data-toggle="tab">
                                                <img src="img/david.png" alt="" />
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Nav Tabs End -->
                        </div>
                    </div>
                </div>
                <!-- OUR TEACHER SECTION END -->

                <!-- BANNER SECTION START
                ============================================= -->
                <div class="banner small wow fadeIn">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 pull-left wow fadeInUp">
                                <h3>¿Sabes que talleres son perfectos para tu hijo?</h3>
                            </div>

                            <div class="col-md-4 wow fadeInUp">
                                <div class="button-normal white pull-right">
                                    <a href="https://www.messenger.com/t/EdynoEstudio" class="no-margin">Inscríbelo ahora!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BANNER SECTION END -->

                <!-- OUR CLASSES SECTION START
                ============================================= -->
                <div class="our-classes wow fadeIn">
                    <div class="container">
                        <div class="heading-block wow fadeIn">
                            <h2>Nuestros talleres disponibles</h2>
                        </div>

                        <div class="row">
                            <div class="classes">
                                <div class="col-md-6 wow fadeInUp">
                                    <a href="single-classes.html">
                                        <div class="class-item" style="background-color: #e57978;">
                                            <div class="class-img pull-right">
                                                <img src="img/personaje3d.png" alt="" />
                                                <div class="overlay dark"></div>
                                                <span><i class="fa fa-plus"></i></span>
                                            </div>

                                            <div class="class-details">
                                                <div class="class-desc">
                                                    <h4>Modelado de personajes</h4>
                                                    <p class="class-category">Modelado 3D, Texturizados, Rigg</p>
                                                    <p class="class-date">Modelado introductorio de personajes en 3D en el programa Blender.</p>
                                                </div>

                                                <div class="class-type">
                                                    <div class="class-year">
                                                        <h6 class="title">Edades</h6>
                                                        <p>12 a 17</p>
                                                    </div>

                                                    <div class="class-size">
                                                        <h6 class="title">Cupo</h6>
                                                        <p>8</p>
                                                    </div>

                                                    <div class="class-price">
                                                        <h3>$299<span>m</span></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-6 wow fadeInUp">
                                    <a href="single-classes.html">
                                        <div class="class-item" style="background-color: #fec02a;">
                                            <div class="class-img pull-right">
                                                <img src="img/videojuegos.png" alt="" />
                                                <div class="overlay dark"></div>
                                                <span><i class="fa fa-plus"></i></span>
                                            </div>

                                            <div class="class-details">
                                                <div class="class-desc">
                                                    <h4>Videojuegos</h4>
                                                    <p class="class-category">Modelado 3D, Programación, unity, Blender</p>
                                                    <p class="class-date">Taller integral de desarrollo de videojuegos basado en un programa anual.</p>
                                                </div>

                                                <div class="class-type">
                                                    <div class="class-year">
                                                        <h6 class="title">Edades</h6>
                                                        <p>12 a 17</p>
                                                    </div>

                                                    <div class="class-size">
                                                        <h6 class="title">Cupo</h6>
                                                        <p>8</p>
                                                    </div>

                                                    <div class="class-price">
                                                        <h3>$599<span>m</span></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-6 wow fadeInUp">
                                    <a href="single-classes.html">
                                        <div class="class-item" style="background-color: #59bec9;">
                                            <div class="class-img pull-right">
                                                <img src="img/code.png" alt="" />
                                                <div class="overlay dark"></div>
                                                <span><i class="fa fa-plus"></i></span>
                                            </div>

                                            <div class="class-details">
                                                <div class="class-desc">
                                                    <h4>Desarrollo de aplicaciones</h4>
                                                    <p class="class-category">Ionic, Laravel</p>
                                                    <p class="class-date">Desarrollo de aplicación backend y frontend</p>
                                                </div>

                                                <div class="class-type">
                                                    <div class="class-year">
                                                        <h6 class="title">Edades</h6>
                                                        <p>22 a 49</p>
                                                    </div>

                                                    <div class="class-size">
                                                        <h6 class="title">Cupo</h6>
                                                        <p>6</p>
                                                    </div>

                                                    <div class="class-price">
                                                        <h3>$599<span>m</span></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-md-6 wow fadeInUp">
                                    <a href="single-classes.html">
                                        <div class="class-item" style="background-color: #7fb881;">
                                            <div class="class-img pull-right">
                                                <img src="img/modelado.jpg" alt="" />
                                                <div class="overlay dark"></div>
                                                <span><i class="fa fa-plus"></i></span>
                                            </div>

                                            <div class="class-details">
                                                <div class="class-desc">
                                                    <h4>Modelado 3D orgánico</h4>
                                                    <p class="class-category">Blender</p>
                                                    <p class="class-date">Taller de modelado orgánico 3D para ambientes de impresión 3D.</p>
                                                </div>

                                                <div class="class-type">
                                                    <div class="class-year">
                                                        <h6 class="title">Edades</h6>
                                                        <p>14 a 35</p>
                                                    </div>

                                                    <div class="class-size">
                                                        <h6 class="title">Cupo</h6>
                                                        <p>6</p>
                                                    </div>

                                                    <div class="class-price">
                                                        <h3>$599<span>m</span></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- OUR CLASSES SECTION END -->

                <!-- OUR CLASSES SCRIPT START -->
                <script type="text/javascript">
                    jQuery(window).load(function(){
                        var classDetailsHeight = jQuery('.class-item img').height();
                        jQuery(".class-details").css("height", classDetailsHeight);
                    });
                </script>
                <!-- OUR CLASSES SCRIPT END -->

                <!-- TESTIMONIAL SECTION START
                ============================================= -->
                <div class="testimonial with-bg-image" style="background-image: url('img/fondoNino.png')">
                    <div class="container">
                        <div class="row">
                            <div class="testimonial-wrap text-center wow fadeIn">
                                <div class="testimonial-item flexslider">
                                    <ul class="slides">
                                        <li>
                                            <div class="review">
                                                <p class="text">“ El doctor monstruo de los planetas<br>Libro de realidad aumentada con el personaje más increíble del mundo.”</p>
                                                <h5 class="title">El buen Dr. M</h5>
                                                <h6 class="position">Nuestro proyecto estrella</h6>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="review">
                                                <p class="text">Gala aventuras en el tiempo es el primer cómic que realizamos como equipo.</p>
                                                <h5 class="title">Nuestro primer gran proyecto</h5>
                                                <h6 class="position">Libro infantil con realidad aumentada</h6>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="overlay dark"></div>
                </div>
                <!-- TESTIMONIAL SECTION END -->

            </section>
            <!-- CONTENT END -->

            <!-- FOOTER START
            ============================================= -->
            <footer id="footer">
                <div class="container">
                    <div class="row">
                        
                        <!-- WIDGET FOOTER 1 START
                        ============================================= -->
                        <div class="widget-footer col-md-4 wow fadeIn">
                            <div class="short-desc">
                                <div class="logo-footer">
                                    <img src="{{asset('img/logo.png')}}" style="height: 65px" alt="" />
                                </div>
                                <p>
                                    En EdynoEstudio desarrollamos contenido para mantenernos todo el tiempo en la vanguardia y entregar actividades de calidad a todos nuestros alumnos.
                                </p>
                                <p>
                                    Todos seamos parte de esta historia y brindemos herramientas innovadoras dignas de primer mundo en nuestra hermosa ciudad de Oaxaca.
                                </p>
                            </div>
                        </div>
                        <!-- WIDGET FOOTER 1 END -->

                       
                        <!-- WIDGET FOOTER 2 END -->

                        <!-- WIDGET FOOTER 3 START
                        ============================================= -->
                        <div class="widget-footer col-md-4 wow fadeIn">
                            <div class="contact-footer">
                                <h4 class="title">Contactanos</h4>
                                <div class="footer-content">
                                    <div class="contact-section">
                                        <h4>Oficinas</h4>
                                        <p class="no-margin-bottom">Andador el cobre número 5</p>
                                        <p class="no-margin-bottom">Manzana y sexta etapa Infonavit 1 de mayo</p>
                                        <p>Oaxaca de Juárez Oaxaca</p>
                                        <p class="no-margin-bottom">Telefono : +52 951 13 9 20 07</p>
                                        <p class="no-margin-bottom">Email : eduardo@miedyno.com</p>
                                    </div>
                                    {{-- <div class="contact-section">
                                        <h4>Our School Address</h4>
                                        <p class="no-margin-bottom">Boulevard des Capucines</p>
                                        <p class="no-margin-bottom">356, Coffee Street</p>
                                        <p>Paris, France</p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    
                        <!-- WIDGET FOOTER 3 END -->

                         <!-- WIDGET FOOTER 4 START
                        ============================================= -->
                        <div class="widget-footer col-md-4 wow fadeIn">
                            <div class="buy-now">
                                <h4 class="title">Se parte de esta aventura</h4>
                                <div class="footer-content">
                                    <p>
                                        Se parte de cualquiera de nuestros talleres ya sea en presencial o a distancia a través de nuestra plataforma no dejes que pase más tiempo.
                                    </p>
                                    <p>
                                        Si eres de Oaxaca pregunta por nuestras promociones.
                                    </p>
                                    <div class="button-normal white">
                                        <a href="https://www.messenger.com/t/EdynoEstudio">Inscríbete ahora</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <!-- WIDGET FOOTER 4 END -->
                    </div>
                </div>
            </footer>
            <!-- FOOTER END -->

            <!-- COPYRIGHT START
            ============================================= -->
            <div id="copyright">
                <div class="container">
                    <div class="row">
                        <!-- Copyright Text Start -->
                        <div class="copyright-text col-md-6">
                            <p>Copyright 2020 |  All Rights Reserved </p>
                        </div>
                        <!-- Copyright Text End -->

                        <!-- Social LInks Start -->
                        <div class="social-links col-md-6">
                            <ul class="no-padding">
                                <li><a href="https://www.facebook.com/EdynoEstudio/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/edynoestudio" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/edynoestudio/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.pinterest.com.mx/EdynoEstudio/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <!-- Social Links End -->
                    </div>
                </div>
            </div>
            <!-- COPYRIGHT END -->

        </div>
        <!-- MAIN WRAPPER END -->

        <!-- Footer Scripts
        ============================================= -->
        <!-- External -->
        
        <script type="text/javascript" src="js/plugin.js"></script>
        <script type="text/javascript" src="js/main.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function() {

                jQuery(".flexslider-wrap .flexslider").flexslider({
                    animation: "fade",
                    animationLoop: true,
                    animationSpeed: 1500,
                    slideshow: true,
                    pauseOnHover: false,
                    controlNav: false,
                    directionNav: true
                });

            });
        </script>
    </body>
</html>