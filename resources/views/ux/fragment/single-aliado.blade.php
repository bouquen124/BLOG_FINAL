@section('aliado')
     <!-- FEATURES SECTION START
                ============================================= -->
                <div class="our-features grey-background">
                    <div class="container">
                        <div class="heading-block wow fadeIn">
                            <h2>Nuestros aliados</h2>
                            <h4 class="tagline">Tenemos participación en diferentes ramas de la industria</h4>
                        </div>

                        <div class="row">
                            
                            
                            <div class="features">

                                @foreach ($aliados as $aliado)
                                    
                                

                                <div class="feature-item custom-food col-md-4 wow fadeInUp">
                                    <div class="feature-icon">
                                        <div class="icon icon-computers10"></div>
                                    </div>
                                    <div class="feature-desc">
                                        <h4>{{ $aliado->nombre }}</h4>
                                    <p>Descripcion:{{ $aliado->descripcion }} </p>    
                                    </div>
                                </div>

                                @endforeach
                                <div class="conteiner">    
    
                                    <a href="{{ route('aliado.index') }}" class="btn btn-default">Regresar</a>
                                    <a href="{{ route('ilustrables_user.create', ['id'=>$post->id, 'type'=>'Post', 'back'=>Request::path() ]) }}"><button class="btn btn-primary btn-md">Agregar Imagen</button></a>
                                
                                </div>
                                

                            </div>
                            
                        </div>
                    </div>
                </div>


               
                <!-- FEATURES SECTION END -->
@endsection