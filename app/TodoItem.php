<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoItem extends Model
{
    protected $fillable = [
        'content'
    ];

    public function todoList()
    {
        return $this->belongsTo('App\TodoList');
    }
}
