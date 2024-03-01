<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
	public function index(Request $request)
	{
		$sortColumn = $request->query('sort', 'created_at');
		$sortOrder = $request->query('order', 'desc') === 'asc' ? 'asc' : 'desc';

		$tasks = auth()->user()->tasks()
					->when($request->query('due') === 'true', fn ($query) => $query->overdue())
					->sortByField($sortColumn, $sortOrder)
					->paginate(8)->withQueryString();

		return view('tasks.index', compact('tasks', 'sortColumn', 'sortOrder'));
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

		$task->setTranslations('name', [
			'en' => $validated['name']['en'],
			'ka' => $validated['name']['ka'],
		]);

		$task->setTranslations('description', [
			'en' => $validated['description']['en'],
			'ka' => $validated['description']['ka'],
		]);

		$task->due_date = $validated['due_date'];
		$task->save();

		return redirect()->route('dashboard')->with('success', 'Task updated successfully!');
	}

	public function store(StoreTaskRequest $request)
	{
		$validated = $request->validated();
		$task = Task::create([
			'user_id'     => auth()->id(),
			'name'        => [
				'en' => $validated['name']['en'],
				'ka' => $validated['name']['ka'],
			],
			'description' => [
				'en' => $validated['description']['en'],
				'ka' => $validated['description']['ka'],
			],
			'due_date'    => $validated['due_date'],
		]);

		return redirect()->route('dashboard')->with('success', 'Task created successfully!');
	}

	public function destroy(Task $task)
	{
		$task->delete();
		return redirect()->route('dashboard')->with('delete', 'Task deleted successfully.');
	}

	public function deleteOverdueTasks()
	{
		$user = auth()->user();
		$user->tasks()->where('due_date', '<', now())->delete();

		return back()->with('delete', 'All overdue tasks have been deleted.');
	}
}
