@extends('ux.root')


@section('contenido_aliado_show')


     <!-- FEATURES SECTION START
                ============================================= -->
                <div class="our-features grey-background">
                    <div class="container">

                        <div class="heading-block wow fadeIn">
                            <br>
                            <h2>Nombre:{{ $servicio->nombre }}</h2>
                            
                            <a href="  {{ route('servicio_user.edit', $servicio->id) }} " >
                                <h4 class="tagline">
                                    Editar

                                </h4>
                            </a>
                            
                        </div>

                        <div class="row">
                            
                            
                            <div class="features">

                                <div class="feature-item custom-food col-md-4 wow fadeInUp">
                                    
                                    <div class="feature-icon">
                                        <div>

                                          @foreach ($imagenes as $item)
                                            <img src="{{ $item->url }}" alt="" width="500">
                                            @endforeach 

                                           

                                        </div>
                                    </div>

                                </div>

                                    <div class="feature-desc">
                        
                                         
                                        <h4>Precio:  {{ $servicio->costo }} </h4>    
                                       
                                      
                                            <h4>Descripcion:{{ $servicio->descripcion }} </h4>
                                              
                                    
                                    </div>
                                

                            </div>
                            
                            {!! Form::open(['route' => ['servicio_user.destroy', $servicio->id], 'method' => 'delete']) !!}
                            {!! Form::button('Eliminar', ['type' => 'submit', 'onclick' => "return confirm('Seguro que quiere borrar este Producto?')"]) !!}
                            {!! Form::close() !!}    
                            

                            <a href="{{ route('servicio_user.index') }}" class="btn btn-default">Regresar</a>
                            <a href="{{ route('ilustrables_user.create', ['id'=>$servicio->id, 'type'=>'Servicio', 'back'=>Request::path() ]) }}"><button class="btn btn-primary btn-md">Agregar Imagen</button></a>

                        </div>
                    </div>

                       
                   
                </div>
                <!-- FEATURES SECTION END -->
                
    
@endsection