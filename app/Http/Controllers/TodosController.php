<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    
    public function run(){

    	$todo = Todo::all();

    	return view('todo')->with('todo', $todo);
    }
}
