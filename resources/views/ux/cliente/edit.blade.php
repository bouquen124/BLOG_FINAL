@extends('ux.root')

@section('editcliente')

    <!-- CONTENT START
                    ============================================= -->
    <section id="content" class="single-wrapper">
        <!-- Page Title -->
        <div class="grey-background wow fadeIn">
            <div class="container">
                <div class="heading-block page-title wow fadeInUp">
                    <h1>Editar Cliente</h1>
                </div>
            </div>
            <!-- CONTACT CONTENT START
                        ============================================= -->
            <div class="contact-section">
                <div class="container">
                    <div class="row">



                    
                        </div>

                        {!! Form::model($cliente, ['route' => ['cliente_user.update', $cliente->id], 'method' => 'patch']) !!}


                        
                        <!-- Estado Id Field -->
                            {!! Form::select('estado_id', $estados, null, ['class' => 'form-control']) !!}

                        <!-- User Id Field -->
                            
                            <br>

                            <!-- Estado Id Field -->

                            <input type="text" value="{{ $cliente->nombre }}" name="nombre" id="nombre" placeholder=" Nombre" />
                        
                            <input type="text" value="{{ $cliente->direcion }}" name="direcion" id="direcion" placeholder="Direcion" />

                            <input type="text" value="{{ $cliente->correo }}" name="correo" id="correo" placeholder="Correo" />
                            
                            <input type="text" value="{{ $cliente->telefono }}" name="telefono" id="telefono" placeholder="Telefono" />
                            
                  

                            <textarea value="{{ $cliente->descripcion }}" name="descripcion" id="descripcion" cols="45" rows="12" placeholder="Descripcion">{{ $cliente->descripcion }}</textarea>
                           

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

