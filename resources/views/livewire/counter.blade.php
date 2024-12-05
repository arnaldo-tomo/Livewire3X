
        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                {{ __('Settings') }}
                <a {{ route('dashboard') }} wire:navigate>Home</a>
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                class="overflow-hidden border shadow-sm opacity-90 border-zinc-200 dark:border-zinc-900 bg-gray-50 dark:bg-zinc-900 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
<h1>{{ $title }}..</h1>

                    <form wire:submit="save">
                        <input type="text" wire:model.lazy="title">

                        <input type="text" wire:model="content">

                        <button type="submit">Save</button>
                    </form>

                </div>
            </div>
        </div>
    </div>




