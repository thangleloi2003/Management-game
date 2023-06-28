@extends('layout.layout')
@section('title', 'Edit Publisher')
@section('content')
<form action="/publishers/{{$publisher->id}}" method="post">
    {{ method_field('PUT') }}
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Publisher Name</label>
        <input type="text" class="form-control" id="name" value="{{$publisher->name}}" name="name" placeholder="Publisher Name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Publisher Email</label>
        <input type="text" class="form-control" id="email"  value="{{$publisher->email}}" name="email" placeholder="Author Email">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Publisher Phone</label>
        <input type="text" class="form-control" id="phone" value="{{$publisher->phone}}" name="phone" placeholder="Publisher Phone">
    </div>
    <div class="mb-3">
        <label for="detail" class="form-label">Publisher Detail</label>
        <textarea class="form-control" id="detail" name="detail" rows="3">{{$publisher->detail}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection