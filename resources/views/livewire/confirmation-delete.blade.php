<div>
    <x-confirmation-modal wire:model="isConfirmationOpen">
        <x-slot name="title">
            Confirma
            <hr>
        </x-slot>

        <x-slot name="content">

        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="closeModalPopover()" wire:loading.attr="disabled">
                {{ __('Nevermind') }}
            </x-secondary-button>

            <x-danger-button wire:loading.attr="disabled">
                {{ __('Confirm') }}
            </x-danger-button>
        </x-slot>
    </x-confirmation-modal>
</div>
