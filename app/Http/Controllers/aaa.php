<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class todossController extends Controller
{
    public function getCreate()
        {
            return view('todos.create');
        }
    public function postCreate(Request $request)
    {

        Todo::create([
                'title' => $request->title,
                'description' => $request->description,
                'date' => $request->date,
                'isComplete' => $request->isComplete
            ]);

            return redirect('/create');
        
    }    
}
