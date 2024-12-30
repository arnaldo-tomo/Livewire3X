<x-app-layout>
    <x-slot name="header">
        <ol class="flex items-center whitespace-nowrap animate__animated animate__backInLeft">
            <li class="inline-flex items-center py-1.5 px-2">
              <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" href="#">
                Home
              </a>
              <svg class="text-gray-400 shrink-0 ms-2 size-4 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6"></path>
              </svg>
            </li>
            <li class="inline-flex items-center text-sm">
              <div class="hs-dropdown [--placement:top-left] relative inline-flex">
                <button id="hs-breadcrumb-dropdown" type="button" class="hs-dropdown-toggle py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:text-blue-500" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                  <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="1"></circle>
                    <circle cx="12" cy="5" r="1"></circle>
                    <circle cx="12" cy="19" r="1"></circle>
                  </svg>
                  App Center
                </button>
                <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-48 hidden z-10 transition-[margin,opacity] opacity-0 duration-300 mb-2 bg-white/50 shadow-md rounded-lg p-1 space-y-0.5 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-breadcrumb-dropdown">
                  <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#">
                    Projects
                  </a>
                  <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700" href="#">
                    Preline
                  </a>
                </div>
              </div>
              <svg class="text-gray-400 shrink-0 ms-2 size-4 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6"></path>
              </svg>
            </li>
            <li class="inline-flex items-center py-1.5 px-2 text-sm font-semibold text-gray-800 truncate dark:text-neutral-200" aria-current="page">
                <a href="{{ route('dashboard') }}" wire:navigate>Dashboard</a>
            </li>
          </ol>
    </x-slot>

    <div>
        <div class="relative mx-auto max-w-7xl sm:px-6 lg:px-8 ">
            <div >
                    <!-- Card Section -->
                    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto animate__animated animate__backInRight">
                        <!-- Grid -->
                        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 sm:gap-6">
                            <!-- Card -->
                            <div
                                class="flex flex-col p-4 border shadow-sm cursor-pointer bg-white/50 gap-y-3 lg:gap-y-5 md:p-5 rounded-xl dark:bg-neutral-900/50 dark:border-neutral-900">
                                <div class="inline-flex items-center justify-center">
                                    <span class="inline-block rounded-full bg-gray-500/50 size-2 me-2"></span>
                                    <span
                                        class="text-xs font-semibold text-gray-600 uppercase dark:text-neutral-400">Projects</span>
                                </div>

                                <div class="text-center">
                                    <h3
                                        class="text-3xl font-semibold text-gray-900 sm:text-4xl lg:text-5xl dark:text-neutral-200">
                                        150
                                    </h3>
                                </div>

                                <dl
                                    class="flex items-center justify-center divide-x divide-gray-200 dark:divide-neutral-900">
                                    <dt class="pe-3">
                                        <span class="text-green-600">
                                            <svg class="self-center inline-block size-4"
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                                            </svg>
                                            <span class="inline-block text-sm">
                                                1.7%
                                            </span>
                                        </span>
                                        <span class="block text-sm text-gray-500 dark:text-neutral-500">change</span>
                                    </dt>
                                    <dd class="text-start ps-3">
                                        <span class="text-sm font-semibold text-gray-900 dark:text-neutral-200">5</span>
                                        <span class="block text-sm text-gray-500 dark:text-neutral-500">last week</span>
                                    </dd>
                                </dl>
                            </div>
                            <!-- End Card -->

                            <!-- Card -->
                            <div
                                class="flex flex-col p-4 border shadow-sm bg-white/50 gap-y-3 lg:gap-y-5 md:p-5 rounded-xl dark:bg-neutral-900/50 dark:border-neutral-900">
                                <div class="inline-flex items-center justify-center">
                                    <span class="inline-block bg-green-500 rounded-full size-2 me-2"></span>
                                    <span
                                        class="text-xs font-semibold text-gray-600 uppercase dark:text-neutral-400">Successful
                                        conversions</span>
                                </div>

                                <div class="text-center">
                                    <h3
                                        class="text-3xl font-semibold text-gray-900 sm:text-4xl lg:text-5xl dark:text-neutral-200">
                                        25
                                    </h3>
                                </div>

                                <dl
                                    class="flex items-center justify-center divide-x divide-gray-200 dark:divide-neutral-900">
                                    <dt class="pe-3">
                                        <span class="text-green-600">
                                            <svg class="self-center inline-block size-4"
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                                            </svg>
                                            <span class="inline-block text-sm">
                                                5.6%
                                            </span>
                                        </span>
                                        <span class="block text-sm text-gray-500 dark:text-neutral-500">change</span>
                                    </dt>
                                    <dd class="text-start ps-3">
                                        <span class="text-sm font-semibold text-gray-900 dark:text-neutral-200">7</span>
                                        <span class="block text-sm text-gray-500 dark:text-neutral-500">last week</span>
                                    </dd>
                                </dl>
                            </div>
                            <!-- End Card -->

                            <!-- Card -->
                            <div
                                class="flex flex-col p-4 border shadow-sm cursor-pointer bg-white/50 gap-y-3 lg:gap-y-5 md:p-5 rounded-xl dark:bg-neutral-900/50 dark:border-neutral-900">
                                <div class="inline-flex items-center justify-center">
                                    <span class="inline-block bg-red-500 rounded-full size-2 me-2"></span>
                                    <span
                                        class="text-xs font-semibold text-gray-600 uppercase dark:text-neutral-400">Failed
                                        conversions</span>
                                </div>

                                <div class="text-center">
                                    <h3
                                        class="text-3xl font-semibold text-gray-900 sm:text-4xl lg:text-5xl dark:text-neutral-200">
                                        4
                                    </h3>
                                </div>

                                <dl
                                    class="flex items-center justify-center divide-x divide-gray-200 dark:divide-neutral-900">
                                    <dt class="pe-3">
                                        <span class="text-red-600">
                                            <svg class="self-center inline-block size-4"
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                            </svg>
                                            <span class="inline-block text-sm">
                                                5.6%
                                            </span>
                                        </span>
                                        <span class="block text-sm text-gray-500 dark:text-neutral-500">change</span>
                                    </dt>
                                    <dd class="text-start ps-3">
                                        <span class="text-sm font-semibold text-gray-900 dark:text-neutral-200">7</span>
                                        <span class="block text-sm text-gray-500 dark:text-neutral-500">last week</span>
                                    </dd>
                                </dl>
                            </div>
                            <!-- End Card -->
                        </div>
                        <!-- End Grid -->
                    </div>
                    <!-- End Card Section -->

                    <!-- Table Section -->
                    <div class="max-w-[85rem] px-4 pb-10 sm:px-6 lg:px-8  mx-auto animate__animated animate__backInUp ">
                        <!-- Card -->
                        <div class="flex flex-col">
                            <div class="-m-1.5 overflow-x-auto">
                                <div class="p-1.5 min-w-full inline-block align-middle">
                                    <div
                                        class="overflow-hidden border border-gray-200 rounded-md shadow-sm bg-white/50 dark:bg-neutral-900/50 dark:border-neutral-700">
                                        <!-- Header -->
                                        <div
                                            class="grid gap-3 px-6 py-4 border-b border-gray-200 md:flex md:justify-between md:items-center dark:border-neutral-700">
                                            <div>
                                                <h2 class="text-xl font-semibold text-gray-900 dark:text-neutral-200">
                                                    Users
                                                </h2>
                                                <p class="text-sm text-gray-600 dark:text-neutracursor-pointerl-400">
                                                    Add users, edit and more.
                                                </p>
                                            </div>

                                            <div>
                                                <div class="inline-flex gap-x-2">
                                                    <a class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-900 border border-gray-200 rounded-lg shadow-sm bg-white/50 gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-900 dark:focus:bg-neutral-900"
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
                                                        Add user
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Header -->

                                        <!-- Table -->
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700 ">
                                            <thead class="bg-gray-50 dark:bg-neutral-900/50">
                                                <tr>
                                                    <th scope="col" class="py-3 ps-6 text-start">
                                                        <label for="hs-at-with-checkboxes-main" class="flex">
                                                            <input type="checkbox"
                                                                class="text-blue-600 border-gray-300 rounded shrink-0 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900/50 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-900"
                                                                id="hs-at-with-checkboxes-main">
                                                            <span class="sr-only">Checkbox</span>
                                                        </label>
                                                    </th>

                                                    <th scope="col" class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6 text-start">
                                                        <div class="flex items-center gap-x-2">
                                                            <span
                                                                class="text-xs font-semibold tracking-wide text-gray-900 uppercase dark:text-neutral-200">
                                                                Name
                                                            </span>
                                                        </div>
                                                    </th>

                                                    <th scope="col" class="px-6 py-3 text-start">
                                                        <div class="flex items-center gap-x-2">
                                                            <span
                                                                class="text-xs font-semibold tracking-wide text-gray-900 uppercase dark:text-neutral-200">
                                                                Position
                                                            </span>
                                                        </div>
                                                    </th>

                                                    <th scope="col" class="px-6 py-3 text-start">
                                                        <div class="flex items-center gap-x-2">
                                                            <span
                                                                class="text-xs font-semibold tracking-wide text-gray-900 uppercase dark:text-neutral-200">
                                                                Status
                                                            </span>
                                                        </div>
                                                    </th>

                                                    <th scope="col" class="px-6 py-3 text-start">
                                                        <div class="flex items-center gap-x-2">
                                                            <span
                                                                class="text-xs font-semibold tracking-wide text-gray-900 uppercase dark:text-neutral-200">
                                                                Portfolio
                                                            </span>
                                                        </div>
                                                    </th>

                                                    <th scope="col" class="px-6 py-3 text-start">
                                                        <div class="flex items-center gap-x-2">
                                                            <span
                                                                class="text-xs font-semibold tracking-wide text-gray-900 uppercase dark:text-neutral-200">
                                                                Created
                                                            </span>
                                                        </div>
                                                    </th>

                                                    <th scope="col" class="px-6 py-3 text-end"></th>
                                                </tr>
                                            </thead>

                                            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                                <tr>
                                                    <td class="size-px whitespace-nowrap">
                                                        <div class="py-3 ps-6">
                                                            <label for="hs-at-with-checkboxes-1" class="flex">
                                                                <input type="checkbox"
                                                                    class="text-blue-600 border-gray-300 rounded shrink-0 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900/50 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-900"
                                                                    id="hs-at-with-checkboxes-1">
                                                                <span class="sr-only">Checkbox</span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
                                                            <div class="flex items-center gap-x-3">
                                                                <img class="inline-block size-[38px] rounded-full"
                                                                    src="https://images.unsplash.com/photo-1531927557220-a9e23c1e4794?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                                                    alt="Avatar">
                                                                <div class="grow">
                                                                    <span
                                                                        class="block text-sm font-semibold text-gray-900 dark:text-neutral-200">Christina
                                                                        Bersh</span>
                                                                    <span
                                                                        class="block text-sm text-gray-500 dark:text-neutral-500">christina@site.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="h-px w-72 whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            <span
                                                                class="block text-sm font-semibold text-gray-900 dark:text-neutral-200">Director</span>
                                                            <span
                                                                class="block text-sm text-gray-500 dark:text-neutral-500">Human
                                                                resources</span>
                                                        </div>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            <span
                                                                class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-900 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                                                <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg"
                                                                    width="16" height="16" fill="currentColor"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                                </svg>
                                                                Active
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            <div class="flex items-center gap-x-3">
                                                                <span
                                                                    class="text-xs text-gray-500 dark:text-neutral-500">1/5</span>
                                                                <div
                                                                    class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                                                    <div class="flex flex-col justify-center overflow-hidden bg-gray-900 dark:bg-neutral-200"
                                                                        role="progressbar" style="width: 25%"
                                                                        aria-valuenow="25" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            <span class="text-sm text-gray-500 dark:text-neutral-500">28
                                                                Dec, 12:12</span>
                                                        </div>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <div class="px-6 py-1.5">
                                                            <a class="inline-flex items-center text-sm font-medium text-blue-600 gap-x-1 decoration-2 hover:underline focus:outline-none focus:underline dark:text-blue-500"
                                                                href="#">
                                                                Edit
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="size-px whitespace-nowrap">
                                                        <div class="py-3 ps-6">
                                                            <label for="hs-at-with-checkboxes-2" class="flex">
                                                                <input type="checkbox"
                                                                    class="text-blue-600 border-gray-300 rounded shrink-0 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900/50 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-900"
                                                                    id="hs-at-with-checkboxes-2">
                                                                <span class="sr-only">Checkbox</span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
                                                            <div class="flex items-center gap-x-3">
                                                                <img class="inline-block size-[38px] rounded-full"
                                                                    src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                                                    alt="Avatar">
                                                                <div class="grow">
                                                                    <span
                                                                        class="block text-sm font-semibold text-gray-900 dark:text-neutral-200">David
                                                                        Harrison</span>
                                                                    <span
                                                                        class="block text-sm text-gray-500 dark:text-neutral-500">david@site.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="h-px w-72 whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            <span
                                                                class="block text-sm font-semibold text-gray-900 dark:text-neutral-200">Seller</span>
                                                            <span
                                                                class="block text-sm text-gray-500 dark:text-neutral-500">Branding
                                                                products</span>
                                                        </div>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            <span
                                                                class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-yellow-100 text-yellow-900 rounded-full dark:bg-yellow-500/10 dark:text-yellow-500">
                                                                <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg"
                                                                    width="16" height="16" fill="currentColor"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                                                </svg>
                                                                Warning
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            <div class="flex items-center gap-x-3">
                                                                <span
                                                                    class="text-xs text-gray-500 dark:text-neutral-500">3/5</span>
                                                                <div
                                                                    class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                                                    <div class="flex flex-col justify-center overflow-hidden bg-gray-900 dark:bg-neutral-200"
                                                                        role="progressbar" style="width: 78%"
                                                                        aria-valuenow="78" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            <span class="text-sm text-gray-500 dark:text-neutral-500">20
                                                                Dec, 09:27</span>
                                                        </div>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <div class="px-6 py-1.5">
                                                            <a class="inline-flex items-center text-sm font-medium text-blue-600 gap-x-1 decoration-2 hover:underline focus:outline-none focus:underline dark:text-blue-500"
                                                                href="#">
                                                                Edit
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="size-px whitespace-nowrap">
                                                        <div class="py-3 ps-6">
                                                            <label for="hs-at-with-checkboxes-3" class="flex">
                                                                <input type="checkbox"
                                                                    class="text-blue-600 border-gray-300 rounded shrink-0 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900/50 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-900"
                                                                    id="hs-at-with-checkboxes-3">
                                                                <span class="sr-only">Checkbox</span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
                                                            <div class="flex items-center gap-x-3">
                                                                <span
                                                                    class="inline-flex items-center justify-center size-[38px] rounded-full bg-white/50 border border-gray-300 dark:bg-neutral-900/50 dark:border-neutral-700">
                                                                    <span
                                                                        class="text-sm font-medium leading-none text-gray-900 dark:text-neutral-200">A</span>
                                                                </span>
                                                                <div class="grow">
                                                                    <span
                                                                        class="block text-sm font-semibold text-gray-900 dark:text-neutral-200">Anne
                                                                        Richard</span>
                                                                    <span
                                                                        class="block text-sm text-gray-500 dark:text-neutral-500">anne@site.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="h-px w-72 whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            <span
                                                                class="block text-sm font-semibold text-gray-900 dark:text-neutral-200">Designer</span>
                                                            <span
                                                                class="block text-sm text-gray-500 dark:text-neutral-500">IT
                                                                department</span>
                                                        </div>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            <span
                                                                class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-900 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                                                <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg"
                                                                    width="16" height="16" fill="currentColor"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                                </svg>
                                                                Active
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            <div class="flex items-center gap-x-3">
                                                                <span
                                                                    class="text-xs text-gray-500 dark:text-neutral-500">5/5</span>
                                                                <div
                                                                    class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                                                    <div class="flex flex-col justify-center overflow-hidden bg-gray-900 dark:bg-neutral-200"
                                                                        role="progressbar" style="width: 100%"
                                                                        aria-valuenow="100" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            <span class="text-sm text-gray-500 dark:text-neutral-500">18
                                                                Dec, 15:20</span>
                                                        </div>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <div class="px-6 py-1.5">
                                                            <a class="inline-flex items-center text-sm font-medium text-blue-600 gap-x-1 decoration-2 hover:underline focus:outline-none focus:underline dark:text-blue-500"
                                                                href="#">
                                                                Edit
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="size-px whitespace-nowrap">
                                                        <div class="py-3 ps-6">
                                                            <label for="hs-at-with-checkboxes-4" class="flex">
                                                                <input type="checkbox"
                                                                    class="text-blue-600 border-gray-300 rounded shrink-0 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900/50 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-900"
                                                                    id="hs-at-with-checkboxes-4">
                                                                <span class="sr-only">Checkbox</span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
                                                            <div class="flex items-center gap-x-3">
                                                                <img class="inline-block size-[38px] rounded-full"
                                                                    src="https://images.unsplash.com/photo-1541101767792-f9b2b1c4f127?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&&auto=format&fit=facearea&facepad=3&w=320&h=320&q=80"
                                                                    alt="Avatar">
                                                                <div class="grow">
                                                                    <span
                                                                        class="block text-sm font-semibold text-gray-900 dark:text-neutral-200">Samia
                                                                        Kartoon</span>
                                                                    <span
                                                                        class="block text-sm text-gray-500 dark:text-neutral-500">samia@site.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="h-px w-72 whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            <span
                                                                class="block text-sm font-semibold text-gray-900 dark:text-neutral-200">Executive
                                                                director</span>
                                                            <span
                                                                class="block text-sm text-gray-500 dark:text-neutral-500">Marketing</span>
                                                        </div>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            <span
                                                                class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-teal-100 text-teal-900 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                                                                <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg"
                                                                    width="16" height="16" fill="currentColor"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                                </svg>
                                                                Active
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            <div class="flex items-center gap-x-3">
                                                                <span
                                                                    class="text-xs text-gray-500 dark:text-neutral-500">0/5</span>
                                                                <div
                                                                    class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                                                    <div class="flex flex-col justify-center overflow-hidden bg-gray-900 dark:bg-neutral-200"
                                                                        role="progressbar" style="width: 1%"
                                                                        aria-valuenow="1" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            <span class="text-sm text-gray-500 dark:text-neutral-500">18
                                                                Dec, 15:20</span>
                                                        </div>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <div class="px-6 py-1.5">
                                                            <a class="inline-flex items-center text-sm font-medium text-blue-600 gap-x-1 decoration-2 hover:underline focus:outline-none focus:underline dark:text-blue-500"
                                                                href="#">
                                                                Edit
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="size-px whitespace-nowrap">
                                                        <div class="py-3 ps-6">
                                                            <label for="hs-at-with-checkboxes-5" class="flex">
                                                                <input type="checkbox"
                                                                    class="text-blue-600 border-gray-300 rounded shrink-0 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900/50 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-900"
                                                                    id="hs-at-with-checkboxes-5">
                                                                <span class="sr-only">Checkbox</span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <div class="py-3 ps-6 lg:ps-3 xl:ps-0 pe-6">
                                                            <div class="flex items-center gap-x-3">
                                                                <span
                                                                    class="inline-flex items-center justify-center size-[38px] rounded-full bg-white/50 border border-gray-300 dark:bg-neutral-900/50 dark:border-neutral-700">
                                                                    <span
                                                                        class="text-sm font-medium leading-none text-gray-900 dark:text-neutral-200">D</span>
                                                                </span>
                                                                <div class="grow">
                                                                    <span
                                                                        class="block text-sm font-semibold text-gray-900 dark:text-neutral-200">David
                                                                        Harrison</span>
                                                                    <span
                                                                        class="block text-sm text-gray-500 dark:text-neutral-500">david@site.com</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="h-px w-72 whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            <span
                                                                class="block text-sm font-semibold text-gray-900 dark:text-neutral-200">Developer</span>
                                                            <span
                                                                class="block text-sm text-gray-500 dark:text-neutral-500">Mobile
                                                                app</span>
                                                        </div>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            <span
                                                                class="py-1 px-1.5 inline-flex items-center gap-x-1 text-xs font-medium bg-red-100 text-red-900 rounded-full dark:bg-red-500/10 dark:text-red-500">
                                                                <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg"
                                                                    width="16" height="16" fill="currentColor"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                                                </svg>
                                                                Danger
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            <div class="flex items-center gap-x-3">
                                                                <span
                                                                    class="text-xs text-gray-500 dark:text-neutral-500">3/5</span>
                                                                <div
                                                                    class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                                                    <div class="flex flex-col justify-center overflow-hidden bg-gray-900 dark:bg-neutral-200"
                                                                        role="progressbar" style="width: 78%"
                                                                        aria-valuenow="78" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <div class="px-6 py-3">
                                                            <span class="text-sm text-gray-500 dark:text-neutral-500">15
                                                                Dec, 14:41</span>
                                                        </div>
                                                    </td>
                                                    <td class="size-px whitespace-nowrap">
                                                        <div class="px-6 py-1.5">
                                                            <a class="inline-flex items-center text-sm font-medium text-blue-600 gap-x-1 decoration-2 hover:underline focus:outline-none focus:underline dark:text-blue-500"
                                                                href="#">
                                                                Edit
                                                            </a>
                                                        </div>
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
                                                        class="font-semibold text-gray-900 dark:text-neutral-200">12</span>
                                                    results
                                                </p>
                                            </div>

                                            <div>
                                                <div class="inline-flex gap-x-2">
                                                    <button type="button"
                                                        class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white/50 text-gray-900 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-900 dark:focus:bg-neutral-900">
                                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="m15 18-6-6 6-6" />
                                                        </svg>
                                                        Prev
                                                    </button>

                                                    <button type="button"
                                                        class="py-1.5 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white/50 text-gray-900 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-900 dark:focus:bg-neutral-900">
                                                        Next
                                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="m9 18 6-6-6-6" />
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
                    <!-- End Table Section -->

            </div>
        </div>
    </div>
</x-app-layout>
