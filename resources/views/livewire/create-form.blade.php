<div>
    <x-dialog-modal wire:model="isModalOpen">
        <x-slot name="title">
            {{ $isEdit ? 'Editar' : 'Adicionar' }} Item
            <hr>
        </x-slot>

        <x-slot name="content">
            <div class="mb-6">
                <label class="block mb-2 text-sm text-gray-600">
                    {{__('Title')}}
                </label>
                <input
                    type="text"
                    name="title"
                    placeholder="{{__('Title')}}"
                    wire:keydown.enter="save()"
                    wire:model.debounce.500ms="item.title"
                    class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md
                        focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
                />
                <x-input-error for="item.title" class="mt-2"></x-input-error>
            </div>
            <div class="mb-6">
                <div>
                    <input
                        type="checkbox"
                        name="{{__('Done')}}?"
                        class="w-5 h-5 border border-gray-300 rounded-sm outline-none cursor-pointer"
                        wire:keydown.enter="save()"
                        wire:model="item.done"
                    />
                    <label class="ml-2 text-sm">{{__('Done')}}?</label>
                    <x-input-error for="item.done" class="mt-2"></x-input-error>
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="closeModalPopover()" wire:loading.attr="disabled">
                {{ __('Nevermind') }}
            </x-secondary-button>

            <x-secondary-button class="ml-2 focus:shadow-md bg-green-200 text-green-600 hover:bg-green-500"
                                wire:click="save()" wire:loading.attr="disabled">
                {{ __('Save') }}
            </x-secondary-button>
        </x-slot>
    </x-dialog-modal>

</div>
