@extends('ux.root')

@section('editPost')

    <!-- CONTENT START
                    ============================================= -->
    <section id="content" class="single-wrapper">
        <!-- Page Title -->
        <div class="grey-background wow fadeIn">
            <div class="container">
                <div class="heading-block page-title wow fadeInUp">
                    <h1>Editar Post</h1>
                </div>
            </div>
            <!-- CONTACT CONTENT START
                        ============================================= -->
            <div class="contact-section">
                <div class="container">
                    <div class="row">



                    
                        </div>


                        {!! Form::model($post, ['route' => ['blog.update', $post->id], 'method' => 'patch']) !!}


                        <!-- Estado Id Field -->
                            {!! Form::select('estado_id', $estados, null, ['class' => 'form-control']) !!}
                        

                        <!-- User Id Field -->
                            {{-- <select type="select" name="user_id" id="user_id" placeholder="user" ></select> --}}

                            {!! Form::hidden('user_id', auth::user()->id, null, ['class' => 'form-control']) !!}
                        

                            <br>

                        <!-- Contenido Field -->
                            <input type="text" value="{{$post->titulo}}" name="titulo" id="titulo" placeholder="{{$post->titulo}}" />
                        

                            <input type="text" value="{{$post->subtitulo}}" name="subtitulo" id="subtitulo" placeholder="{{$post->subtitulo}}" />

                            <textarea value="{{$post->contenido}}" name="contenido" id="contenido" cols="45" rows="12" placeholder="{{$post->contenido}}">{{$post->contenido}}</textarea>
                           

                        <!-- Submit Field -->
                        <div class="form-group col-sm-12" style="float: left; width: 20%;">
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
