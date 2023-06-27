@extends('layout.layout')
@section('title', 'Edit Platform')
@section('content')
<form action="/platforms/{{$platform->id}}" method="post">
    {{ method_field('PUT') }}
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Platform Name</label>
        <input type="text" class="form-control" id="name" value="{{$platform->name}}" name="name" placeholder="Platform name">
    </div>

    <div class="mb-3">
        <label for="descrip" class="form-label">Platform Descrip</label>
        <input type="text" class="form-control" id="descrip" value="{{$platform->descrip}}" name="descrip" placeholder="Platform descrip">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection