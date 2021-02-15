@extends('ux.root')

@section('createAliado')

    <!-- CONTENT START
                    ============================================= -->
    <section id="content" class="single-wrapper">
        <!-- Page Title -->
        <div class="grey-background wow fadeIn">
            <div class="container">
                <div class="heading-block page-title wow fadeInUp">
                    <h1>Nuevo Cliente</h1>
                </div>
            </div>
            <!-- CONTACT CONTENT START
                        ============================================= -->
            <div class="contact-section">
                <div class="container">
                    <div class="row">



                    
                        </div>

                        {!! Form::open(['route' => 'cliente_user.store']) !!}

      <!-- Submit Field -->
      <div class="form-group col-sm-8">
                        
                        <!-- Estado Id Field -->
                            {!! Form::select('estado_id', $estados, null, ['class' => 'form-control']) !!}

                        <!-- User Id Field -->
                            
                            <br>

                            <!-- Estado Id Field -->

                            <input type="text" name="nombre" id="nombre" placeholder=" Nombre" />
                        
                            <input type="text" name="direcion" id="direcion" placeholder="Direcion" />

                            <input type="text" name="correo" id="correo" placeholder="Correo" />
                            
                            <input type="text" name="telefono" id="telefono" placeholder="Telefono" />
                            
                            <textarea name="descripcion" id="descripcion" cols="45" rows="12" placeholder="Descripcion"></textarea>
                        
                            <button class="submit button-normal green">Registrar</button>

                            <a href="{{ route('cliente_user.index') }}" class="btn btn-default">Regresar</a>
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

