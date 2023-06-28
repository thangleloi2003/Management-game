@extends('layout.layout')
@section('title', 'New Publisher')
@section('content')
<form action="/publishers" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Publisher Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Publisher Name">
    </div>
    <div class="mb-3">
        <label for="photo" class="form-label">Publisher photo</label>
        <input type="file" class="form-control" id="photo" name="photo" placeholder="Publisher image">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Publisher Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Publisher Email">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Publisher Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Publisher Phone">
    </div>
    <div class="mb-3">
        <label for="detail" class="form-label">Publisher Detail</label>
        <textarea class="form-control" id="detail" name="detail" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection