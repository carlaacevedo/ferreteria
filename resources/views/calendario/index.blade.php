@extends('master')

@section('content') 
@if(Auth::User()->hasRole(1))
    <a class="btn btn-success pull-right" href="{{ url("/calendario/create") }}" role="button">Nuevo evento</a>
@endif
    @include('calendario.partials.table')
    <!--@include('calendario.partials.calendar')
    si no funciona, aqui hay que meter el contenido de calendar
    -->


@endsection