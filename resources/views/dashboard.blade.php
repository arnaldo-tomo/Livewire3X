<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-zinc-900 dark:text-gray-200">
            {{ __('Dashboard') }}
            @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="relative mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-zinc-900 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">


                    <div class="relative overflow-x-auto sm:rounded-lg">

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
