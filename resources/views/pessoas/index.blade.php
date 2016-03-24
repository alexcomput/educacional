@extends('layouts.app')

@section('content')

    <div class="container">

        <h1 class="pull-left">Pessoas</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('pessoas.create') !!}">Add New</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @if($pessoas->isEmpty())
            <div class="well text-center">No Pessoas found.</div>
        @else
            @include('pessoas.table')
        @endif
        
    </div>
@endsection