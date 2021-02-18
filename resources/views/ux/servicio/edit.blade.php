@extends('ux.root')

@section('editAliado')

    <!-- CONTENT START
                    ============================================= -->
    <section id="content" class="single-wrapper">
        <!-- Page Title -->
        <div class="grey-background wow fadeIn">
            <div class="container">
                <div class="heading-block page-title wow fadeInUp">
                    <h1>Editar Servicio</h1>
                </div>
            </div>
            <!-- CONTACT CONTENT START
                        ============================================= -->
            <div class="contact-section">
                <div class="container">
                    <div class="row">



                    
                        </div>

                        {!! Form::model($servicio, ['route' => ['servicio_user.update', $servicio->id], 'method' => 'patch']) !!}


                        {!! Form::select('estado_id', $estados, null, ['class' => 'form-control']) !!}

                        <br>
                                                    {!! Form::select('categoria_id', $categorias, null, ['class' => 'form-control']) !!}
                        
                                                <!-- User Id Field -->
                                                    
                                                    <br>
                        
                                                    <!-- Estado Id Field -->
                        
                                                    <input type="text" value="{{$servicio->nombre}}" name="nombre" id="nombre" placeholder=" Nombre" />
                                                
                                     
                        
                                                    <input type="text" value="{{$servicio->costo}}" name="costo" id="costo" placeholder="costo" />


                                                    <input type="text" value="{{$servicio->descripcion}}" name="descripcion" id="descripcion" placeholder="descripcion" />
                        
                                                   
                                                   
                        <!-- Submit Field -->
                        <div class="form-group col-sm-12">
                            <button class="submit button-normal green">Registrar</button>
                        </div>

                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
            <!-- CONTACT CONTENT END -->
        </div>
    </section>
    <!-- CONTENT END -->

    @endsection

