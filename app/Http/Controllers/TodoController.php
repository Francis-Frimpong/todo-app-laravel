<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3'
        ]);

        Todo::create([
            'title' => $request->title,
            'completed' => false
        ]);
        return redirect('/todos');
    }

    public function update($id)
    {
        $todo = Todo::findOrFail($id);

        $todo->completed = true;

        $todo->save();

        return redirect('/todos');

    }

    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();

        return redirect('/todos');
    }

    public function create()
    {
        return view('todos.create');
    }

    public function show($id)
    {
        $todo = Todo::findorFail($id);
        return view('todos.show', compact('todo'));
    }
}
