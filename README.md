﻿
# タスク管理アプリ (Laravel + Vue.js)
このプロジェクトは、Laravel をバックエンド、Vue.js をフロントエンドとしたシンプルなタスク管理アプリケーションです。


## 【構成】
* フロントエンド: Vue 3 + TypeScript
* バックエンド: Laravel 11
* DB: MySQL
<img src="./docs/archetecture.png"/>

## 【前提条件】
このプロジェクトをローカル環境で動かすためには、以下のソフトウェアがインストールされている必要があります。
* Node.js
* npm
* PHP
* Composer
* Docker / Docker Compose
* Git


## 【セットアップ方法】

### 1. インストール
```bash
git clone https://github.com/Toshiki2968/VueTasker.git
```

### 2. DB(MySQL)
```bash
docker-compose up -d
```

### 3. バックエンド（Laravel）

```bash
cd backend
composer install
php artisan key:generate
cp .env.example .env
php artisan migrate
php artisan serve
```

### 4. フロントエンド（Vue）
```bash
cd frontend
npm install
npm run dev
```

## 【機能一覧】
### API機能（Laravel）
#### 1. 全タスクの取得
* URL: /tasks
* メソッド: GET
* レスポンス:

```json
[
  {
    "id": 1,
    "title": "Task 1",
    "description": "This is the first task."
  },
  ...
]
```

#### 2. タスクの新規作成
* URL: /tasks
* メソッド: POST
* リクエストボディ:

```json
{
  "title": "New Task",
  "description": "Details of the task"
}
```

* レスポンス:
* レスポンス: 201 Created

#### 3. タスクの更新
* URL: /tasks/{id}
* メソッド: PUT
* リクエストボディ:

```json
{
  "title": "Updated Task Title",
  "description": "Updated Description"
}
```
* レスポンス:

```json
{
  "id": 1,
  "title": "Updated Task Title",
  "description": "Updated Description"
}
```
#### 4. タスクの削除
* URL: /tasks/{id}
* メソッド: DELETE
* レスポンス: 204 No Content

### フロントエンド（Vue.js）
* 一覧表示
画面作成中

* 新規作成
画面作成中

* 編集
画面作成中

* 削除
画面作成中

## 【Tasks テーブル】

| カラム名      | データ型   | 属性                        | デフォルト値 | 説明                          |
|---------------|------------|-----------------------------|---------------|-------------------------------|
| `id`          | BIGINT     | PRIMARY KEY, AUTO INCREMENT | -             | タスクの一意な識別子           |
| `title`       | STRING     | NOT NULL                    | -             | タスクのタイトル               |
| `description` | TEXT       | NOT NULL                    | -             | タスクの詳細説明               |
| `completed`   | BOOLEAN    | NOT NULL                    | `false`       | 完了状態   |
| `created_at`  | TIMESTAMP  | 自動生成                    | -             | 作成日時 |
| `updated_at`  | TIMESTAMP  | 自動生成                    | -             | 更新日時 |

【取り組みにあたって意識したこと】
・フロントエンドでは、ロジック、ビュー、APIアクセスを明確に分離したディレクトリ構成を意識し、保守性・拡張性を考慮しました。
・バックエンドにおいても、責務の分離を意識し、画面からのデータ受け取り、業務ロジック、データベース操作をそれぞれ別のレイヤーで処理するように構成しています。
・データベースはローカル環境にてDockerコンテナ上に構築し、動作確認を行っております。
