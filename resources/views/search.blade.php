@extends('welcome')



@section('t')
   search
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
            @forelse($todo as $tod)
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
               
              </div>
            </td>
          </tr>
          
        </tbody>
      </table>
      @empty
      <table class="table">
      <thead>
        <tr>
          <th>Task</th>
           <td> <li class="list-group-item list-group-item-danger">User Not Found.</li></td>
        @endforelse
    </tr>
</thead>
<tbody>
      <div class="button-container">
        <a href="{{route('todo')}}" class="green-button">add task</a>  </div>
        @endsection