@section('servicio')
<!-- BANNER SECTION START
                ============================================= -->
                <div class="banner small wow fadeIn">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 pull-left wow fadeInUp">
                                <div class="row">
                                    <h1 class="no-margin">Servicios <span class="yellow-text">y Productos</span> </h1>
                                </div>
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
                            <h2>Nuestros Servicios</h2>
                        </div>


                    @foreach ($servicios as $servicio)
                        
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
                                                    <h4>{{ $servicio->nombre }}</h4>
                                                    <p class="class-category">{{ $servicio->descripcion }}</p>
                                                    <p class="class-date">Modelado introductor</p>
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
                            </div>
 
                    @endforeach

                </div>
                </div>
                <!-- OUR CLASSES SECTION END -->
@endsection