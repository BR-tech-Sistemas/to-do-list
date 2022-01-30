<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista') }}
        </h2>
    </x-slot>

    @include('livewire.create-form')
    @include('livewire.confirmation-delete')

    <div class="pb-4">
        <div class="p-2">
            <div class="py-3 text-sm">
                <button class="bg-blue-100 hover:bg-indigo-600 border p-2 rounded-lg flex items-center"
                        wire:click="create()">
                    <svg class="svg-icon w-6" viewBox="0 0 20 20">
                        <path
                            d="M14.613,10c0,0.23-0.188,0.419-0.419,0.419H10.42v3.774c0,0.23-0.189,0.42-0.42,0.42s-0.419-0.189-0.419-0.42v-3.774H5.806c-0.23,0-0.419-0.189-0.419-0.419s0.189-0.419,0.419-0.419h3.775V5.806c0-0.23,0.189-0.419,0.419-0.419s0.42,0.189,0.42,0.419v3.775h3.774C14.425,9.581,14.613,9.77,14.613,10 M17.969,10c0,4.401-3.567,7.969-7.969,7.969c-4.402,0-7.969-3.567-7.969-7.969c0-4.402,3.567-7.969,7.969-7.969C14.401,2.031,17.969,5.598,17.969,10 M17.13,10c0-3.932-3.198-7.13-7.13-7.13S2.87,6.068,2.87,10c0,3.933,3.198,7.13,7.13,7.13S17.13,13.933,17.13,10"></path>
                    </svg>
                    <span class="px-1">Adicionar item</span>
                </button>
            </div>
            <div>
                <input class="rounded-full w-full" placeholder="Pesquisar item..."
                       wire:model="search" type="text">
            </div>
        </div>
    </div>

    <div class="py-4">
        <div class="w-full rounded-lg shadow-lg">
            <div class="flex-col space-y-6 pb-4">
                <table class="w-full">
                    <thead>
                    <tr class="tracking-wide text-gray-700 bg-gray-100 uppercase">
                        <th class="py-3">Título</th>
                        <th class="">Status</th>
                        <th class="">Ações</th>
                    </tr>
                    </thead>
                    <tbody class="text-gray-800 text-sm">
                    @forelse($lists as $item)
                        <tr wire:loading.class.delay="opacity-50" @if($item->done) class="text-gray-300" @endif>
                            <td class="py-3 border border-b-2 border-gray-300">
                                <p class="font-semibold text-center">
                                    @if($item->done)
                                        <s>{{ $item->title }}</s>
                                    @else
                                        {{ $item->title }}
                                    @endif
                                </p>
                            </td>
                            <td class="text-center border border-b-2 border-gray-300">
                                <span class="px-1 text-sm {{ $item->done_color }} rounded-md">
                                    {{ $item->done ? 'Feito' : 'A Fazer' }}
                                </span>
                            </td>
                            <td class="text-center border border-b-2 border-gray-300 space-y-1 py-3">
                                @if($item->done)
                                    <div>
                                        <button wire:click="changeStatus('{{$item->id}}', false)"
                                                class="bg-yellow-100 hover:bg-yellow-600 text-gray-600 px-1 rounded-md">
                                            <span>Não Feito</span>
                                        </button>
                                    </div>
                                    <div>
                                        <button wire:click="archive('{{$item->id}}')"
                                                class="bg-indigo-50 hover:bg-orange-700 text-gray-600 px-1 rounded-md">
                                            <span>Arquivar</span>
                                        </button>
                                    </div>
                                @else
                                    <div>
                                        <button wire:click="changeStatus('{{$item->id}}', true)"
                                                class="bg-green-100 hover:bg-green-600 text-gray-600 px-1 rounded-md">
                                            <span>Feito</span>
                                            {{--<svg class="svg-icon h-6" viewBox="0 0 20 20">
                                                <path d="M10.219,1.688c-4.471,0-8.094,3.623-8.094,8.094s3.623,8.094,8.094,8.094s8.094-3.623,8.094-8.094S14.689,1.688,10.219,1.688 M10.219,17.022c-3.994,0-7.242-3.247-7.242-7.241c0-3.994,3.248-7.242,7.242-7.242c3.994,0,7.241,3.248,7.241,7.242C17.46,13.775,14.213,17.022,10.219,17.022 M15.099,7.03c-0.167-0.167-0.438-0.167-0.604,0.002L9.062,12.48l-2.269-2.277c-0.166-0.167-0.437-0.167-0.603,0c-0.166,0.166-0.168,0.437-0.002,0.603l2.573,2.578c0.079,0.08,0.188,0.125,0.3,0.125s0.222-0.045,0.303-0.125l5.736-5.751C15.268,7.466,15.265,7.196,15.099,7.03"></path>
                                            </svg>--}}
                                        </button>
                                    </div>
                                    <div>
                                        <button wire:click="edit('{{$item->id}}')"
                                                class="bg-blue-100 hover:bg-indigo-600 text-gray-600 px-1 rounded-md">
                                            <span>Editar</span>
                                        </button>
                                    </div>
                                    <div>
                                        <button wire:click="delete('{{$item->id}}')"
                                                class="bg-red-100 hover:bg-red-700 text-gray-600 px-1 rounded-md">
                                            <span>Deletar</span>
                                        </button>
                                    </div>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr wire:loading.class.delay="opacity-50">
                            <td colspan="5">
                                <div class="flex justify-center items-center">
                                    <span class="font-medium py-8 text-gray-500 text-xl">Item não encontrado...</span>
                                </div>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                <div class="pr-4">
                    {{ $lists->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
