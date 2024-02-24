<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index',compact('tasks'));
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function store(StoreTaskRequest $request)
    {
        $validated = $request->validated();

        $task = new Task();
        $task->user_id = auth()->id(); 
        $task->name = $validated['name_en']; 
        $task->description = $validated['description_en']; 
        $task->due_date = $validated['due_date'];
        $task->save();
    
        return redirect()->route('dashboard')->with('success', 'Task created successfully!');

    }
}
