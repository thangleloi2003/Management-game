@extends('layout.layout')
@section('title', 'Edit Game')
@section('content')
<form action="/games/{{$game->id}}" method="post">
    {{ method_field('PUT') }}
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Game Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Game Title" value="{{$game->title}}">
    </div>
    <div class="mb-3">
        <label for="publisher" class="form-label">Game Publisher</label>

        <select id="publisher" name="publisher" class="form-select" aria-label="Select publisher">
            <option>Please choose one</option>
            @foreach($publishers as $publisher)
            <option {{ ($publisher->id == $game->publisher->id)?"selected":""}} value="{{$publisher->id}}">{{$publisher->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Game Category</label>
        <select id="category" name="category" class="form-select" aria-label="Select Category">
            <option>Please choose one</option>
            @foreach($categories as $category)
            <option {{ ($category->id == $game->category->id)?"selected":""}} value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    {{-- <div class="mb-3">
        <label for="platforms" class="form-label">Game Platforms</label>
        <select id="platforms" name="platforms[]" class="form-select" aria-label="Select Platforms" multiple>
            @foreach($platforms as $platform)
            <option {{ (in_array($platform->id, $platform->platforms->pluck('id')->toArray()))?"selected":""}} value="{{$platform->id}}">{{$platform->name}}</option>
            @endforeach
        </select>
    </div> --}}

    <div class="mb-3">
        <label for="platforms" class="form-label">Game Platforms</label>
        <select id="platforms" name="platforms[]" class="form-select" aria-label="Select Platforms" multiple>
            @foreach($platforms as $platform)
            <option {{ (in_array($platform->id, $game->platforms->pluck('id')->toArray()))?"selected":""}} value="{{$platform->id}}">{{$platform->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Game Description</label>
        <textarea class="form-control" id="description" name="description" rows="3">{{$game->description}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection