@extends('layouts.app')

@section('content')

    <div class="container">

        <h1 class="pull-left">Enderecos</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('enderecos.create') !!}">Add New</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @if($enderecos->isEmpty())
            <div class="well text-center">No Enderecos found.</div>
        @else
            @include('enderecos.table')
        @endif
        
    </div>
@endsection