@extends('layout.layout')
@section('title', 'New Game')
@section('content')
<form action="/games" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Game Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Game Title">
    </div>
    <div class="mb-3">
        <label for="photo" class="form-label">Game Title</label>
        <input type="file" class="form-control" id="photo" name="photo" placeholder="Game photo">
    </div>
    <div class="mb-3">
        <label for="publisher" class="form-label">Game Publisher</label>
        <select id="publisher" name="publisher" class="form-select" aria-label="Select Publisher">
            <option selected>Please choose one</option>
            @foreach($publishers as $publisher)
            <option value="{{$publisher->id}}">{{$publisher->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Game Category</label>
        <select id="category" name="category" class="form-select" aria-label="Select Category">
            <option selected>Please choose one</option>
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="platforms" class="form-label">Game Platform</label>
        <select id="platforms" name="platforms[]" class="form-select" aria-label="Select Platforms" multiple> 
            <option selected>Please choose</option>           
            @foreach($platforms as $platform)
            <option value="{{$platform->id}}">{{$platform->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Game Description</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection