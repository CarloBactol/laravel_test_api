<?php

// app/Http/Controllers/TodoController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        return Todo::all();
    }

    public function store(Request $request)
    {
        return Todo::create($request->all());
    }

    public function show($id)
    {
        return Todo::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::findOrFail($id);
        $todo->update($request->all());

        return $todo;
    }

    public function destroy($id)
    {
        Todo::destroy($id);

        return response()->json(['message' => 'Todo deleted successfully']);
    }
}
