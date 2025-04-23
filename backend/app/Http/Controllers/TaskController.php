<?php

namespace App\Http\Controllers;

use App\Services\TaskService;
use App\Http\Requests\CreateTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    protected $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    // 全タスクを取得
    public function index()
    {
        return response()->json($this->taskService->getAllTasks());
    }

    // タスクを新規作成
    public function create(CreateTaskRequest $request)
    {
        $task = $this->taskService->createTask($request->validated());
        return response()->json($task, 201);
    }

    // タスクを更新
    public function update(UpdateTaskRequest $request, $id)
    {
        $task = $this->taskService->updateTask($id, $request->validated());
        return response()->json($task);
    }

    // タスクを削除
    public function delete($id)
    {
        $this->taskService->deleteTask($id);
        return response()->json(null, 204);
    }
}
