@extends('ux.root')

@section('contenido_index_aliado')




     <!-- FEATURES SECTION START
                ============================================= -->
                <div class="our-features grey-background">
                    <div class="container">
                        <div class="heading-block wow fadeIn">
                            <br>
                            <h2>Nuestros aliados</h2>
                            <h4 class="tagline">Tenemos participación en diferentes ramas de la industria</h4>
                        </div>

                        <div class="row">
                            
                            
                            <div class="features">

                                @foreach ($aliados as $aliado)
                                    
                                

                                <div class="feature-item custom-food col-md-4 wow fadeInUp">
                                    <a href="{{ route('aliado.show', $aliado->id) }}">
                                        <div class="feature-icon">
                                            <div class="icon icon-computers10"></div>
                                        </div>
                                    </a>
                                    <div class="feature-desc">
                                        <h4>{{ $aliado->nombre }}</h4>
                                        <p>{{ substr($aliado->descripcion,0,120) }} </p>    
                                    </div>
                                </div>

                                @endforeach
                                
                                {{ $aliados->render() }}
                                

                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- FEATURES SECTION END -->

@endsection

