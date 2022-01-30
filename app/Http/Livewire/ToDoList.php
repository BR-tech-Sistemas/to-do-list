<?php

namespace App\Http\Livewire;

use App\Models\ToDoList as ToDoListModel;
use Livewire\WithPagination;

class ToDoList extends BaseComponent
{
    use WithPagination;

    public $item;
    public $isEdit = false;
    public $search;

    protected $rules = [
        'item.title' => 'required|string',
        'item.done' => 'nullable|boolean'
    ];

    public function render()
    {
        $search = $this->search;
        $list = ToDoListModel::where('title', 'LIKE', "%{$search}%")
            ->where('archived', '=', false)
            ->orderBy('done', 'ASC')
            ->latest()
            ->paginate();
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

    public function edit(ToDoListModel $item)
    {
        $this->resetCreateForm();
        $this->isEdit = true;
        $this->item = $item;
        $this->openModalPopover();
    }

    public function changeStatus(ToDoListModel $item, bool $done)
    {
        $item->update(['done' => $done]);
        $this->sendToastMessage('success', 'Status atualizado com sucesso!');
    }

    public function save()
    {
        $this->validate();

        if ($this->isEdit) {
            $this->item->save();
        } else {
            $this->item['user_id'] = auth()->user()->id;
            ToDoListModel::create($this->item);
        }

        $this->resetCreateForm();
        $this->sendToastMessage('success', 'Item salvo com sucesso');
        $this->closeModalPopover();
    }

    public function delete(ToDoListModel $item)
    {
        $this->item = $item;
        $this->openConfirmationModalPopover();
    }

    public function archive(ToDoListModel $item)
    {
        if ($item->user_id !== auth()->user()->id){
            $this->sendToastMessage('error', 'Você não tem autorização para arquivar esse item!');
            $this->closeConfirmationModalPopover();
            return;
        }

        $item->update(['archived' => true]);
        $this->sendToastMessage('success', 'Item arquivado com sucesso!');
    }

    public function destroy(ToDoListModel $item)
    {
        if ($item->user_id !== auth()->user()->id){
            $this->sendToastMessage('error', 'Você não tem autorização para excluir esse item!');
            $this->closeConfirmationModalPopover();
            return;
        }

        $item->delete();
        $this->closeConfirmationModalPopover();
        $this->sendToastMessage('success', 'Item removido com sucesso!');
    }
}
