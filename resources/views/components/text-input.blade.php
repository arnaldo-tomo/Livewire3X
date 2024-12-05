@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-zinc-950 dark:text-gray-300 focus:border-zinc-500 dark:focus:border-zinc-700 focus:ring-zinc-500 dark:focus:ring-zinc-700 rounded-md shadow-sm']) }}>
