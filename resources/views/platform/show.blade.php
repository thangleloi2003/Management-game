@extends('layout.layout')
@section('title', 'Platform Details')
@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{$platform->name}}</h4>
            <h4 class="card-title">{{$platform->descrip}}</h4>
        </div>
    </div>
@endsection