<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
	public function index(Request $request)
	{
		$sortOrder = $request->query('sort', 'desc') === 'asc' ? 'asc' : 'desc';

		$query = Task::query();

		$tasks = auth()->user()->tasks()
		->when($request->query('due') === 'true', fn ($query) => $query->overdue())
		->orderBy('created_at', $sortOrder)
		->get();

		return view('tasks.index', compact('tasks', 'sortOrder'));
	}

	public function show(Task $task)
	{
		return view('tasks.show', compact('task'));
	}

	public function edit(Task $task)
	{
		return view('tasks.edit', compact('task'));
	}

	public function update(StoreTaskRequest $request, Task $task)
	{
		$validated = $request->validated();
		$name = $validated['name']['en'];
		$description = $validated['description']['en'];

		$task->update([
			'name'        => $name,
			'description' => $description,
			'due_date'    => $validated['due_date'],
		]);

		return redirect()->route('dashboard')->with('success', 'Task updated successfully!');
	}

	public function store(StoreTaskRequest $request)
	{
		$validated = $request->validated();
		$name = $validated['name']['en'];
		$description = $validated['description']['en'];

		Task::create([
			'user_id'     => auth()->id(),
			'name'        => $name,
			'description' => $description,
			'due_date'    => $validated['due_date'],
		]);

		return redirect()->route('dashboard')->with('success', 'Task created successfully!');
	}

	public function destroy(Task $task)
	{
		$task->delete();
		return redirect()->route('dashboard')->with('success', 'Task deleted successfully.');
	}

	public function deleteOverdueTasks()
	{
		$user = auth()->user();
		$user->tasks()->where('due_date', '<', now())->delete();

		return back()->with('success', 'All overdue tasks have been deleted.');
	}
}
