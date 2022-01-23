<?php

namespace App\Http\Livewire;

use App\Models\ToDoList as ToDoListModel;
use Livewire\WithPagination;

class ToDoList extends BaseComponent
{
    use WithPagination;

    public $item;
    public $isEdit = false;
    public $isConfirmationOpen = false;
    public $search;

    protected $rules = [
        'list.title' => 'required'
    ];

    public function render()
    {
        $search = $this->search;
        $list = ToDoListModel::where('title', 'LIKE', "%{$search}%")->paginate();
        return view('livewire.to-do-list', [
            'lists' => $list
        ]);

    }

    public function create()
    {
        $this->resetCreateForm();
        $this->isEdit = false;
        $this->openModalPopover();
    }

    public function changeStatus(ToDoListModel $item, bool $done)
    {
        $item->update(['done' => $done]);
        $this->sendToastMessage('success', 'Status atualizado com sucesso!');
    }

}
