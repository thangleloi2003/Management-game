@extends('layout.layout')
@section('title', 'Publisher Detail')
@section('content')
    <div class="card">
        <div class="card-body">
            <img src="{{url("/upload/".$publisher->photo)}}" alt="" class="profile-pic">
            <h4 class="card-title"></h4>
            <p class="card-text">{{$publisher->email}}</p>
            <p class="card-text">{{$publisher->phone}}</p>
            <p class="card-text">{{$publisher->detail}}</p>
           
        </div>
    </div>
@endsection

   