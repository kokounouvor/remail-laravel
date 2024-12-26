@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto border-b border-gray-200 dark:border-neutral-700">
    <nav class="-mb-0.5 flex justify-center space-x-6 font-semibold" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
        <button type="button" class="uppercase hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500 active" id="horizontal-right-alignment-item-1" aria-selected="true" data-hs-tab="#horizontal-right-alignment-1" aria-controls="horizontal-right-alignment-1" role="tab">
            7 derniers jours
        </button>
        <button type="button" class="uppercase hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500" id="horizontal-right-alignment-item-2" aria-selected="false" data-hs-tab="#horizontal-right-alignment-2" aria-controls="horizontal-right-alignment-2" role="tab">
            Il y a 1 mois
        </button>
        <button type="button" class="uppercase hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500" id="horizontal-right-alignment-item-3" aria-selected="false" data-hs-tab="#horizontal-right-alignment-3" aria-controls="horizontal-right-alignment-3" role="tab">
            Il y a 1 an
        </button>
    </nav>
</div>

<div class="max-w-5xl mx-auto space-y-5 mt-5">
    <div id="horizontal-right-alignment-1" class="space-y-5" role="tabpanel" aria-labelledby="horizontal-right-alignment-item-1">
        <!-- Grid -->
        <div class="grid md:grid-cols-3 border border-gray-200 shadow-sm rounded-xl overflow-hidden dark:border-neutral-800">
            <!-- Card -->
            <a class="block p-4 md:p-5 relative bg-white hover:bg-gray-50 focus:outline-none focus:bg-gray-50 before:absolute before:top-0 before:start-0 before:w-full before:h-px md:before:w-px md:before:h-full before:bg-gray-200 before:first:bg-transparent dark:bg-neutral-900 dark:before:bg-neutral-800 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                <div class="flex md:flex flex-col lg:flex-row gap-y-3 gap-x-5">
                    <svg class="shrink-0 size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
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
                    <svg class="shrink-0 size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 22h14" />
                        <path d="M5 2h14" />
                        <path d="M17 22v-4.172a2 2 0 0 0-.586-1.414L12 12l-4.414 4.414A2 2 0 0 0 7 17.828V22" />
                        <path d="M7 2v4.172a2 2 0 0 0 .586 1.414L12 12l4.414-4.414A2 2 0 0 0 17 6.172V2" />
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
                    <svg class="shrink-0 size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12s2.545-5 7-5c4.454 0 7 5 7 5s-2.546 5-7 5c-4.455 0-7-5-7-5z" />
                        <path d="M12 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        <path d="M21 17v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2" />
                        <path d="M21 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2" />
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
    <div id="horizontal-right-alignment-2" class="hidden space-y-5" role="tabpanel" aria-labelledby="horizontal-right-alignment-item-2">
        <!-- Grid -->
        <div class="grid md:grid-cols-3 border border-gray-200 shadow-sm rounded-xl overflow-hidden dark:border-neutral-800">
            <!-- Card -->
            <a class="block p-4 md:p-5 relative bg-white hover:bg-gray-50 focus:outline-none focus:bg-gray-50 before:absolute before:top-0 before:start-0 before:w-full before:h-px md:before:w-px md:before:h-full before:bg-gray-200 before:first:bg-transparent dark:bg-neutral-900 dark:before:bg-neutral-800 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                <div class="flex md:flex flex-col lg:flex-row gap-y-3 gap-x-5">
                    <svg class="shrink-0 size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
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
                    <svg class="shrink-0 size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 22h14" />
                        <path d="M5 2h14" />
                        <path d="M17 22v-4.172a2 2 0 0 0-.586-1.414L12 12l-4.414 4.414A2 2 0 0 0 7 17.828V22" />
                        <path d="M7 2v4.172a2 2 0 0 0 .586 1.414L12 12l4.414-4.414A2 2 0 0 0 17 6.172V2" />
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
                    <svg class="shrink-0 size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12s2.545-5 7-5c4.454 0 7 5 7 5s-2.546 5-7 5c-4.455 0-7-5-7-5z" />
                        <path d="M12 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        <path d="M21 17v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2" />
                        <path d="M21 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2" />
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
    <div id="horizontal-right-alignment-3" class="hidden space-y-5" role="tabpanel" aria-labelledby="horizontal-right-alignment-item-3">
        <!-- Grid -->
        <div class="grid md:grid-cols-3 border border-gray-200 shadow-sm rounded-xl overflow-hidden dark:border-neutral-800">
            <!-- Card -->
            <a class="block p-4 md:p-5 relative bg-white hover:bg-gray-50 focus:outline-none focus:bg-gray-50 before:absolute before:top-0 before:start-0 before:w-full before:h-px md:before:w-px md:before:h-full before:bg-gray-200 before:first:bg-transparent dark:bg-neutral-900 dark:before:bg-neutral-800 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                <div class="flex md:flex flex-col lg:flex-row gap-y-3 gap-x-5">
                    <svg class="shrink-0 size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
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
                    <svg class="shrink-0 size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 22h14" />
                        <path d="M5 2h14" />
                        <path d="M17 22v-4.172a2 2 0 0 0-.586-1.414L12 12l-4.414 4.414A2 2 0 0 0 7 17.828V22" />
                        <path d="M7 2v4.172a2 2 0 0 0 .586 1.414L12 12l4.414-4.414A2 2 0 0 0 17 6.172V2" />
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
                    <svg class="shrink-0 size-5 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12s2.545-5 7-5c4.454 0 7 5 7 5s-2.546 5-7 5c-4.455 0-7-5-7-5z" />
                        <path d="M12 13a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                        <path d="M21 17v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2" />
                        <path d="M21 7V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2" />
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

<!-- Features -->
<div class="max-w-5xl bg-white rounded-2xl mt-5 px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Grid -->
    <div class="lg:grid lg:grid-cols-12 lg:gap-16 lg:items-center">
        <div class="lg:col-span-6">
            <!-- Grid -->
            <div class="grid grid-cols-12 gap-2 sm:gap-6 items-center">
                <div class="col-span-4">
                    <img class="rounded-xl" src="https://images.unsplash.com/photo-1605629921711-2f6b00c6bbf4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=920&q=80" alt="Features Image">
                </div>
                <!-- End Col -->

                <div class="col-span-8">
                    <img class="rounded-xl" src="https://images.unsplash.com/photo-1600194992440-50b26e0a0309?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=920&q=80" alt="Features Image">
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->
        </div>
        <!-- End Col -->

        <div class="mt-5 sm:mt-10 lg:mt-0 lg:col-span-6">
            <div class="space-y-6 sm:space-y-8">
                <!-- Title -->
                <div class="space-y-2 md:space-y-4">
                    <h2 class="font-bold text-3xl lg:text-4xl text-gray-800 dark:text-neutral-200">
                        REMAIL - Solution de Marketing par Email
                    </h2>
                    <p class="text-gray-500 dark:text-neutral-500">
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
                            <span class="text-sm sm:text-base text-gray-500 dark:text-neutral-500">
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
                            <span class="text-sm sm:text-base text-gray-500 dark:text-neutral-500">
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
                            <span class="text-sm sm:text-base text-gray-500 dark:text-neutral-500">
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
                            <span class="text-sm sm:text-base text-gray-500 dark:text-neutral-500">
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