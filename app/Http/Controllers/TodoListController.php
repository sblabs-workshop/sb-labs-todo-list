<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    public function index()
    {
        $tasks = Tasks::all();
        return view('todolist')->with('tasks', $tasks);
    }

    public function store(Request $request)
    {
        $request->validate([
            'task_title' => 'required|string',
            'task_description' => 'nullable|string|max:255',
        ]);

        $taskData = [
            'title' => $request->task_title,
            'description' => $request->task_description,
            'completed' => $request->is_completed ?? false,
        ];

        Tasks::create($taskData);

        return redirect()->back()->with('success', 'Task created successfully');
    }
}
