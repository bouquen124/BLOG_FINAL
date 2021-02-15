@section('home')
    
@include('ux.fragment.slider')
@yield('slider')
            
@include('ux.fragment.single-servicio')
@yield('servicio')
            
@include('ux.fragment.single-producto')
@yield('producto')
            
@include('ux.fragment.single-aliado')
@yield('aliado')

@include('ux.fragment.single-cliente')
@yield('cliente')

@endsection