@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Editando Tipo de Cursos</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($tipoCurso, ['route' => ['tipo-cursos.update', $tipoCurso->id], 'method' => 'patch']) !!}

            @include('nucleo\tipoCursos.fields')

            {!! Form::close() !!}
        </div>
    </div>
@endsection