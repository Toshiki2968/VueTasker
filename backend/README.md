# TaskController - Laravel API

このドキュメントは、Laravelプロジェクトにおけるタスク管理のAPIエンドポイントを提供する`TaskController`の説明です。

## 概要

`TaskController`は、タスクの作成、取得、更新、および削除を行うためのAPIエンドポイントを提供します。これにより、クライアントアプリケーションがタスクデータを操作できるようになります。

## エンドポイント

以下のエンドポイントが用意されています。

### 1. **全タスクの取得**

- **URL**: `/tasks`
- **メソッド**: `GET`
- **レスポンス**: 全てのタスクを取得します。

#### 例:

```json
[
  {
    "id": 1,
    "title": "Task 1",
    "description": "This is the first task."
  },
  {
    "id": 2,
    "title": "Task 2",
    "description": "This is the second task."
  }
]
```