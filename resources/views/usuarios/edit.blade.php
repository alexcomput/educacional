@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Edit Usuario</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($usuario, ['route' => ['usuarios.update', $usuario->id], 'method' => 'patch']) !!}

            @include('usuarios.fields')
            
            {!! Form::close() !!}
        </div>
    </div>
@endsection