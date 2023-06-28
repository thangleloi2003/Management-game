@extends('layout.layout')
@section('title', 'Publisher List')
@section('content')
<div class="table-responsive">
  <table class="table table-striped table-hover">
      <thead class="table-light">
          <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Action</th>
          </tr>
          </thead>
          <tbody class="table-group-divider">
                @foreach ($publishers as $publisher)
                <tr class="table-primary">
                  <td>
                    <a href="{{url("/publishers/".$publisher->id)}}">
                    {{$publisher->name}}
                    </a>
                  </td>
                  <td>{{$publisher->email}}</td>
                  <td>
                    <a href="{{url("/publishers/".$publisher->id)}}" class="btn btn-primary">View</a>
                    <a href="{{url("/publishers/".$publisher->id."/edit")}}" class="btn btn-warning">Edit</a>
                    <form action="{{url("/publishers/".$publisher->id)}}" method="post" class="d-inline">
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

@endsection
