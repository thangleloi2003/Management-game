@extends('layout.layout')
@section('title', 'New Platform')
@section('content')
<form action="/platforms" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Platform name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Platform name">
    </div>

    <div class="mb-3">
        <label for="descrip" class="form-label">Platform description</label>
        <input type="text" class="form-control" id="descrip" name="descrip" placeholder="Platform descrip">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection