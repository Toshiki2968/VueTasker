<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // 一括代入を許可するフィールドを指定
    protected $fillable = [
        'title',
        'description',
        'completed',
    ];
}
