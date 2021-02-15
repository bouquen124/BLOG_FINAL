<!DOCTYPE html>
<html dir="ltr" lang="en-US">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />

        <!-- Google Fonts
        ============================================= -->
        <link href='https://fonts.googleapis.com/css?family=Dosis:400,500,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

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
        <title>Kindergarten | Kindergarden HTML Themes</title>

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

            @include('ux.fragment.header')
            @yield('header')
            
                @yield('contenidohome')

                @yield('contenidoPost')
                @yield('createPost')
                @yield('editPost')
                @yield('cotenido_index_post')

            
                @yield('contenido_aliado_show')
                @yield('contenido_index_aliado')
                @yield('createAliado')
                @yield('editAliado')
                @yield('content_ilu')
                @yield('contenido_index_cliente')
                @yield('contenido_cliente_show')
                @yield('editcliente')
                @yield('createproducto')
                @yield('createproducto')


            @include('ux.fragment.footer')
            @yield('footer')



      

            <!-- COPYRIGHT START
            ============================================= -->
            <div id="copyright">
                <div class="container">
                    <div class="row">
                        <!-- Copyright Text Start -->
                        <div class="copyright-text col-md-6">
                            <p>Copyright 2015 |  All Rights Reserved | Powered by Themesawesome</p>
                        </div>
                        <!-- Copyright Text End -->

                        <!-- Social LInks Start -->
                        <div class="social-links col-md-6">
                            <ul class="no-padding">
                                <li><a href="http://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="http://tumblr.com" target="_blank"><i class="fa fa-tumblr"></i></a></li>
                                <li><a href="http://vimeo.com" target="_blank"><i class="fa fa-vimeo"></i></a></li>
                                <li><a href="http://dribbble.com" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="http://instagram.com" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="http://rss.com" target="_blank"><i class="fa fa-rss"></i></a></li>
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
        <script type="text/javascript" src="{{asset('js/plugin.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/main.js')}}"></script>

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