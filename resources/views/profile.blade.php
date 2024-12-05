<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-zinc-900 dark:text-gray-200">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
            <div class="relative p-4 bg-white shadow sm:p-8 dark:bg-zinc-900 sm:rounded-lg">
                <div class="max-w-xl ">
                    <livewire:profile.update-profile-information-form />
                </div>
            </div>

            <div class="relative p-4 bg-white shadow sm:p-8 dark:bg-zinc-900 sm:rounded-lg ">
                <div class="max-w-xl ">
                    <livewire:profile.update-password-form />
                </div>
            </div>

            <div class="relative p-4 bg-white shadow sm:p-8 dark:bg-zinc-900 sm:rounded-lg">
                <div class="max-w-xl">
                    <livewire:profile.delete-user-form />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
