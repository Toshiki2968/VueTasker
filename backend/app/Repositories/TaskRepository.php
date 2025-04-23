<?php

namespace App\Repositories;

use App\Models\Task;

class TaskRepository
{
    // 全タスクを取得
    public function all()
    {
        return Task::all();
    }

    // タスクを新規作成
    public function create(array $data)
    {
        return Task::create($data);
    }

    // タスクを更新
    public function update($id, array $data)
    {
        $task = Task::findOrFail($id);
        $task->update($data);
        return $task;
    }

    // タスクを削除
    public function delete($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return $task;
    }
}
