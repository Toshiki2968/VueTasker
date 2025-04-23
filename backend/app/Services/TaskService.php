<?php

namespace App\Services;

use App\Repositories\TaskRepository;

class TaskService
{
    protected $taskRepository;

    public function __construct(TaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    // 全タスクを取得
    public function getAllTasks()
    {
        return $this->taskRepository->all();
    }

    // タスクを新規作成
    public function createTask(array $data)
    {
        return $this->taskRepository->create($data);
    }

    // タスクを更新
    public function updateTask($id, array $data)
    {
        return $this->taskRepository->update($id, $data);
    }

    // タスクを削除
    public function deleteTask($id)
    {
        return $this->taskRepository->delete($id);
    }
}
