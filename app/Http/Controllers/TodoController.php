<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $list_todo = Todo::latest()->get();
        // select * from table 'todos' order by 'updated_at'

        return view('home', [
            'list_todo' => $list_todo
        ]);
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function create()
    {
        return view('create');
    }

    public function store(TodoRequest $request)
    {
        $todo = new Todo;
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->save();

        return redirect()->route('home');

        //dd($request->all());  //dd means console log for debug purpose
    }

    public function edit(Todo $todo)
    {
        return view('update', [
            'todo' => $todo
        ]);
    }

    public function update(Request $request, Todo $todo)
    {
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->status = $request->status;
        $todo->save();

        return back();
    }

    public function delete(Todo $todo)
    {
        $todo->delete(); //delete from 'todos'
        return redirect()->route('home');
    }
}
