@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Editar Coligada</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($coligada, ['route' => ['coligadas.update', $coligada->id], 'method' => 'patch']) !!}

            @include('nucleo\coligadas.fields')

            {!! Form::close() !!}
        </div>
    </div>
@endsection