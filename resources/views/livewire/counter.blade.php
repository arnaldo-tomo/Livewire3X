<x-slot name="header">
    <div>

        <h2 class="flex flex-row justify-between text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Settings') }}
        </h2>
    </div>


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
                    <div class="flex flex-row justify-between">

                        <h3 for="color" class="block mb-2 font-bold uppercase text-bold ext-gray-900 dark:text-white">
                            Pesquisar Produtos</h3>

                            <a class="p-2 mx-3 rounded-md bg-zinc-800 " href="#" wire:click="openModal">Abir Modal</a>
                        </div>
                    <input wire:model.live="search" type="text" id="color"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-zinc-500 focus:border-zinc-500 block w-full p-2.5 dark:bg-zinc-950 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-zinc-500 dark:focus:border-zinc-500 dark:shadow-sm-light"
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
                {{-- <div>
                    {{ $products->links() }}
                </div> --}}
            </div>
        </div>
    </div>



    <div class="mx-auto mt-5 max-w-7xl sm:px-6 lg:px-8">

        <div
            class="overflow-hidden border shadow-sm opacity-90 border-zinc-200 dark:border-zinc-900 bg-gray-50 dark:bg-zinc-900 sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">


                @if ($errors->any())
                @foreach ($errors->all() as $error)
                <li class="text-red-900">{{ $error }}</li>
                @endforeach
                @endif


                <form class="" wire:submit="salvar">
                    <div class="mb-5">
                        <label for="color" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                            color</label>
                        <input wire:model="color" type="text" id="color"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-zinc-500 focus:border-zinc-500 block w-full p-2.5 dark:bg-zinc-950 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-zinc-500 dark:focus:border-zinc-500 dark:shadow-sm-light"
                            placeholder="name@flowbite.com" />
                    </div>
                    <div class="mb-5">
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                            category</label>
                        <input wire:model="category" type="text" id="category"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-zinc-500 focus:border-zinc-500 block w-full p-2.5 dark:bg-zinc-950 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-zinc-500 dark:focus:border-zinc-500 dark:shadow-sm-light" />
                    </div>
                    <div class="mb-5">
                        <label for="repeat-password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Repeat password</label>
                        <input wire:model="name" type="password" id="repeat-password"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-zinc-500 focus:border-zinc-500 block w-full p-2.5 dark:bg-zinc-950 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-zinc-500 dark:focus:border-zinc-500 dark:shadow-sm-light" />
                    </div>
                    <div class="flex items-start mb-5">
                        <div class="flex items-center h-5">
                            <input wire:model="price" id="terms" type="checkbox" value=""
                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-zinc-300 dark:bg-zinc-950 dark:border-gray-600 dark:focus:ring-zinc-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                        </div>
                        <label for="terms" class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">I agree
                            with the <a href="#" class="text-zinc-600 hover:underline dark:text-zinc-500">terms
                                and
                                conditions</a></label>
                    </div>
                    <button type="submit"
                        class="text-white bg-zinc-700 hover:bg-zinc-800 focus:ring-4 focus:outline-none focus:ring-zinc-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-zinc-90 dark:text-gray-950 dark:hover:text-gray-50 dark:hover:bg-zinc-700 dark:focus:ring-zinc-800">Register
                        new account</button>
                </form>

            </div>
        </div>

        @if ($isOpen)

        <div tabindex="-1" class="fixed top-40 right-[800px]">
            <div class="relative w-full max-w-md max-h-full p-4">
                <div class="relative bg-white rounded-lg shadow-lg dark:bg-zinc-900">
                    <button type="button"
                        class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="popup-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 text-center md:p-5">
                        <svg class="w-12 h-12 mx-auto mb-4 text-gray-400 dark:text-gray-200" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to
                            delete this product?</h3>
                        <button data-modal-hide="popup-modal" type="button"
                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Yes, I'm sure
                        </button>
                        <button wire:click="closeModal" type="button"
                            class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-zinc-900 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No,
                            cancel</button>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>




</div>
</div>
