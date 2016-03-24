@extends('layouts.app')

@section('content')

    <div class="container">

        <h1 class="pull-left">Coligadas</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('coligadas.create') !!}">Add Novo</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @if($coligadas->isEmpty())
            <div class="well text-center">Nenhuma Coligada Encontrada.</div>
        @else
            @include('nucleo\coligadas.table')
        @endif
        
    </div>
@endsection