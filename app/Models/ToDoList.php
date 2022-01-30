<?php

namespace App\Models;

use App\Traits\Snowflake;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDoList extends Model
{
    use HasFactory, Snowflake;

    protected static function booted()
    {
        static::addGlobalScope('userList', function (Builder $builder){
            $builder->where('user_id', auth()->user()->id);
        });
    }


    protected $fillable = [
        'title', 'done', 'user_id', 'archived'
    ];

    protected $casts = [
        'done' => 'boolean'
    ];

    public function getDoneColorAttribute()
    {
        return $this->done ? 'text-gray-500 bg-green-100' : 'text-red-600 bg-red-100';
    }
}
