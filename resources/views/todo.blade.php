@extends('welcome')



@section('t')
   to do list
@endsection
@section('body')
    <form action="{{route('todo')}}" method="POST" enctype='multipart/form-data'>
        @csrf
        <div class="form-group">
          <label for="name">task</label>
          <input type="text" id="name" name="task" placeholder="Enter your name">
        </div>
        <div class="form-group">
        <label for="time">Enter a deadline:</label>
        <input type="time" id="time" name="time">
    </div>
        <div class="form-group">
          <label for="message">more info </label>
          <textarea id="message" name="info" placeholder="Enter your message"></textarea>
        </div>
        <div class="form-group">
        <label for="file">add image </label>
        <input type="file"  name="image" >
    </div>
        
        <button type="submit">Submit</button>
      </form>
      
      @endsection