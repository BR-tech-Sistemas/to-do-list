<?php

namespace App\Models;

use App\Traits\Snowflake;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDoList extends Model
{
    use HasFactory, Snowflake;

    protected $fillable = [
        'title', 'done', 'user_id'
    ];

    protected $casts = [
        'done' => 'boolean'
    ];
}
