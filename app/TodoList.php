<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    protected $fillable = [
        'name',
    ];

    /**
     * Get the todo item for the todo_list.
     */
    public function todoItems()
    {
        return $this->hasMany('App\TodoItem');
    }
}
