@extends('welcome')



@section('t')
    edit task
@endsection
@section('body')
    

    <form action="{{route('up',['todo' => $todo ->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
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
    </div>
    <div class="form-group">
    <label for="file">add image </label>
    <input type="file"  name="image" >
</div>
        <button type="submit">edit</button>
      </form>
      
      @endsection