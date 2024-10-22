<?php

namespace App\Http\Controllers;

use App\Services\TaskService;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    protected $taskService;

    // Dependency Injection of TaskService
    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService; // Here store TaskService Data
    }

    // Display a listing of the Task
    public function index()
    {
        $tasks = $this->taskService->getAllTask();
        return view('task.index',compact('tasks'));
    }

    // Show the form for creating a new Task
    public function create()
    {
        return view('task.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'         => 'required|string|max:255',
            'description'   => 'required',
        ]);

        $this->taskService->storeTask($data);
        return redirect()->route('task.index')->with('message', 'Task Created Successfully');
    }
}
