@extends('ux.root')


@section('contenido_aliado_show')


     <!-- FEATURES SECTION START
                ============================================= -->
                <div class="our-features grey-background">
                    <div class="container">

                        <div class="heading-block wow fadeIn">
                            <br>
                            <h2>Nombre:{{ $producto->nombre }}</h2>
                            
                            <a href="  {{ route('producto_user.edit', $producto->id) }} " >
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
                        
                                         
                                        <h4>precio:  {{ $producto->costo }} </h4>    
                                       
                                      
                                            <h4>Descripcion:{{ $producto->descripcion }} </h4>
                                              
                                    
                                    </div>
                                

                            </div>
                            
                            {!! Form::open(['route' => ['producto_user.destroy', $producto->id], 'method' => 'delete']) !!}
                            {!! Form::button('Eliminar', ['type' => 'submit', 'onclick' => "return confirm('Seguro que quiere borrar este Producto?')"]) !!}
                            {!! Form::close() !!}    
                            

                            <a href="{{ route('producto_user.index') }}" class="btn btn-default">Regresar</a>
                            <a href="{{ route('ilustrables_user.create', ['id'=>$producto->id, 'type'=>'Producto', 'back'=>Request::path() ]) }}"><button class="btn btn-primary btn-md">Agregar Imagen</button></a>

                        </div>
                    </div>

                       
                   
                </div>
                <!-- FEATURES SECTION END -->
                
    
@endsection