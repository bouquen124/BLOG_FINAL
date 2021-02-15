@section('header')
            <!-- HEADER START
            ============================================= -->
            <header id="header" class="site-header clearfix">
                <div class="container">
                    <div class="row">
                        <!-- LOGO START
                        ============================================= -->
                        <div class="logo col-md-2">
                            <a href="{{ url('/') }}"><img src="{{asset('img/logo.png')}}" alt="Kindergarten Logo" /></a>
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

                            <nav id="c-menu--slide-right" class="c-menu c-menu--slide-right">
                                <button class="c-menu__close icon icon-remove-delete"></button>
                                <div class="logo-menu-right text-center">
                                    <img src="img/logo-white.png" alt="" />
                                </div>
                                <ul class="menus-mobile">
                                    <li><a href="index.html">Home</a></li>
                                    <li class="has-child">
                                        <a href="#">Page</a>
                                        <ul class="child">
                                           <li><a href="about-us.html">About Us</a></li>
                                           <li><a href="teacher.html">Teacher</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-child">
                                        <a href="classes.html">Classes</a>
                                        <ul class="child">
                                           <li><a href="single-classes.html">Single Classes</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="gallery.html">Gallery</a></li>

                                    <li class="has-child">
                                        <a href="blog.html">Blog</a>
                                        <ul class="child">
                                           <li><a href="single-post.html">Single Post</a></li>
                                        </ul>
                                    
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                            <div id="slide-overlay" class="slide-overlay"></div>
                            <!-- MOBILE MENU -->

                            <!-- MAIN NAVIGATION START
                            ============================================= -->
                            <nav id="main-menu" class="menu">
                                <ul id="menu-top-menu" class="menus">
                                    
                                    <li class="has-child {{ Request::is('/*') ? 'active' : '' }}">
                                    <a href="{{ url('/') }}">Home</a></li>
                                    <li class="has-child">
                                        <a href="#">Page</a>
                                        <ul class="child">
                                           <li><a href="about-us.html">About Us</a></li>
                                           <li><a href="teacher.html">Teacher</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-child {{ Request::is('producto_user*') ? 'active' : '' }}">
                                        <a href="{{ url('/producto_user') }}">Producto</a>
                                        <ul class="child">
                                           <li><a href="{{ route('producto_user.create') }}">Producto</a></li>
                                        </ul>
                                    </li>
                                    
                                    
                                    <li class="has-child {{ Request::is('cliente_user*') ? 'active' : '' }}">
                                        <a href="{{ url('/cliente_user') }}">clientes</a>
                                        <ul class="child">
                                           <li><a href="{{ route('cliente_user.create') }}">Agregar un nuevo cliente</a></li>
                                        </ul>
                                    </li>
                                    

                                    <li class="has-child {{ Request::is('blog*') ? 'active' : '' }}">
                                        <a href="{{ url('/blog') }}">Blog</a>
                                        <ul class="child">
                                           <li><a href="{{ route('blog.create') }}">Nuevo Post</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li class="has-child {{ Request::is('aliado*') ? 'active' : '' }}">
                                        <a href="{{ url('/aliado') }}">Aliados</a>
                                        <ul class="child">
                                            <li><a href="{{ route('aliado.create') }}">Nuevo Aliado</a></li>
                                        </ul>
                                    </li>
                                
                                </ul>
                            </nav>
                            <!-- MAIN NAVIGATION END -->
                        </div>
                        <!-- NAVIGATION END -->
                    </div>
                </div>
            </header>
            <!-- HEADER END -->
@endsection