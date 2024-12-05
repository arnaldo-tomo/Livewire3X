
        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                {{ __('Settings') }}


                @if (session('nice'))
                <div class="alert alert-success">
                    {{ session('nice') }} .nnkl;nklnklnk
                </div>
                @endif

                @if (session('sucess'))
{{ session('sucess') }}
                @endif
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                class="overflow-hidden border shadow-sm opacity-90 border-zinc-200 dark:border-zinc-900 bg-gray-50 dark:bg-zinc-900 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                        <thead
                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-zinc-800 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Product name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Color
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $item)

                            <tr wire:key="{{ $item->id }}"
                            class="border-b odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-zinc-800 dark:border-zinc-700">
                            <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $item->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $item->id }}
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4">

            <button wire:click="delete({{ $item->id }})">Remove</button>

            <div wire:loading wire:target="delete({{ $item->id }})">
                Removing post...
            </div>
                        </td>
                    </tr>
                    @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>




