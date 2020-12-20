<?php

namespace App\Http\Controllers;
use App\Models\Todo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $todos = Todo::all();
        return view('todos.index')->with(['todos' => $todos, 'message' => 'all the todos']);
    }

    public function create(Request $request)
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'required|max:255'
        ]);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        Todo::create($request->all());
        return  view('todos.create', ['message' => 'created successfully']);
    }
    public function edit(Request $request, $id)
    {
        $todo = Todo::find($id);
        // return view('todos.edit',['todo' => $todo]);
        return view('todos.edit')->with('todo', $todo);
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'title' => 'max:255'
        ]);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $todo = Todo::find($id);
        $todo->update($request->all());
        return redirect()->route('todo.index')->with([ 'message' => 'updated' ]);
        
    }
}
