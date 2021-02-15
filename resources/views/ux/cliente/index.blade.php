@extends('ux.root')

@section('contenido_index_cliente')




     <!-- FEATURES SECTION START
                ============================================= -->
                <div class="our-features grey-background">
                    <div class="container">
                        <div class="heading-block wow fadeIn">
                            <br>
                            <h2>Nuestros Clientes</h2>
                            <h4 class="tagline">Tenemos participación en diferentes ramas de la industria</h4>
                        </div>

                        <div class="row">
                            <div class="features">

                           
                                
                                @foreach ($clientes as $cliente)
                                    
                                

                                <div class="feature-item custom-food col-md-4 wow fadeInUp">
                                    <a href="{{ route('cliente_user.show', $cliente->id) }}">
                                      
                                     
                                        <div class="feature-icon">

                                            @if ($cliente->Fotocliente)
                                             <img src="{{$cliente->Fotocliente->url}}" width="100px" alt="" /> 
                                             @endif 
                                         </div>
                                      
                                    </a>
                                    <div class="feature-desc">
                                        <h4>{{ $cliente->nombre }}</h4>
                                        <p>{{ substr($cliente->descripcion,0,120) }} </p>    
                                    </div>
                                </div>

                                @endforeach
                                
                            
                                

                            </div>
                            
                          
                            
                        </div>
                    </div>
                </div>
                <!-- FEATURES SECTION END -->

@endsection

