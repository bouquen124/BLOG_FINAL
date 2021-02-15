@extends('ux.root')


@section('contenido')

@include('ux.fragment.single-producto')
@yield('producto')
    
@endsection