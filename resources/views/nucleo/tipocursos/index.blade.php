@extends('layouts.app')

@section('content')

    <div class="container">

        <h1 class="pull-left">Tipo de Cursos</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('tipo-cursos.create') !!}">Adicionar novo</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @if($tipoCursos->isEmpty())
            <div class="well text-center">No contém Tipo de Cursos.</div>
        @else
            @include('nucleo\tipoCursos.table')
        @endif
        
    </div>
@endsection