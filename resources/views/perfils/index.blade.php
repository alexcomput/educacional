@extends('layouts.app')

@section('content')

    <div class="container">

        <h1 class="pull-left">Perfils</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('perfils.create') !!}">Add New</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @if($perfils->isEmpty())
            <div class="well text-center">No Perfils found.</div>
        @else
            @include('perfils.table')
        @endif
        
    </div>
@endsection