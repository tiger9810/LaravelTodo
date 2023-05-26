<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Todo -> postsテーブルに紐付けてくれる
class Todo extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'detail',
    ];

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
