<div>
    <x-confirmation-modal wire:model="isConfirmationOpen">
        <x-slot name="title">
            Confirma a exclusão do Item?
            <hr>
        </x-slot>

        <x-slot name="content">
            <p>
                Você tem certeza que deseja excluir o item
                <span class="py-1 px-1 bg-red-100 hover:bg-red-500 shadow-md rounded-md">{{$item->title ?? ''}}</span>
                ?
            </p>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="closeConfirmationModalPopover()" wire:loading.attr="disabled">
                {{ __('Nevermind') }}
            </x-secondary-button>

            <x-danger-button wire:click="destroy('{{$item->id ?? ''}}')" wire:loading.attr="disabled">
                {{ __('Confirm') }}
            </x-danger-button>
        </x-slot>
    </x-confirmation-modal>
</div>
