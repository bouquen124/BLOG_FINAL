@section('producto')
  <!-- OUR CLASSES SECTION START
                ============================================= -->
                <div class="our-classes wow fadeIn">
                    <div class="container">
                        <div class="heading-block wow fadeIn">
                            <h2>Nuestros Productos</h2>
                        </div>


                    @foreach ($productos as $producto)
                        
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
                                                    <h4>{{ $producto->nombre }}</h4>
                                                    <p class="class-category">{{ $producto->descripcion }}</p>
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
                            </div>
 
                    @endforeach

                </div>
                </div>
                <!-- OUR CLASSES SECTION END -->
@endsection