@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center text-black/50 dark:text-white/50 px-3 mt-5 dark:bg-zinc-800 bg-white shadow-sm h-8  rounded-md dark:border-indigo-600
            text-sm font-medium leading-5 text-gray-900 dark:text-gray-100 focus:outline-none
            focus:border-indigo-700 transition duration-150 ease-in-out'
            // ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 dark:border-indigo-600
            // text-sm font-medium leading-5 text-gray-900 dark:text-gray-100 focus:outline-none
            // focus:border-indigo-700 transition duration-150 ease-in-out'

            : 'inline-flex items-center px-3 mt-5 rounded-md h-8 hover:dark:bg-zinc-800 hover:bg-gray-100  text-sm font-medium leading-5 text-black/50 dark:text-white/50 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-800 dark:hover:border-gray-800 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-800 dark:focus:border-gray-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
