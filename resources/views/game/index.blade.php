@extends('layout.layout')
@section('title', 'Game List')
@section('content')
<div class="table-responsive">
  <table class="table table-striped table-hover">
      <thead class="table-light">
          <tr>
              <th>Title</th>
              <th>Publisher</th>
              <th>Category</th>
              <th>Platforms</th>
              <th>Action</th>
          </tr>
          </thead>
          <tbody class="table-group-divider">
                @foreach ($games as $game)
                <tr class="table-primary" >
                  <td>
                    <a href="{{url("/games/".$game->id)}}">
                    {{$game->title}}
                    </a>
                  </td>
                  <td>{{$game->publisher->name}}</td>
                  <td>{{$game->category->name}}</td>
                  <td>
                    @foreach($game->platforms as $platform)
                      <span class="badge badge-info">{{$platform->name}}</span>
                    @endforeach
                  <td>
                    <a href="{{url("/games/".$game->id)}}" class="btn btn-primary">View</a>
                    <a href="{{url("/games/".$game->id."/edit")}}" class="btn btn-warning">Edit</a>
                    <form action="{{url("/games/".$game->id)}}" method="post" class="d-inline">
                      {{ method_field('DELETE') }}
                      @csrf
                      <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
          </tbody>
          <tfoot>
              
          </tfoot>
  </table>
</div>
<style>
  .table-primary{
    text-decoration: none;
  }
  .table>:not(caption)>*>* {
    padding: 0.5rem 0.5rem;
    background-color: var(--bs-table-bg);
    border-bottom-width: 1px;
    /* box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg); */
}
</style>
@endsection
