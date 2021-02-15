@extends('ux.root')


@section('contenido_aliado_show')


     <!-- FEATURES SECTION START
                ============================================= -->
                <div class="our-features grey-background">
                    <div class="container">

                        <div class="heading-block wow fadeIn">
                            <br>
                            <h2>Nombre:{{ $aliado->nombre }}</h2>
                            
                            <a href="  {{ route('aliado.edit', $aliado->id) }} " >
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
                        
                                        <h4>Direcion: {{ $aliado->direccion }} </h4>    
                                        <h4>Correo:  {{ $aliado->correo }} </h4>    
                                        <h4>Telefono:  {{ $aliado->telefono }} </h4>   
                                        <h4>Facebook:    {{ $aliado->facebook }} <br> <br>Twiter: {{ $aliado->twitter }} <br> <br>Instagram: {{ $aliado->instagram }}</h4> 
                                            
                                            
                                        <div style="float: left; width: 100%;"> 
                                            <p>Descripcion:{{ $aliado->descripcion }} </p>
                                        </div>            
                                    
                                    </div>
                                

                            </div>
                            
                            {!! Form::open(['route' => ['aliado.destroy', $aliado->id], 'method' => 'delete']) !!}
                            {!! Form::button('Eliminar', ['type' => 'submit', 'onclick' => "return confirm('Seguro que quiere borrar este Aliado?')"]) !!}
                            {!! Form::close() !!}    
                            

                            <a href="{{ route('aliado.index') }}" class="btn btn-default">Regresar</a>
                            <a href="{{ route('ilustrables_user.create', ['id'=>$aliado->id, 'type'=>'Aliado', 'back'=>Request::path() ]) }}"><button class="btn btn-primary btn-md">Agregar Imagen</button></a>

                        </div>
                    </div>

                       
                   
                </div>
                <!-- FEATURES SECTION END -->
                
    
@endsection