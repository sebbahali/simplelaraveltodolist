@extends('welcome')
    
    @section('t')
        simple to do list
    @endsection
    @section('body')

        <div class="container">
          <h1>TO DO list simple website laravel</h1>
           
          <div class="button-container">
            <a href="{{route('todo')}}" class="a-button">add new task</a>
            <a href="{{route('list')}}" class="b-button">see to do list</a>
          </div>
          <div class="search-container">
            <form action="{{route('search')}}" method="GET">
              <input type="text" placeholder="Search..." name="search" class="search-input">
              <button type="submit" class="search-button">Search</button>
            </form>
          </div>
        </div>
     
        @endsection
    
