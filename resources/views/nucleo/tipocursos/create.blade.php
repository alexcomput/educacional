@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-sm-12">
            <h1 class="pull-left">Creando novo Tipo de Curso</h1>
        </div>
    </div>

    @include('core-templates::common.errors')

    <div class="row">
        {!! Form::open(['route' => 'tipo-cursos.store']) !!}

            @include('nucleo\tipoCursos.fields')

        {!! Form::close() !!}
    </div>
</div>
@endsection