@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="flex justify-between items-center">
        <h2>Tableau de Bord</h2>
        <div class="flex justify-end">
            <div class="flex bg-gray-100 hover:bg-gray-50 rounded-2xl transition p-1 dark:bg-neutral-700 dark:hover:bg-neutral-600">
                <nav class="flex gap-x-1" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                    <button type="button" class="hs-tab-active:bg-white hs-tab-active:text-gray-700 hs-tab-active:dark:bg-neutral-800 hs-tab-active:dark:text-neutral-400 dark:hs-tab-active:bg-gray-800 py-3 px-4 inline-flex items-center gap-x-2 bg-transparent text-sm text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 font-medium rounded-2xl hover:hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-white dark:focus:text-white active" id="segment-item-1" aria-selected="true" data-hs-tab="#segment-1" aria-controls="segment-1" role="tab">
                        7 Jours
                    </button>
                    <button type="button" class="hs-tab-active:bg-white hs-tab-active:text-gray-700 hs-tab-active:dark:bg-neutral-800 hs-tab-active:dark:text-neutral-400 dark:hs-tab-active:bg-gray-800 py-3 px-4 inline-flex items-center gap-x-2 bg-transparent text-sm text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 font-medium rounded-2xl hover:hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-white dark:focus:text-white" id="segment-item-2" aria-selected="false" data-hs-tab="#segment-2" aria-controls="segment-2" role="tab">
                        1 Mois
                    </button>
                    <button type="button" class="hs-tab-active:bg-white hs-tab-active:text-gray-700 hs-tab-active:dark:bg-neutral-800 hs-tab-active:dark:text-neutral-400 dark:hs-tab-active:bg-gray-800 py-3 px-4 inline-flex items-center gap-x-2 bg-transparent text-sm text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 font-medium rounded-2xl hover:hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-white dark:focus:text-white" id="segment-item-3" aria-selected="false" data-hs-tab="#segment-3" aria-controls="segment-3" role="tab">
                        1 an
                    </button>
                </nav>
            </div>
        </div>
    </div>

    <div class="mt-3">
        <div id="segment-1" role="tabpanel" aria-labelledby="segment-item-1">
            <!-- Grid -->
            <div class="grid md:grid-cols-3 border border-gray-200 shadow-sm rounded-xl overflow-hidden dark:border-neutral-800">
                <!-- Card -->
                <a class="block p-4 md:p-5 relative bg-white hover:bg-gray-50 focus:outline-none focus:bg-gray-50 before:absolute before:top-0 before:start-0 before:w-full before:h-px md:before:w-px md:before:h-full before:bg-gray-200 before:first:bg-transparent dark:bg-neutral-900 dark:before:bg-neutral-800 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                    <div class="flex md:flex flex-col lg:flex-row gap-y-3 gap-x-5">
                        <svg class="shrink-0 size-7 text-gray-600 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g fill="none">
                                <path d="m12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036q-.016-.004-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z" />
                                <path fill="currentColor" d="M16 7A5 5 0 1 1 6 7a5 5 0 0 1 10 0m-5 6c2.396 0 4.575.694 6.178 1.672c.8.488 1.484 1.064 1.978 1.69c.486.615.844 1.351.844 2.138c0 .845-.411 1.511-1.003 1.986c-.56.45-1.299.748-2.084.956c-1.578.417-3.684.558-5.913.558s-4.335-.14-5.913-.558c-.785-.208-1.524-.506-2.084-.956C2.41 20.01 2 19.345 2 18.5c0-.787.358-1.523.844-2.139c.494-.625 1.177-1.2 1.978-1.69C6.425 13.695 8.605 13 11 13m10 0a1 1 0 0 1 .117 1.993L21 15h-1a1 1 0 0 1-.117-1.993L20 13zm-3-2a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2h-2a1 1 0 0 1-1-1m0-4a1 1 0 1 0 0 2h3a1 1 0 1 0 0-2z" />
                            </g>
                        </svg>

                        <div class="grow">
                            <p class="text-xs uppercase tracking-wide font-medium text-gray-800 dark:text-neutral-200">
                                Total Contacts
                            </p>
                            <h3 class="mt-1 text-xl sm:text-2xl font-semibold text-blue-600 dark:text-blue-500">
                                {{ $statistics['this_week']['total_contacts'] }}
                            </h3>
                        </div>
                    </div>
                </a>
                <!-- End Card -->

                <!-- Card -->
                <a class="block p-4 md:p-5 relative bg-white hover:bg-gray-50 focus:outline-none focus:bg-gray-50 before:absolute before:top-0 before:start-0 before:w-full before:h-px md:before:w-px md:before:h-full before:bg-gray-200 before:first:bg-transparent dark:bg-neutral-900 dark:before:bg-neutral-800 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                    <div class="flex md:flex flex-col lg:flex-row gap-y-3 gap-x-5">
                        <svg class="shrink-0 size-7 text-gray-600 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M23 6.5a5.5 5.5 0 1 1-11 0a5.5 5.5 0 0 1 11 0m-2.146-2.354a.5.5 0 0 0-.708 0L16.5 7.793l-1.646-1.647a.5.5 0 0 0-.708.708l2 2a.5.5 0 0 0 .708 0l4-4a.5.5 0 0 0 0-.708M17.5 13a6.48 6.48 0 0 0 4.5-1.81v5.56a3.25 3.25 0 0 1-3.066 3.245L18.75 20H5.25a3.25 3.25 0 0 1-3.245-3.066L2 16.75V8.608l9.652 5.056a.75.75 0 0 0 .696 0l2.417-1.266A6.5 6.5 0 0 0 17.5 13M5.25 4h6.248A6.5 6.5 0 0 0 11 6.5c0 1.993.897 3.776 2.308 4.968L12 12.153l-9.984-5.23a3.25 3.25 0 0 1 3.048-2.918z" />
                        </svg>

                        <div class="grow">
                            <p class="text-xs uppercase tracking-wide font-medium text-gray-800 dark:text-neutral-200">
                                Envoie Réussie
                            </p>
                            <h3 class="mt-1 text-xl sm:text-2xl font-semibold text-blue-600 dark:text-blue-500">
                                {{ $statistics['this_week']['sent_messages'] }}
                            </h3>
                        </div>
                    </div>
                </a>
                <!-- End Card -->

                <!-- Card -->
                <a class="block p-4 md:p-5 relative bg-white hover:bg-gray-50 focus:outline-none focus:bg-gray-50 before:absolute before:top-0 before:start-0 before:w-full before:h-px md:before:w-px md:before:h-full before:bg-gray-200 before:first:bg-transparent dark:bg-neutral-900 dark:before:bg-neutral-800 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                    <div class="flex md:flex flex-col lg:flex-row gap-y-3 gap-x-5">
                        <svg class="shrink-0 size-7 text-gray-600 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M23 6.5a5.5 5.5 0 1 1-11 0a5.5 5.5 0 0 1 11 0m-7.146-2.354a.5.5 0 0 0-.708.708L16.793 6.5l-1.647 1.646a.5.5 0 0 0 .708.708L17.5 7.207l1.646 1.647a.5.5 0 0 0 .708-.708L18.207 6.5l1.647-1.646a.5.5 0 0 0-.708-.708L17.5 5.793zM17.5 13a6.48 6.48 0 0 0 4.5-1.81v5.56a3.25 3.25 0 0 1-3.066 3.245L18.75 20H5.25a3.25 3.25 0 0 1-3.245-3.066L2 16.75V8.608l9.652 5.056a.75.75 0 0 0 .696 0l2.417-1.266A6.5 6.5 0 0 0 17.5 13M5.25 4h6.248A6.5 6.5 0 0 0 11 6.5c0 1.993.897 3.776 2.308 4.968L12 12.153l-9.984-5.23a3.25 3.25 0 0 1 3.048-2.918z" />
                        </svg>

                        <div class="grow">
                            <p class="text-xs uppercase tracking-wide font-medium text-gray-800 dark:text-neutral-200">
                                Bouncés
                            </p>
                            <h3 class="mt-1 text-xl sm:text-2xl font-semibold text-blue-600 dark:text-blue-500">
                                {{ $statistics['this_week']['bounced_messages'] }}
                            </h3>
                        </div>
                    </div>
                </a>
                <!-- End Card -->
            </div>
        </div>
        <div id="segment-2" class="hidden" role="tabpanel" aria-labelledby="segment-item-2">
            <!-- Grid -->
            <div class="grid md:grid-cols-3 border border-gray-200 shadow-sm rounded-xl overflow-hidden dark:border-neutral-800">
                <!-- Card -->
                <a class="block p-4 md:p-5 relative bg-white hover:bg-gray-50 focus:outline-none focus:bg-gray-50 before:absolute before:top-0 before:start-0 before:w-full before:h-px md:before:w-px md:before:h-full before:bg-gray-200 before:first:bg-transparent dark:bg-neutral-900 dark:before:bg-neutral-800 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                    <div class="flex md:flex flex-col lg:flex-row gap-y-3 gap-x-5">
                        <svg class="shrink-0 size-7 text-gray-600 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g fill="none">
                                <path d="m12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036q-.016-.004-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z" />
                                <path fill="currentColor" d="M16 7A5 5 0 1 1 6 7a5 5 0 0 1 10 0m-5 6c2.396 0 4.575.694 6.178 1.672c.8.488 1.484 1.064 1.978 1.69c.486.615.844 1.351.844 2.138c0 .845-.411 1.511-1.003 1.986c-.56.45-1.299.748-2.084.956c-1.578.417-3.684.558-5.913.558s-4.335-.14-5.913-.558c-.785-.208-1.524-.506-2.084-.956C2.41 20.01 2 19.345 2 18.5c0-.787.358-1.523.844-2.139c.494-.625 1.177-1.2 1.978-1.69C6.425 13.695 8.605 13 11 13m10 0a1 1 0 0 1 .117 1.993L21 15h-1a1 1 0 0 1-.117-1.993L20 13zm-3-2a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2h-2a1 1 0 0 1-1-1m0-4a1 1 0 1 0 0 2h3a1 1 0 1 0 0-2z" />
                            </g>
                        </svg>

                        <div class="grow">
                            <p class="text-xs uppercase tracking-wide font-medium text-gray-800 dark:text-neutral-200">
                                Total Contacts
                            </p>
                            <h3 class="mt-1 text-xl sm:text-2xl font-semibold text-blue-600 dark:text-blue-500">
                                {{ $statistics['last_month']['total_contacts'] }}
                            </h3>
                        </div>
                    </div>
                </a>
                <!-- End Card -->

                <!-- Card -->
                <a class="block p-4 md:p-5 relative bg-white hover:bg-gray-50 focus:outline-none focus:bg-gray-50 before:absolute before:top-0 before:start-0 before:w-full before:h-px md:before:w-px md:before:h-full before:bg-gray-200 before:first:bg-transparent dark:bg-neutral-900 dark:before:bg-neutral-800 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                    <div class="flex md:flex flex-col lg:flex-row gap-y-3 gap-x-5">
                        <svg class="shrink-0 size-7 text-gray-600 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M23 6.5a5.5 5.5 0 1 1-11 0a5.5 5.5 0 0 1 11 0m-2.146-2.354a.5.5 0 0 0-.708 0L16.5 7.793l-1.646-1.647a.5.5 0 0 0-.708.708l2 2a.5.5 0 0 0 .708 0l4-4a.5.5 0 0 0 0-.708M17.5 13a6.48 6.48 0 0 0 4.5-1.81v5.56a3.25 3.25 0 0 1-3.066 3.245L18.75 20H5.25a3.25 3.25 0 0 1-3.245-3.066L2 16.75V8.608l9.652 5.056a.75.75 0 0 0 .696 0l2.417-1.266A6.5 6.5 0 0 0 17.5 13M5.25 4h6.248A6.5 6.5 0 0 0 11 6.5c0 1.993.897 3.776 2.308 4.968L12 12.153l-9.984-5.23a3.25 3.25 0 0 1 3.048-2.918z" />
                        </svg>

                        <div class="grow">
                            <p class="text-xs uppercase tracking-wide font-medium text-gray-800 dark:text-neutral-200">
                                Envoie Réussie
                            </p>
                            <h3 class="mt-1 text-xl sm:text-2xl font-semibold text-blue-600 dark:text-blue-500">
                                {{ $statistics['last_month']['sent_messages'] }}
                            </h3>
                        </div>
                    </div>
                </a>
                <!-- End Card -->

                <!-- Card -->
                <a class="block p-4 md:p-5 relative bg-white hover:bg-gray-50 focus:outline-none focus:bg-gray-50 before:absolute before:top-0 before:start-0 before:w-full before:h-px md:before:w-px md:before:h-full before:bg-gray-200 before:first:bg-transparent dark:bg-neutral-900 dark:before:bg-neutral-800 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                    <div class="flex md:flex flex-col lg:flex-row gap-y-3 gap-x-5">
                        <svg class="shrink-0 size-7 text-gray-600 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M23 6.5a5.5 5.5 0 1 1-11 0a5.5 5.5 0 0 1 11 0m-7.146-2.354a.5.5 0 0 0-.708.708L16.793 6.5l-1.647 1.646a.5.5 0 0 0 .708.708L17.5 7.207l1.646 1.647a.5.5 0 0 0 .708-.708L18.207 6.5l1.647-1.646a.5.5 0 0 0-.708-.708L17.5 5.793zM17.5 13a6.48 6.48 0 0 0 4.5-1.81v5.56a3.25 3.25 0 0 1-3.066 3.245L18.75 20H5.25a3.25 3.25 0 0 1-3.245-3.066L2 16.75V8.608l9.652 5.056a.75.75 0 0 0 .696 0l2.417-1.266A6.5 6.5 0 0 0 17.5 13M5.25 4h6.248A6.5 6.5 0 0 0 11 6.5c0 1.993.897 3.776 2.308 4.968L12 12.153l-9.984-5.23a3.25 3.25 0 0 1 3.048-2.918z" />
                        </svg>

                        <div class="grow">
                            <p class="text-xs uppercase tracking-wide font-medium text-gray-800 dark:text-neutral-200">
                                Bouncés
                            </p>
                            <h3 class="mt-1 text-xl sm:text-2xl font-semibold text-blue-600 dark:text-blue-500">
                                {{ $statistics['last_month']['bounced_messages'] }}
                            </h3>
                        </div>
                    </div>
                </a>
                <!-- End Card -->
            </div>
        </div>
        <div id="segment-3" class="hidden" role="tabpanel" aria-labelledby="segment-item-3">
            <!-- Grid -->
            <div class="grid md:grid-cols-3 border border-gray-200 shadow-sm rounded-xl overflow-hidden dark:border-neutral-800">
                <!-- Card -->
                <a class="block p-4 md:p-5 relative bg-white hover:bg-gray-50 focus:outline-none focus:bg-gray-50 before:absolute before:top-0 before:start-0 before:w-full before:h-px md:before:w-px md:before:h-full before:bg-gray-200 before:first:bg-transparent dark:bg-neutral-900 dark:before:bg-neutral-800 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                    <div class="flex md:flex flex-col lg:flex-row gap-y-3 gap-x-5">
                        <svg class="shrink-0 size-7 text-gray-600 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g fill="none">
                                <path d="m12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036q-.016-.004-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z" />
                                <path fill="currentColor" d="M16 7A5 5 0 1 1 6 7a5 5 0 0 1 10 0m-5 6c2.396 0 4.575.694 6.178 1.672c.8.488 1.484 1.064 1.978 1.69c.486.615.844 1.351.844 2.138c0 .845-.411 1.511-1.003 1.986c-.56.45-1.299.748-2.084.956c-1.578.417-3.684.558-5.913.558s-4.335-.14-5.913-.558c-.785-.208-1.524-.506-2.084-.956C2.41 20.01 2 19.345 2 18.5c0-.787.358-1.523.844-2.139c.494-.625 1.177-1.2 1.978-1.69C6.425 13.695 8.605 13 11 13m10 0a1 1 0 0 1 .117 1.993L21 15h-1a1 1 0 0 1-.117-1.993L20 13zm-3-2a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2h-2a1 1 0 0 1-1-1m0-4a1 1 0 1 0 0 2h3a1 1 0 1 0 0-2z" />
                            </g>
                        </svg>

                        <div class="grow">
                            <p class="text-xs uppercase tracking-wide font-medium text-gray-800 dark:text-neutral-200">
                                Total Contacts
                            </p>
                            <h3 class="mt-1 text-xl sm:text-2xl font-semibold text-blue-600 dark:text-blue-500">
                                {{ $statistics['last_year']['total_contacts'] }}
                            </h3>
                        </div>
                    </div>
                </a>
                <!-- End Card -->

                <!-- Card -->
                <a class="block p-4 md:p-5 relative bg-white hover:bg-gray-50 focus:outline-none focus:bg-gray-50 before:absolute before:top-0 before:start-0 before:w-full before:h-px md:before:w-px md:before:h-full before:bg-gray-200 before:first:bg-transparent dark:bg-neutral-900 dark:before:bg-neutral-800 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                    <div class="flex md:flex flex-col lg:flex-row gap-y-3 gap-x-5">
                        <svg class="shrink-0 size-7 text-gray-600 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M23 6.5a5.5 5.5 0 1 1-11 0a5.5 5.5 0 0 1 11 0m-2.146-2.354a.5.5 0 0 0-.708 0L16.5 7.793l-1.646-1.647a.5.5 0 0 0-.708.708l2 2a.5.5 0 0 0 .708 0l4-4a.5.5 0 0 0 0-.708M17.5 13a6.48 6.48 0 0 0 4.5-1.81v5.56a3.25 3.25 0 0 1-3.066 3.245L18.75 20H5.25a3.25 3.25 0 0 1-3.245-3.066L2 16.75V8.608l9.652 5.056a.75.75 0 0 0 .696 0l2.417-1.266A6.5 6.5 0 0 0 17.5 13M5.25 4h6.248A6.5 6.5 0 0 0 11 6.5c0 1.993.897 3.776 2.308 4.968L12 12.153l-9.984-5.23a3.25 3.25 0 0 1 3.048-2.918z" />
                        </svg>

                        <div class="grow">
                            <p class="text-xs uppercase tracking-wide font-medium text-gray-800 dark:text-neutral-200">
                                Envoie Réussie
                            </p>
                            <h3 class="mt-1 text-xl sm:text-2xl font-semibold text-blue-600 dark:text-blue-500">
                                {{ $statistics['last_year']['sent_messages'] }}
                            </h3>
                        </div>
                    </div>
                </a>
                <!-- End Card -->

                <!-- Card -->
                <a class="block p-4 md:p-5 relative bg-white hover:bg-gray-50 focus:outline-none focus:bg-gray-50 before:absolute before:top-0 before:start-0 before:w-full before:h-px md:before:w-px md:before:h-full before:bg-gray-200 before:first:bg-transparent dark:bg-neutral-900 dark:before:bg-neutral-800 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                    <div class="flex md:flex flex-col lg:flex-row gap-y-3 gap-x-5">
                        <svg class="shrink-0 size-7 text-gray-600 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M23 6.5a5.5 5.5 0 1 1-11 0a5.5 5.5 0 0 1 11 0m-7.146-2.354a.5.5 0 0 0-.708.708L16.793 6.5l-1.647 1.646a.5.5 0 0 0 .708.708L17.5 7.207l1.646 1.647a.5.5 0 0 0 .708-.708L18.207 6.5l1.647-1.646a.5.5 0 0 0-.708-.708L17.5 5.793zM17.5 13a6.48 6.48 0 0 0 4.5-1.81v5.56a3.25 3.25 0 0 1-3.066 3.245L18.75 20H5.25a3.25 3.25 0 0 1-3.245-3.066L2 16.75V8.608l9.652 5.056a.75.75 0 0 0 .696 0l2.417-1.266A6.5 6.5 0 0 0 17.5 13M5.25 4h6.248A6.5 6.5 0 0 0 11 6.5c0 1.993.897 3.776 2.308 4.968L12 12.153l-9.984-5.23a3.25 3.25 0 0 1 3.048-2.918z" />
                        </svg>

                        <div class="grow">
                            <p class="text-xs uppercase tracking-wide font-medium text-gray-800 dark:text-neutral-200">
                                Bouncés
                            </p>
                            <h3 class="mt-1 text-xl sm:text-2xl font-semibold text-blue-600 dark:text-blue-500">
                                {{ $statistics['last_year']['bounced_messages'] }}
                            </h3>
                        </div>
                    </div>
                </a>
                <!-- End Card -->
            </div>
        </div>
    </div>
