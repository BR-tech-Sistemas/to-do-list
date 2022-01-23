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

    public function getDoneColorAttribute()
    {
        return $this->done ? 'text-green-500 bg-green-100' : 'text-red-600 bg-red-100';
    }
}
