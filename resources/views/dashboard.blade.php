<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-full p-2 bg-white">
            <div class="overflow-hidden shadow-lg">
                <div class="p-2 lg:p-6 ">
                    <livewire:to-do-list />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
