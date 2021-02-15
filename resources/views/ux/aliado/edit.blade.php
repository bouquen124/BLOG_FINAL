@extends('ux.root')

@section('editAliado')

    <!-- CONTENT START
                    ============================================= -->
    <section id="content" class="single-wrapper">
        <!-- Page Title -->
        <div class="grey-background wow fadeIn">
            <div class="container">
                <div class="heading-block page-title wow fadeInUp">
                    <h1>Editar Aliado</h1>
                </div>
            </div>
            <!-- CONTACT CONTENT START
                        ============================================= -->
            <div class="contact-section">
                <div class="container">
                    <div class="row">



                    
                        </div>

                        {!! Form::model($aliado, ['route' => ['aliado.update', $aliado->id], 'method' => 'patch']) !!}


                        
                        <!-- Estado Id Field -->
                            {!! Form::select('estado_id', $estados, null, ['class' => 'form-control']) !!}

                        <!-- User Id Field -->
                            
                            <br>

                            <!-- Estado Id Field -->

                            <input type="text" value="{{ $aliado->nombre }}" name="nombre" id="nombre" placeholder=" Nombre" />
                        
                            <input type="text" value="{{ $aliado->direcion }}" name="direcion" id="direcion" placeholder="Direcion" />

                            <input type="text" value="{{ $aliado->correo }}" name="correo" id="correo" placeholder="Correo" />
                            
                            <input type="text" value="{{ $aliado->telefono }}" name="telefono" id="telefono" placeholder="Telefono" />
                            
                            <input type="text" value="{{ $aliado->facebook }}" name="facebook" id="facebook" placeholder="facebook" />
                            
                            <input type="text" value="{{ $aliado->twitter }}" name="twitter" id="twitter" placeholder="Twitter" />

                            <input type="text" value="{{ $aliado->instagram }}" name="instagram" id="instagram" placeholder="Instagram" />

                            <textarea value="{{ $aliado->descripcion }}" name="descripcion" id="descripcion" cols="45" rows="12" placeholder="Descripcion">{{ $aliado->descripcion }}</textarea>
                           

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

