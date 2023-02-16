<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class todocontroller extends Controller
{

    public function home(){

return view('todo');
    }
    public function index(){

        return view('list',['todo'=> todo::all()]);
    
      }

  public function store(Request $request){

$todo= new todo();
$todo->task=$request->input('task');
$todo->info=$request->input('info');
$todo->time=$request->input('time');
if ($request->hasFile('image')){ 
    $name = $request->file('image')->getClientOriginalName() ;
    $path = $request->file('image')->store('public/images', 'public');}
    else {
        $name = '';
        $path = 'public/images/default.jpg';
    }
    $todo->name = $name;
    $todo->path = $path;
$todo->save();
return  redirect()->route('list');
  }

 public function del($todo){

$todo=todo::findorfail($todo);
$todo->delete();
return redirect()->route('list');
 }

 public function edit($todo)
{
    return view('edit',['todo'=>todo::findorfail($todo)]);
}

public function up(Request $request ,$todo){

    $up=todo::findorfail($todo);
    $up->task=$request->input('task');
$up->info=$request->input('info');
$up->time=$request->input('time');
$name = $request->file('image')->getClientOriginalName();
$path = $request->file('image')->store('public/images', 'public');
$up->name = $name;
$up->path = $path;
$up->save();
return  redirect()->route('list');

}

public function main()
{
   return view('main');
}
public function search(){
    
    if(request('search')){
    
        $todo=todo::where('task','like','%'.request('search').'%')->get();}
        else {
            $todo = todo::all();
        }
    
        
        return view('search')->with('todo', $todo);
    
    }


}
