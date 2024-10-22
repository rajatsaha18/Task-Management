<?php

namespace App\Services;
use App\Models\Task;

class TaskService
{
    public function getAllTask()
    {
        return Task::all(); // Fetch All Data
    }
    public function storeTask($data)
    {
        return Task::create($data); // Store New Data
    }

    public function getTaskById($id)
    {
        return Task::findOrFail($id); // Find a Task by Id
    }

    public function updateTask($id, $data)
    {
        $task = Task::findOrFail($id); // Find existing Task by id
        $task->update($data);  // This existing Task will update

        return $task;
    }

    public function deleteTask($id)
    {
        $task = Task::findOrFail($id);
        $task->delete(); // Delete a Task;
    }
}