</div>

<div class="max-w-4xl mx-auto hidden">
    <!-- Card -->
    <div class="p-4 md:p-5 min-h-[410px] flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
        <!-- Header -->
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-sm text-gray-500 dark:text-neutral-500">
                    Income
                </h2>
                <p class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                    $126,238.49
                </p>
            </div>

            <div>
                <span class="py-[5px] px-1.5 inline-flex items-center gap-x-1 text-xs font-medium rounded-md bg-teal-100 text-teal-800 dark:bg-teal-500/10 dark:text-teal-500">
                    <svg class="inline-block size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 5v14" />
                        <path d="m19 12-7 7-7-7" />
                    </svg>
                    25%
                </span>
            </div>
        </div>
        <!-- End Header -->

        <div id="hs-multiple-bar-charts"></div>
    </div>
    <!-- End Card -->
</div>

<!-- Features -->
<div class="max-w-4xl bg-white rounded-2xl mt-5 px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Grid -->
    <div class="lg:grid lg:grid-cols-12 lg:gap-16 lg:items-center">
        <div class="lg:col-span-6">

            <figure class="ms-auto me-20 relative z-[1] max-w-full w-[50rem] h-auto shadow-[0_2.75rem_3.5rem_-2rem_rgb(45_55_75_/_20%),_0_0_5rem_-2rem_rgb(45_55_75_/_15%)] dark:shadow-[0_2.75rem_3.5rem_-2rem_rgb(0_0_0_/_20%),_0_0_5rem_-2rem_rgb(0_0_0_/_15%)] rounded-b-lg">
                <div class="relative flex items-center max-w-[50rem] bg-gray-800 rounded-t-lg py-2 px-24 dark:bg-neutral-700">
                    <div class="flex gap-x-1 absolute top-2/4 start-4 -translate-y-1">
                        <span class="size-2 bg-gray-600 rounded-full dark:bg-neutral-600"></span>
                        <span class="size-2 bg-gray-600 rounded-full dark:bg-neutral-600"></span>
                        <span class="size-2 bg-gray-600 rounded-full dark:bg-neutral-600"></span>
                    </div>
                    <div class="flex justify-center items-center size-full bg-gray-700 text-[.25rem] text-gray-400 rounded-sm sm:text-[.5rem] dark:bg-neutral-600 dark:text-neutral-400">www.preline.com</div>
                </div>

                <div class="bg-gray-800 rounded-b-lg">
                    <img class="max-w-full h-auto rounded-b-lg" src="/assets/img/mockups/MacBook-Pro-1735631820469.jpeg" alt="Browser Placeholder">
                </div>
            </figure>
        </div>
        <!-- End Col -->

        <div class="mt-5 sm:mt-10 lg:mt-0 lg:col-span-6">
            <div class="space-y-6 sm:space-y-8">
                <!-- Title -->
                <div class="space-y-2 md:space-y-4">
                    <h2 class="font-bold text-3xl lg:text-4xl text-gray-800 dark:text-neutral-200">
                        <span class="text-blue-600">REMAIL</span> - Solution de Marketing par Email
                    </h2>
                    <p class="text-gray-500 dark:text-neutral-500 hidden">
                        REMAIL est une solution puissante et intuitive pour gérer vos campagnes de marketing par email. Optimisez vos envois et suivez vos performances en temps réel.
                    </p>
                </div>
                <!-- End Title -->

                <!-- List -->
                <ul class="space-y-2 sm:space-y-4">
                    <li class="flex gap-x-3">
                        <span class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-800/30 dark:text-blue-500">
                            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </span>
                        <div class="grow">
                            <span class="text-sm text-gray-500 dark:text-neutral-500">
                                Gestion <span class="font-bold">avancée</span> des contacts et segmentation
                            </span>
                        </div>
                    </li>

                    <li class="flex gap-x-3">
                        <span class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-800/30 dark:text-blue-500">
                            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </span>
                        <div class="grow">
                            <span class="text-sm text-gray-500 dark:text-neutral-500">
                                Création de campagnes d'emails personnalisées
                            </span>
                        </div>
                    </li>

                    <li class="flex gap-x-3">
                        <span class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-800/30 dark:text-blue-500">
                            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </span>
                        <div class="grow">
                            <span class="text-sm text-gray-500 dark:text-neutral-500">
                                <span class="font-bold">Suivi</span> des taux d'ouverture, de clics et des bounces
                            </span>
                        </div>
                    </li>

                    <li class="flex gap-x-3">
                        <span class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-800/30 dark:text-blue-500">
                            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12" />
                            </svg>
                        </span>
                        <div class="grow">
                            <span class="text-sm text-gray-500 dark:text-neutral-500">
                                <span class="font-bold">Automatisation</span> des envois et des relances
                            </span>
                        </div>
                    </li>
                </ul>
                <!-- End List -->
            </div>
        </div>
        <!-- End Col -->
    </div>
    <!-- End Grid -->
</div>
<!-- End Features -->
@endsection