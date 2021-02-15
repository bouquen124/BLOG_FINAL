@extends('ux.root')

@section('contenido_index_aliado')




     <!-- FEATURES SECTION START
                ============================================= -->
                <div class="our-features grey-background">
                    <div class="container">
                        <div class="heading-block wow fadeIn">
                            <br>
                            <h2>Nuestros Productos</h2>
                            <h4 class="tagline">Tenemos participación en diferentes ramas de la industria</h4>
                        </div>

                        <div class="row">
                            
                            
                            <div class="features">

                           
                                
                                 @foreach ($productos as $producto)
                                    
                                

                                <div class="feature-item custom-food col-md-4 wow fadeInUp">
                                    <a href="{{ route('producto_user.show', $producto->id) }}">
                                        <div class="feature-icon">

                                           @if ($producto->Fotoproducto)
                                            <img src="{{$producto->Fotoproducto->url}}" width="100px" alt="" /> 
                                            @endif 
                                        </div>
                                    </a>
                                    <div class="feature-desc">
                                        <h4>Nombre:  {{ $producto->nombre }}</h4>
                                        <p>Precio:   ${{ substr($producto->costo,0,120) }} </p>    
                                    </div>
                                </div>

                                @endforeach
                           
                            
                                

                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- FEATURES SECTION END -->

@endsection
