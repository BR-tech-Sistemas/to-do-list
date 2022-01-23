<?php

namespace App\Http\Livewire;

use App\Models\ToDoList as ToDoListModel;

class ToDoList extends BaseComponent
{
    public function render()
    {
        $list = ToDoListModel::all();
        return view('livewire.to-do-list', [
            'lists' => $list
        ]);

    }
}
