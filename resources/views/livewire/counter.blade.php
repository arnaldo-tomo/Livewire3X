<x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
        {{ __('Settings') }}



    </h2>
</x-slot>
<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div
            class="overflow-hidden border shadow-sm opacity-90 border-zinc-200 dark:border-zinc-900 bg-gray-50 dark:bg-zinc-900 sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">

                @if (session()->has('message'))
                <div class="p-4 mb-4 text-green-700 bg-green-100 border-l-4 border-green-500">
                    {{ session('message') }}
                </div>
                @endif
                <div class="mb-5">
                    <label for="color" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                        color</label>
                    <input wire:model.live="search" type="text" id="color"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="Procurar Produtos" />
                </div>


                <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-zinc-800 dark:text-gray-400">
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
                        @forelse ($user as $item)

                        <tr wire:key="{{ $item->id }}"
                            class="border-b odd:bg-white odd:dark:bg-zinc-900 even:bg-gray-50 even:dark:bg-zinc-800 dark:border-zinc-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->color }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->category }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->price }}
                            </td>
                            <td class="px-6 py-4">

                                <button wire:click="delete({{ $item->id }})">Remove</button>

                                <div wire:loading wire:target="delete({{ $item->id }})">
                                    Removing post...
                                </div>
                            </td>
                        </tr>
                        @empty

<h1>"{{ $search }}", nao encontrado</h1>

                        @endforelse

                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <div class="mx-auto mt-5 max-w-7xl sm:px-6 lg:px-8">

        <div
            class="overflow-hidden border shadow-sm opacity-90 border-zinc-200 dark:border-zinc-900 bg-gray-50 dark:bg-zinc-900 sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">


                @if($errors->any())
                @foreach ($errors->all() as $error)
                <li class="text-red-900">{{ $error }}</li>
                @endforeach
                @endif


                <form class="" wire:submit="salvar">
                    <div class="mb-5">
                        <label for="color" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                            color</label>
                        <input wire:model="color" type="text" id="color"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                            placeholder="name@flowbite.com" />
                    </div>
                    <div class="mb-5">
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                            category</label>
                        <input wire:model="category" type="text" id="category"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
                    </div>
                    <div class="mb-5">
                        <label for="repeat-password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Repeat password</label>
                        <input wire:model="name" type="password" id="repeat-password"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" />
                    </div>
                    <div class="flex items-start mb-5">
                        <div class="flex items-center h-5">
                            <input wire:model="price" id="terms" type="checkbox" value=""
                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                        </div>
                        <label for="terms" class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">I agree
                            with the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and
                                conditions</a></label>
                    </div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register
                        new account</button>
                </form>

            </div>
        </div>
    </div>

</div>
</div>
