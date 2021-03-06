<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    
    public function index(){

    	$todo = Todo::all();

    	return view('todo')->with('todo', $todo);
    }


    public function store(Request $request){

    	//dd($request->all());

    	$todo = new Todo;
    	$todo->todo = $request->todo;
    	$todo->save();

    	return redirect()->back();
    }

    public function delete($id){
    	 $todo = Todo::find($id);
    	 $todo->delete();

    	 return redirect()->back();
    }


}
