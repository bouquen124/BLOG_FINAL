@extends('ux.root')


@section('contenido_cliente_show')


     <!-- FEATURES SECTION START
                ============================================= -->
                <div class="our-features grey-background">
                    <div class="container">

                        <div class="heading-block wow fadeIn">
                            <br>
                            <h2>Nombre:{{ $cliente->nombre }}</h2>
                            
                            <a href="  {{ route('cliente_user.edit', $cliente->id) }} " >
                                <h4 class="tagline">
                                    Editar

                                </h4>
                            </a>
                            
                        </div>

                        <div class="row">
                            
                            
                            <div class="features">

                                <div class="feature-item custom-food col-md-4 wow fadeInUp">
                                    
                                    <div class="feature-icon">
         
                                            @foreach ($imagenes as $item)
                                            <img src="{{ $item->url }}" alt="" width="500">
                                            @endforeach

                                         

                                        </div>
                                    </div>

                                </div>

                                    <div class="feature-desc">
                        
                                        <h4>Direcion: {{ $cliente->direccion }} </h4>    
                                        <h4>Correo:  {{ $cliente->correo }} </h4>    
                                        <h4>Telefono:  {{ $cliente->telefono }} </h4>  
        
                                            <p>Descripcion:{{ $cliente->descripcion }} </p>
                                                  
                                    
                                    </div>
                                

                            </div>
                            
                            {!! Form::open(['route' => ['aliado.destroy', $cliente->id], 'method' => 'delete']) !!}
                            {!! Form::button('Eliminar', ['type' => 'submit', 'onclick' => "return confirm('Seguro que quiere borrar este Aliado?')"]) !!}
                            {!! Form::close() !!}    
                            

                            <a href="{{ route('cliente_user.index') }}" class="btn btn-default">Regresar</a>
                            <a href="{{ route('ilustrables_user.create', ['id'=>$cliente->id, 'type'=>'Aliado', 'back'=>Request::path() ]) }}"><button class="btn btn-primary btn-md">Agregar Imagen</button></a>

                        </div>
                    </div>

                       
                   
                </div>
                <!-- FEATURES SECTION END -->
                
    
@endsection