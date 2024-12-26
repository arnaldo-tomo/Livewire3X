<div>
    <x-app-layout>
        <x-slot name="header">
            <ol class="flex items-center whitespace-nowrap">
                <li class="inline-flex items-center py-1.5 px-2">
                    <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                        href="#">
                        Home
                    </a>
                    <svg class="text-gray-400 shrink-0 ms-2 size-4 dark:text-neutral-600"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </li>
                <li class="inline-flex items-center text-sm">
                    <div class="hs-dropdown [--placement:top-left] relative inline-flex">
                        <button id="hs-breadcrumb-dropdown" type="button"
                            class="hs-dropdown-toggle py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:text-blue-500"
                            aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="1"></circle>
                                <circle cx="12" cy="5" r="1"></circle>
                                <circle cx="12" cy="19" r="1"></circle>
                            </svg>
                            App Center
                        </button>
                        <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-48 hidden z-10 transition-[margin,opacity] opacity-0 duration-300 mb-2 bg-white shadow-md rounded-lg p-1 space-y-0.5 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700"
                            role="menu" aria-orientation="vertical" aria-labelledby="hs-breadcrumb-dropdown">
                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                                href="#">
                                Projects
                            </a>
                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                                href="#">
                                Preline
                            </a>
                        </div>
                    </div>
                    <svg class="text-gray-400 shrink-0 ms-2 size-4 dark:text-neutral-600"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </li>
                <li class="inline-flex items-center py-1.5 px-2 text-sm font-semibold text-gray-800 truncate dark:text-neutral-200"
                    aria-current="page">
                    <a href="{{ route('contact') }}" wire:navigate>Contacto</a>
                </li>
            </ol>
        </x-slot>

        <div class="py-12">
            <div class="relative mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="shadow-sm bg-white/50 backdrop-blur-lg dark:bg-zinc-900/50 sm:rounded-lg">

                        <div class="flex flex-col">
                            <div class="-m-1.5 overflow-x-auto">
                                <div class="p-1.5 min-w-full inline-block align-middle">
                                    <div
                                        class="overflow-hidden bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-neutral-900/50 dark:border-neutral-700">
                                        <!-- Header -->
                                        <div
                                            class="grid gap-3 px-6 py-4 border-b border-gray-200 md:flex md:justify-between md:items-center dark:border-neutral-700">
                                            <div>
                                                <h2 class="text-xl font-semibold text-gray-800 dark:text-neutral-200">
                                                    Invoices
                                                </h2>
                                                <p class="text-sm text-gray-600 dark:text-neutral-400">
                                                    Create invoices, edit, download and more.
                                                </p>
                                            </div>

                                            <div>
                                                <div class="inline-flex gap-x-2">
                                                    <a class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                                        href="#">
                                                        View all
                                                    </a>

                                                    <a class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                                        href="#">
                                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="M5 12h14" />
                                                            <path d="M12 5v14" />
                                                        </svg>
                                                        Create
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Header -->

                                        <!-- Collapse -->
                                        <div
                                            class="border-b border-gray-200 hover:bg-gray-50 dark:hover:bg-neutral-900 dark:border-neutral-700">
                                            <button type="button"
                                                class="flex items-center w-full gap-2 px-6 py-4 font-semibold text-gray-800 hs-collapse-toggle dark:text-neutral-200"
                                                id="hs-as-table" aria-expanded="false" aria-controls="hs-as-table-label"
                                                data-hs-collapse="#hs-as-table-label">
                                                <svg class="hs-collapse-open:rotate-90 size-4"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="m9 18 6-6-6-6" />
                                                </svg>
                                                Insights
                                            </button>
                                            <div id="hs-as-table-label"
                                                class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300"
                                                aria-labelledby="hs-as-table">
                                                <div class="px-6 pb-4">
                                                    <div class="flex items-center space-x-2">
                                                        <span
                                                            class="flex items-center justify-center text-white bg-blue-600 rounded-full size-5 dark:bg-blue-500">
                                                            <svg class="shrink-0 size-3.5"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <polyline points="20 6 9 17 4 12" />
                                                            </svg>
                                                        </span>
                                                        <span class="text-sm text-gray-800 dark:text-neutral-400">
                                                            There are no insights for this period.
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Collapse -->

                                        <!-- Table -->
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                                            <thead class="bg-gray-50 dark:bg-neutral-900/50">
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-start">
                                                        <div class="flex items-center gap-x-2">
                                                            <span
                                                                class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                                                                Invoice number
                                                            </span>
                                                            <div class="hs-tooltip">
                                                                <div class="hs-tooltip-toggle">
                                                                    <svg class="text-gray-500 shrink-0 size-4 dark:text-neutral-500"
                                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round">
                                                                        <circle cx="12" cy="12" r="10" />
                                                                        <path
                                                                            d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                                                                        <path d="M12 17h.01" />
                                                                    </svg>
                                                                    <span
                                                                        class="absolute z-10 invisible inline-block px-2 py-1 text-xs font-medium text-white transition-opacity bg-gray-900 rounded shadow-sm opacity-0 hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible dark:bg-neutral-700"
                                                                        role="tooltip">
                                                                        Invoice number related popup
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </th>

                                                    <th scope="col" class="px-6 py-3 text-start">
                                                        <div class="flex items-center gap-x-2">
                                                            <span
                                                                class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                                                                Amount
                                                            </span>
                                                        </div>
                                                    </th>

                                                    <th scope="col" class="px-6 py-3 text-start">
                                                        <div class="flex items-center gap-x-2">
                                                            <span
                                                                class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                                                                Status
                                                            </span>
                                                        </div>
                                                    </th>

                                                    <th scope="col" class="px-6 py-3 text-start">
                                                        <div class="flex items-center gap-x-2">
                                                            <span
                                                                class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                                                                Due
                                                            </span>
                                                        </div>
                                                    </th>

                                                    <th scope="col" class="px-6 py-3 text-start">
                                                        <div class="flex items-center gap-x-2">
                                                            <span
                                                                class="text-xs font-semibold tracking-wide text-gray-800 uppercase dark:text-neutral-200">
                                                                Created
                                                            </span>
                                                        </div>
                                                    </th>

                                                    <th scope="col" class="px-6 py-3 text-end"></th>
                                                </tr>
                                            </thead>

                                            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                                <tr
                                                    class="bg-white hover:bg-gray-50 dark:bg-neutral-900/50 dark:hover:bg-neutral-800">
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="font-mono text-sm text-blue-600 dark:text-blue-500">#ADUQ2189H1-0038</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-neutral-400">US
                                                                    $400.00</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                                                    <svg class="size-2.5"
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                                    </svg>
                                                                    Paid
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-neutral-400">10
                                                                    Jan 2023</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-neutral-400">28
                                                                    Dec, 12:12</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="px-6 py-1.5">
                                                                <span
                                                                    class="inline-flex items-center justify-center gap-2 px-2 py-1 text-sm font-medium text-gray-700 align-middle transition-all bg-white border rounded-lg shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 dark:bg-neutral-900/50 dark:hover:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                                                    <svg class="shrink-0 size-4"
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                                                        <path
                                                                            d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                                                    </svg>
                                                                    View
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                </tr>

                                                <tr
                                                    class="bg-white hover:bg-gray-50 dark:bg-neutral-900/50 dark:hover:bg-neutral-800">
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="font-mono text-sm text-blue-600 dark:text-blue-500">#ADUQ218ADD-0099</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-neutral-400">US
                                                                    $200.00</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                                                    <svg class="size-2.5"
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                                    </svg>
                                                                    Paid
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-neutral-400">06
                                                                    Jan 2023</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-neutral-400">20
                                                                    Dec, 09:27</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="px-6 py-1.5">
                                                                <span
                                                                    class="inline-flex items-center justify-center gap-2 px-2 py-1 text-sm font-medium text-gray-700 align-middle transition-all bg-white border rounded-lg shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 dark:bg-neutral-900/50 dark:hover:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                                                    <svg class="shrink-0 size-4"
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                                                        <path
                                                                            d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                                                    </svg>
                                                                    View
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                </tr>

                                                <tr
                                                    class="bg-white hover:bg-gray-50 dark:bg-neutral-900/50 dark:hover:bg-neutral-800">
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="font-mono text-sm text-blue-600 dark:text-blue-500">#ADUQ218F94-0061</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-neutral-400">US
                                                                    $994.00</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="inline-flex items-center gap-1.5 py-0.5 px-2 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-900 dark:text-green-200">
                                                                    <svg class="size-2.5"
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                                                    </svg>
                                                                    Declined
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-neutral-400">01
                                                                    Jan 2023</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-neutral-400">14
                                                                    Dec, 09:45</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="px-6 py-1.5">
                                                                <span
                                                                    class="inline-flex items-center justify-center gap-2 px-2 py-1 text-sm font-medium text-gray-700 align-middle transition-all bg-white border rounded-lg shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 dark:bg-neutral-900/50 dark:hover:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                                                    <svg class="shrink-0 size-4"
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                                                        <path
                                                                            d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                                                    </svg>
                                                                    View
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                </tr>

                                                <tr
                                                    class="bg-white hover:bg-gray-50 dark:bg-neutral-900/50 dark:hover:bg-neutral-800">
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="font-mono text-sm text-blue-600 dark:text-blue-500">#ADUQ2138D4-0038</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-neutral-400">US
                                                                    $4,150.00</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                                                    <svg class="size-2.5"
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                                    </svg>
                                                                    Paid
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-neutral-400">29
                                                                    Dec</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-neutral-400">01
                                                                    Dec, 16:59</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="px-6 py-1.5">
                                                                <span
                                                                    class="inline-flex items-center justify-center gap-2 px-2 py-1 text-sm font-medium text-gray-700 align-middle transition-all bg-white border rounded-lg shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 dark:bg-neutral-900/50 dark:hover:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                                                    <svg class="shrink-0 size-4"
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                                                        <path
                                                                            d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                                                    </svg>
                                                                    View
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                </tr>

                                                <tr
                                                    class="bg-white hover:bg-gray-50 dark:bg-neutral-900/50 dark:hover:bg-neutral-800">
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="font-mono text-sm text-blue-600 dark:text-blue-500">#ADUQ2138R2-0012</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-neutral-400">US
                                                                    $2,489.00</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                                                    <svg class="size-2.5"
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                                    </svg>
                                                                    Paid
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-neutral-400">29
                                                                    Dec</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-neutral-400">01
                                                                    Dec, 16:59</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="px-6 py-1.5">
                                                                <span
                                                                    class="inline-flex items-center justify-center gap-2 px-2 py-1 text-sm font-medium text-gray-700 align-middle transition-all bg-white border rounded-lg shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 dark:bg-neutral-900/50 dark:hover:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                                                    <svg class="shrink-0 size-4"
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                                                        <path
                                                                            d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                                                    </svg>
                                                                    View
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                </tr>

                                                <tr
                                                    class="bg-white hover:bg-gray-50 dark:bg-neutral-900/50 dark:hover:bg-neutral-800">
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="font-mono text-sm text-blue-600 dark:text-blue-500">#ADUQ2131GS-0010</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-neutral-400">US
                                                                    $47.00</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                                                    <svg class="size-2.5"
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                                    </svg>
                                                                    Paid
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-neutral-400">28
                                                                    Dec</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-neutral-400">28
                                                                    Nov, 11:00</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="px-6 py-1.5">
                                                                <span
                                                                    class="inline-flex items-center justify-center gap-2 px-2 py-1 text-sm font-medium text-gray-700 align-middle transition-all bg-white border rounded-lg shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 dark:bg-neutral-900/50 dark:hover:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                                                    <svg class="shrink-0 size-4"
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                                                        <path
                                                                            d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                                                    </svg>
                                                                    View
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                </tr>

                                                <tr
                                                    class="bg-white hover:bg-gray-50 dark:bg-neutral-900/50 dark:hover:bg-neutral-800">
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="font-mono text-sm text-blue-600 dark:text-blue-500">#ADUQ288UUE-3892</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-neutral-400">US
                                                                    $2,220.00</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                                                    <svg class="size-2.5"
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                                    </svg>
                                                                    Paid
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-neutral-400">24
                                                                    Dec</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-neutral-400">20
                                                                    Dec, 09:27</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="px-6 py-1.5">
                                                                <span
                                                                    class="inline-flex items-center justify-center gap-2 px-2 py-1 text-sm font-medium text-gray-700 align-middle transition-all bg-white border rounded-lg shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 dark:bg-neutral-900/50 dark:hover:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                                                    <svg class="shrink-0 size-4"
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                                                        <path
                                                                            d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                                                    </svg>
                                                                    View
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                </tr>

                                                <tr
                                                    class="bg-white hover:bg-gray-50 dark:bg-neutral-900/50 dark:hover:bg-neutral-800">
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="font-mono text-sm text-blue-600 dark:text-blue-500">#ADUQ2189C7-3822</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-neutral-400">US
                                                                    $80.00</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="inline-flex items-center gap-1.5 py-0.5 px-2 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-900 dark:text-green-200">
                                                                    <svg class="size-2.5"
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                                                    </svg>
                                                                    Declined
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-neutral-400">29
                                                                    Nov</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-neutral-400">28
                                                                    Nov, 12:04</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="px-6 py-1.5">
                                                                <span
                                                                    class="inline-flex items-center justify-center gap-2 px-2 py-1 text-sm font-medium text-gray-700 align-middle transition-all bg-white border rounded-lg shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 dark:bg-neutral-900/50 dark:hover:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                                                    <svg class="shrink-0 size-4"
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                                                        <path
                                                                            d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                                                    </svg>
                                                                    View
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                </tr>

                                                <tr
                                                    class="bg-white hover:bg-gray-50 dark:bg-neutral-900/50 dark:hover:bg-neutral-800">
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="font-mono text-sm text-blue-600 dark:text-blue-500">#ADUQ2138F2-0099</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-neutral-400">US
                                                                    $1,249.00</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                                                    <svg class="size-2.5"
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                                    </svg>
                                                                    Paid
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-neutral-400">29
                                                                    Nov</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="block px-6 py-2">
                                                                <span
                                                                    class="text-sm text-gray-600 dark:text-neutral-400">01
                                                                    Nov, 14:32</span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <button type="button" class="block" aria-haspopup="dialog"
                                                            aria-expanded="false" aria-controls="hs-ai-invoice-modal"
                                                            data-hs-overlay="#hs-ai-invoice-modal">
                                                            <span class="px-6 py-1.5">
                                                                <span
                                                                    class="inline-flex items-center justify-center gap-2 px-2 py-1 text-sm font-medium text-gray-700 align-middle transition-all bg-white border rounded-lg shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 dark:bg-neutral-900/50 dark:hover:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                                                    <svg class="shrink-0 size-4"
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                                                        <path
                                                                            d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                                                    </svg>
                                                                    View
                                                                </span>
                                                            </span>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- End Table -->

                                        <!-- Footer -->
                                        <div
                                            class="grid gap-3 px-6 py-4 border-t border-gray-200 md:flex md:justify-between md:items-center dark:border-neutral-700">
                                            <div>
                                                <p class="text-sm text-gray-600 dark:text-neutral-400">
                                                    <span
                                                        class="font-semibold text-gray-800 dark:text-neutral-200">9</span>
                                                    results
                                                </p>
                                            </div>

                                            <div>
                                                <div class="inline-flex gap-x-2">
                                                    <button type="button"
                                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                                        <svg class="size-3" width="16" height="16" viewBox="0 0 16 15"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M10.506 1.64001L4.85953 7.28646C4.66427 7.48172 4.66427 7.79831 4.85953 7.99357L10.506 13.64"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" />
                                                        </svg>
                                                        Prev
                                                    </button>

                                                    <button type="button"
                                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                                        Next
                                                        <svg class="size-3" width="16" height="16" viewBox="0 0 16 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M4.50598 2L10.1524 7.64645C10.3477 7.84171 10.3477 8.15829 10.1524 8.35355L4.50598 14"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Footer -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Card -->


                </div>
            </div>
        </div>
    </x-app-layout>

</div>
