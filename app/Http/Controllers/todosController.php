<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todo;

/*
|--------------------------------------------------------------------------
| Todos controller
|--------------------------------------------------------------------------
| Here we are define the controller method in a class in this project
| we can define some method that work.
| show mehtod , create method , update method , delete method that all
| connected to database through Model
|
| Model binding:
| model binding laravel feature that detect a specific id in route and define
| with model class . this feature after we not use the find method and the
| code is very short . i use the model binging method in some feauter update
| and edit funtion
|
*/

class todosController extends Controller
{
    
    // index page
    public function index(){

    	return view('todos.index')->with('todos', todo::all());
    }


   //show method show those data index that are save in database
   public function show($todoId){

   		return view('todos.show')->with('todo', todo::find($todoId));

   }

   //create method call create page
   public function create(){

   		return view('todos.create');
   }


   //create method and insert data into database
   public function store(){


   	//validation function  
   	$this->validate(request() ,[

   		'name' => 'required|min:6|max:12',
   		'description' => 'required'
   	]);

   	 $data = request()->all();

   	 $todo = new todo();
   	 $todo->name = $data['name'];
   	 $todo->description = $data['description'];
   	 $todo->completed = false;

   	 $todo->save();
   	 session()->flash('success' , 'Todo create successfully');

   	 return redirect('/todos');

   	 
   }

   // edit function 
   public function edit(todo $todo){

   
   	return view('todos.edit')->with('todo', $todo); 
   }

   //update function
   public function update(todo $todo){

   	 $this->validate(request() ,[

   	 	'name' => 'required|min:6|max:12',
   	 	'description' => 'required'
   	 ]);

   	 $data = request()->all();
   	 
   	 $todo->name = $data['name'];
   	 $todo->description = $data['description'];

   	 $todo->save();

   	 session()->flash('success' , 'Todo update successfully');
   	 return redirect('/todos');
   }

   //delete function
   public function destroy($todoId){

   	$todo = todo::find($todoId);

   	$todo->delete();

   	session()->flash('success' , 'Todo delete successfully');
   	return redirect('/todos');
   }

   //complete function
   public function complete(todo $todo){


   	$todo->completed = true;

   	$todo->save();

   	session()->flash('success' , 'Todo completed successfully');
   	return redirect('/todos');
   }


}
