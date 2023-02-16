@extends('welcome')
@section('t')
    list to do
@endsection
@section('body')
    <table class="table">
        <thead>
          <tr>
            <th>Task</th>
            <th>Info</th>
            <th>Time</th>
            <th>image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($todo as $tod)
          <tr>
            <td>{{ $tod['task'] }}</td>
            <td>{{ $tod['info'] }}</td>
            <td>{{ $tod['time'] }}</td>
            <td><img src="{{ asset('storage/' . $tod->path) }}" width="300" height="200"></td>
            <td>
              
                <div class="button-container">
                    <a href="{{route('edit',['todo'=>$tod['id']])}}" class="green-button">Edit</a>
                    <a href="{{route('del',['todo'=>$tod['id']])}}" class="red-button">delete</a>
                  </div>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="button-container">
        <a href="{{route('todo')}}" class="green-button">add task</a>  </div>
        @endsection