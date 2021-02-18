@extends('ux.root')

@section('contenido_index_aliado')




     <!-- FEATURES SECTION START
                ============================================= -->
                <div class="our-features grey-background">
                    <div class="container">
                        <div class="heading-block wow fadeIn">
                            <br>
                            <h2>Nuestros Servicios</h2>
                            <h4 class="tagline">Tenemos una amplia gama de servicios</h4>
                        </div>

                        <div class="row">
                            
                            
                            <div class="features">

                           
                                
                                 @foreach ($servicios as $servicio)
                                    
                                

                                <div class="feature-item custom-food col-md-4 wow fadeInUp">
                                    <a href="{{ route('servicio_user.show', $servicio->id) }}">
                                        <div class="feature-icon">

                                            @if ($servicio->Fotoservicio)
                                            <img src="{{$servicio->Fotoservicio->url}}" width="100px" alt="" /> 
                                            @endif 
                                        </div>
                                    </a>
                                    <div class="feature-desc">
                                        <h4>Nombre:  {{ $servicio->nombre }}</h4>
                                        <p>Precio:   ${{ substr($servicio->costo,0,120) }} </p>    
                                    </div>
                                </div>

                                @endforeach
                           
                            
                                

                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- FEATURES SECTION END -->

@endsection
