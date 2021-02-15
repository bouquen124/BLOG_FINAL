@extends('ux.root')

@section('createPost')

    <!-- CONTENT START
                    ============================================= -->
    <section id="content" class="single-wrapper">
        <!-- Page Title -->
        <div class="grey-background wow fadeIn">
            <div class="container">
                <div class="heading-block page-title wow fadeInUp">
                    <h1>Nuevo Post</h1>
                </div>
            </div>
            <!-- CONTACT CONTENT START
                        ============================================= -->
            <div class="contact-section">
                <div class="container">
                    <div class="row">



                    
                        </div>

                        {!! Form::open(['route' => 'blog.store']) !!}


                        
                        <!-- Estado Id Field -->
                            {!! Form::select('estado_id', $estados, null, ['class' => 'form-control']) !!}

                        <!-- User Id Field -->
                            {{-- <select type="select" name="user_id" id="user_id" placeholder="user" ></select> --}}

                            {!! Form::hidden('user_id', auth::user()->id, null, ['class' => 'form-control']) !!}

                        <!-- Titulo Field -->
                            <br>

                            <input type="text" name="titulo" id="titulo" placeholder=" titulo" />
                        

                            <input type="text" name="subtitulo" id="subtitulo" placeholder="subtitulo" />

                            <textarea name="contenido" id="contenido" cols="45" rows="5"placeholder="Contenido"></textarea>
                           

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
