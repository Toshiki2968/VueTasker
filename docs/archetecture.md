```mermaid
graph TD
  style Frontend fill:#E3F2FD,stroke:#2196F3,stroke-width:2px
  style API fill:#FFF3E0,stroke:#FB8C00,stroke-width:2px
  style DB fill:#E8F5E9,stroke:#43A047,stroke-width:2px

  Frontend[Vue.js（フロントエンド）]
  API[Laravel API（バックエンド）]
  DB[(MySQLデータベース)]

  Frontend -->|APIリクエスト| API
  API -->|クエリ実行| DB
  DB -->|レスポンス| API
  API -->|JSONレスポンス| Frontend


```