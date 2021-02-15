@extends('ux.root')


@section('contenido')

@include('ux.fragment.single-cliente')
@yield('cliente')
    
@endsection