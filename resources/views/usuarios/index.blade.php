@extends('layouts.app')

@section('content')

    <div class="container">

        <h1 class="pull-left">Usuarios</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('usuarios.create') !!}">Add New</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @if($usuarios->isEmpty())
            <div class="well text-center">No Usuarios found.</div>
        @else
            @include('usuarios.table')
        @endif
        
    </div>
@endsection