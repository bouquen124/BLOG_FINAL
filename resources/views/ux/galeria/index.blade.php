@extends('ux.root')
@section('galeria')

@foreach ($ilustrables as $ilustrable)
<div class="gallery">
    <div class="container">
        <!-- Gallery Items
        ============================================= -->
   
        <div id="gallery" class="wow fadeIn clearfix">
            <div class="gallery-item exterior">
                <div class="wow fadeIn">
                    <a title="gallery" href="{{ $ilustrable->url }}">
                        <div class="gallery-image">
                            <img src="{{ $ilustrable->url }}" alt="" />
                            <div class="overlay dark"></div>
                            <span><i class="fa fa-plus"></i></span>
                        </div>
                    </a>
                </div>
            </div>

         
        </div>
        @endforeach
     
        <!-- Gallery Items End -->

        <!-- infinite load button start -->
  
        <!-- infinite load button end -->

        <!-- Gallery Script
        ============================================= -->
        <script type="text/javascript">

            jQuery(window).load(function(){

                var $container = $('#gallery');

                $container.isotope({ transitionDuration: '0.65s' });

                $(window).resize(function() {
                    $container.isotope('layout');
                });

                // Infinite Scroll
                $container.infinitescroll({
                    loading: {
                finishedMsg: 'There is no more',
                msgText: 'loading',
                speed: 'normal'
                    },

                state: {
                isDone: false
                },
                    navSelector  : '#load-more-portfolio', 
                    nextSelector : '#load-more-portfolio a', 
                    itemSelector : '.gallery-item',

                },
                // Infinite Scroll Callback
                function( newElements ) {
                    $container.isotope( 'appended', $( newElements ) );
                    var t = setTimeout( function(){ $container.isotope('layout'); }, 2000 );

                });

                $container.infinitescroll('unbind');
                  $("#load-infinite").click(function(){
                        $container.infinitescroll('retrieve');
                         return false;
                });

            });
        </script>
        <!-- Gallery Script End -->
    </div>
</div>


@endsection