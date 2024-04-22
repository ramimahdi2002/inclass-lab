<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('index1', compact('tasks'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Task::create($request->all());
        return redirect()->route('index1')->with('success', 'Task created successfully');
    }   

    public function edit(Task $task)
    {
        return view('edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $task->update($request->all());
        return redirect()->route('index1')->with('success', 'Task updated successfully');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('index1')->with('success', 'Task deleted successfully');
    }

    public function sortByPriority()
    {
        $tasks = Task::orderBy('priority_level')->get();
        return view('index1', compact('tasks'));
    }
}
