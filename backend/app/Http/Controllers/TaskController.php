<?php
// app/Http/Controllers/TaskController.php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // 全タスクを取得
    public function index()
    {
        return Task::all();
    }

    // タスクを新規作成
    public function store(Request $request)
    {
        $task = Task::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return response()->json($task, 201);
    }

    // タスクを更新
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->update($request->all());
        return response()->json($task);
    }

    // タスクを削除
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return response()->json(null, 204);
    }
}
