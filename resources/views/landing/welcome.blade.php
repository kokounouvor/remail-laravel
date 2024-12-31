<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="../../index.htm">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Crafted for agencies and studios specializing in web design and development.">

    <meta name="twitter:site" content="@preline">
    <meta name="twitter:creator" content="@preline">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="REMAIL - Optimisez votre marketing par Email">
    <meta name="twitter:description" content="Crafted for agencies and studios specializing in web design and development.">
    <meta name="twitter:image" content="https://preline.co/assets/img/og-image.png">

    <meta property="og:url" content="https://preline.co/">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Preline">
    <meta property="og:title" content="REMAIL - Optimisez votre marketing par Email">
    <meta property="og:description" content="Crafted for agencies and studios specializing in web design and development.">
    <meta property="og:image" content="https://preline.co/assets/img/og-image.png">

    <!-- Title -->
    <title>REMAIL - Optimisez votre marketing par Email</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/img/logo/icon.png">

    <!-- Theme Check and Update -->
    <script>
        const html = document.querySelector('html');
        const isLightOrAuto = localStorage.getItem('hs_theme') === 'light' || (localStorage.getItem('hs_theme') === 'auto' && !window.matchMedia('(prefers-color-scheme: dark)').matches);
        const isDarkOrAuto = localStorage.getItem('hs_theme') === 'dark' || (localStorage.getItem('hs_theme') === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches);

        if (isLightOrAuto && html.classList.contains('dark')) html.classList.remove('dark');
        else if (isDarkOrAuto && html.classList.contains('light')) html.classList.remove('light');
        else if (isDarkOrAuto && !html.classList.contains('dark')) html.classList.add('dark');
        else if (isLightOrAuto && !html.classList.contains('light')) html.classList.add('light');
    </script>

    <!-- CSS HS -->
    <link rel="stylesheet" href="/assets/css/main.min-2.css?v=2.5.0">
</head>

<body class="bg-gray-100">
    <!-- ========== HEADER ========== -->
    <header class="sticky top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full before:absolute before:inset-0 before:lg:mx-auto before:rounded-[26px] before:bg-neutral-800/30 before:backdrop-blur-md">
        <nav class="relative max-w-[85rem] w-full py-3.5 ps-5 pe-2 md:flex md:items-center md:justify-between md:py-2 lg:mx-auto bg-gray-100" style="background-image: url(/assets/svg/component/hero-gradient.svg);">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <a class="flex-none rounded-md text-xl inline-block font-semibold focus:outline-none focus:opacity-80" href="/" aria-label="Preline">
                    <img src="/assets/img/logo/blue.png" class="h-8 w-full" alt="">
                </a>
                <!-- End Logo -->

                <div class="md:hidden">
                    <button type="button" class="hs-collapse-toggle size-8 flex justify-center items-center text-sm font-semibold rounded-full bg-white shadow-sm disabled:opacity-50 disabled:pointer-events-none" id="hs-navbar-floating-dark-collapse" aria-expanded="false" aria-controls="hs-navbar-floating-dark" aria-label="Toggle navigation" data-hs-collapse="#hs-navbar-floating-dark">
                        <svg class="hs-collapse-open:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" x2="21" y1="6" y2="6"></line>
                            <line x1="3" x2="21" y1="12" y2="12"></line>
                            <line x1="3" x2="21" y1="18" y2="18"></line>
                        </svg>
                        <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Collapse -->
            <div id="hs-navbar-floating-dark" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block" aria-labelledby="hs-navbar-floating-dark-collapse">
                <div class="flex flex-col md:flex-row md:items-center md:justify-end py-2 md:py-0 md:ps-7">
                    <a class="p-3 ps-px sm:px-3 md:py-4 text-sm text-gray-800 hover:text-neutral-300 focus:outline-none focus:text-neutral-300" href="#features">Fonctionnalités</a>
                    <a class="p-3 ps-px sm:px-3 md:py-4 text-sm text-gray-800 hover:text-neutral-300 focus:outline-none focus:text-neutral-300" href="#pricing">Tarifs</a>
                    <a class="p-3 ps-px sm:px-3 md:py-4 text-sm text-gray-800 hover:text-neutral-300 focus:outline-none focus:text-neutral-300" href="#contact">Contact</a>

                    <div class="md:ms-5">
                        <a class="p-3 ps-px sm:px-3 md:py-4 text-sm font-bold text-gray-800 hover:text-neutral-300 focus:outline-none focus:text-neutral-300" href="#contact">Docs</a>
                        <a class="group inline-flex items-center gap-x-2 py-2 px-3 text-blue-600 hover:text-blue-700 border border-2 border-blue-600 font-medium text-sm rounded-full focus:outline-none" href="{{Route('auth.login')}}">
                            Voir la démo
                        </a>
                        <a class="group inline-flex items-center gap-x-2 py-2 px-3 bg-blue-600 hover:bg-blue-700 font-medium text-sm text-white rounded-full focus:outline-none" href="">
                            Télécharger
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Collapse -->
        </nav>
    </header>
    <!-- ========== END HEADER ========== -->

    <!-- Hero -->
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8" style="background-image: url(/assets/svg/component/hero-gradient.svg);">
        <!-- Grid -->
        <div class="grid md:grid-cols-12 gap-4 md:gap-8 xl:gap-20 items-center py-10 md:py-24">
            <div class="md:col-span-4">
                <h1 class="block text-4xl font-bold text-gray-800 sm:text-4xl lg:text-5xl lg:leading-tight dark:text-white">
                    Optimisez votre marketing par Email avec REMAIL
                </h1>
                <p class="mt-3 text-lg text-gray-800 dark:text-neutral-400">
                    Une solution puissante et intuitive pour gérer vos campagnes d'emails et analyser vos performances en temps réel.
                </p>

                <!-- Buttons -->
                <div class="mt-7 grid gap-3 w-full sm:inline-flex">
                    <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="#features">
                        Les fonctionnalités
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6" />
                        </svg>
                    </a>
                    <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#contact">
                        Contactez-nous
                    </a>
                </div>
                <!-- End Buttons -->

                <!-- Review -->
                <div class="mt-6 lg:mt-10 grid grid-cols-2 gap-x-5">
                    <!-- Review -->
                    <div class="py-5">
                        <p class="mt-3 text-sm text-gray-800 dark:text-neutral-200">
                            Avec <span class="font-bold">Laravel 11.0</span>
                        </p>

                        <div class="mt-2">
                            <!-- Star -->
                            <svg class="h-auto w-16 text-gray-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="256" height="264" viewBox="0 0 256 264">
                                <path fill="#ff2d20" d="M255.856 59.62c.095.351.144.713.144 1.077v56.568c0 1.478-.79 2.843-2.073 3.578L206.45 148.18v54.18a4.14 4.14 0 0 1-2.062 3.579l-99.108 57.053c-.227.128-.474.21-.722.299c-.093.03-.18.087-.278.113a4.15 4.15 0 0 1-2.114 0c-.114-.03-.217-.093-.325-.134c-.227-.083-.464-.155-.68-.278L2.073 205.938A4.13 4.13 0 0 1 0 202.36V32.656c0-.372.052-.733.144-1.083c.031-.119.103-.227.145-.346c.077-.216.15-.438.263-.639c.077-.134.19-.242.283-.366c.119-.165.227-.335.366-.48c.119-.118.274-.206.408-.309c.15-.124.283-.258.453-.356h.005L51.613.551a4.14 4.14 0 0 1 4.125 0l49.546 28.526h.01c.165.104.305.232.454.351c.134.103.284.196.402.31c.145.149.248.32.371.484c.088.124.207.232.279.366c.118.206.185.423.268.64c.041.118.113.226.144.35c.095.351.144.714.145 1.078V138.65l41.286-23.773V60.692c0-.36.052-.727.145-1.072c.036-.124.103-.232.144-.35c.083-.217.155-.44.268-.64c.077-.134.19-.242.279-.366c.123-.165.226-.335.37-.48c.12-.118.269-.206.403-.309c.155-.124.289-.258.454-.356h.005l49.551-28.526a4.13 4.13 0 0 1 4.125 0l49.546 28.526c.175.103.309.232.464.35c.128.104.278.197.397.31c.144.15.247.32.37.485c.094.124.207.232.28.366c.118.2.185.423.267.64c.047.118.114.226.145.35m-8.115 55.258v-47.04l-17.339 9.981l-23.953 13.792v47.04l41.297-23.773zm-49.546 85.095V152.9l-23.562 13.457l-67.281 38.4v47.514zM8.259 39.796v160.177l90.833 52.294v-47.505L51.64 177.906l-.015-.01l-.02-.01c-.16-.093-.295-.227-.444-.34c-.13-.104-.279-.186-.392-.3l-.01-.015c-.134-.129-.227-.289-.34-.433c-.104-.14-.227-.258-.31-.402l-.005-.016c-.093-.154-.15-.34-.217-.515c-.067-.155-.154-.3-.196-.464v-.005c-.051-.196-.061-.403-.082-.604c-.02-.154-.062-.309-.062-.464V63.57L25.598 49.772l-17.339-9.97zM53.681 8.893L12.399 32.656l41.272 23.762L94.947 32.65L53.671 8.893zm21.468 148.298l23.948-13.786V39.796L81.76 49.778L57.805 63.569v103.608zM202.324 36.935l-41.276 23.762l41.276 23.763l41.271-23.768zm-4.13 54.676l-23.953-13.792l-17.338-9.981v47.04l23.948 13.787l17.344 9.986zm-94.977 106.006l60.543-34.564l30.264-17.272l-41.246-23.747l-47.489 27.34l-43.282 24.918z" />
                            </svg>
                            <!-- End Star -->
                        </div>
                    </div>
                    <!-- End Review -->
                    <!-- Review -->
                    <div class="py-5">
                        <p class="mt-3 text-sm text-gray-800 dark:text-neutral-200">
                            Avec <span class="font-bold">PHP 8.2</span>
                        </p>

                        <div class="mt-2">
                            <!-- Star -->
                            <svg class="h-auto w-16 text-indigo-800 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor" d="m10.15 5.55l-1.717 8.834h2l.858-4.417h1.5c.553 0 .915.44.81.982l-.668 3.435h2l.668-3.435c.316-1.627-.771-2.945-2.428-2.945h-1.5l.477-2.454zM2.173 8.004h3.75c1.795 0 2.972 1.428 2.63 3.19s-2.075 3.19-3.87 3.19h-1.75l-.477 2.455h-2zm1.141 4.417h1.75c.69 0 1.357-.55 1.489-1.227c.131-.678-.321-1.227-1.012-1.227h-1.75zm13.859-4.417h3.75c1.795 0 2.972 1.428 2.63 3.19s-2.076 3.19-3.87 3.19h-1.75l-.477 2.455h-2zm1.141 4.417h1.75c.69 0 1.357-.55 1.489-1.227c.131-.678-.321-1.227-1.012-1.227h-1.75z" />
                            </svg>
                            <!-- End Star -->
                        </div>
                    </div>
                    <!-- End Review -->
                </div>

            </div>
            <!-- End Col -->

            <div class="relative md:col-span-8">
                <img class="w-full rounded-2xl h-full" src="/assets/img/mockups/MacBook-Pro-1735635658277.jpeg" alt="Hero Image">
            </div>
            <!-- End Col -->
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Hero -->

    <div class="bg-white">
        <!-- Icon Blocks -->
        <div id="features" class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <div class="text-left mb-10">
                <h2 class="text-2xl md:text-4xl font-semibold">
                    Fonctionnalités de REMAIL
                </h2>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 items-center gap-4">
                <!-- Icon Block -->
                <a class="group flex flex-col justify-center border border-gray-200 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 rounded-2xl p-4 md:p-7 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                    <div class="flex justify-center items-center size-12 bg-blue-100 rounded-xl">
                        <svg class="shrink-0 size-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g fill="currentColor">
                                <path d="M14.733 1.25H9.267c-.812 0-1.469 0-2 .045c-.55.047-1.033.145-1.48.381a3.8 3.8 0 0 0-1.633 1.692c-.223.454-.316.944-.36 1.507c-.044.549-.044 1.227-.044 2.072v10.106c0 .845 0 1.523.043 2.072c.045.563.138 1.053.36 1.507a3.8 3.8 0 0 0 1.635 1.692c.446.236.93.334 1.478.38c.415.036.904.044 1.484.046V15.5a2.75 2.75 0 0 1 2.75-2.75h1a2.75 2.75 0 0 1 2.75 2.75v7.25a19 19 0 0 0 1.484-.045c.549-.047 1.032-.145 1.478-.381a3.8 3.8 0 0 0 1.634-1.692c.223-.454.316-.944.36-1.508c.044-.548.044-1.226.044-2.07V6.947c0-.845 0-1.523-.043-2.072c-.044-.563-.138-1.053-.36-1.507a3.8 3.8 0 0 0-1.635-1.692c-.446-.236-.93-.334-1.478-.38c-.532-.046-1.189-.046-2-.046M7.25 6A.75.75 0 0 1 8 5.25h2a.75.75 0 0 1 0 1.5H8A.75.75 0 0 1 7.25 6M8 9.25h2a.75.75 0 0 1 0 1.5H8a.75.75 0 0 1 0-1.5M13.25 6a.75.75 0 0 1 .75-.75h2a.75.75 0 0 1 0 1.5h-2a.75.75 0 0 1-.75-.75M14 9.25h2a.75.75 0 0 1 0 1.5h-2a.75.75 0 0 1 0-1.5" />
                                <path d="M13.75 22.75V15.5c0-.69-.56-1.25-1.25-1.25h-1c-.69 0-1.25.56-1.25 1.25v7.25z" />
                            </g>
                        </svg>
                    </div>
                    <div class="mt-5">
                        <h3 class="group-hover:text-gray-600 text-lg font-semibold text-gray-800 dark:text-white dark:group-hover:text-gray-400">Workspaces</h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">
                            Organisez vos projets et collaborez avec votre équipe.
                        </p>
                    </div>
                </a>
                <!-- End Icon Block -->

                <!-- Icon Block -->
                <a class="group flex flex-col justify-center border border-gray-200 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 rounded-2xl p-4 md:p-7 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                    <div class="flex justify-center items-center size-12 bg-blue-100 rounded-xl">
                        <svg class="shrink-0 size-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M21 2H6a2 2 0 0 0-2 2v3H2v2h2v2H2v2h2v2H2v2h2v3a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1m-8 2.999c1.648 0 3 1.351 3 3A3.01 3.01 0 0 1 13 11c-1.647 0-3-1.353-3-3.001c0-1.649 1.353-3 3-3M19 18H7v-.75c0-2.219 2.705-4.5 6-4.5s6 2.281 6 4.5z" />
                        </svg>
                    </div>
                    <div class="mt-5">
                        <h3 class="group-hover:text-gray-600 text-lg font-semibold text-gray-800 dark:text-white dark:group-hover:text-gray-400">Contacts</h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">
                            Importez et segmentez votre base de contacts.
                        </p>
                    </div>
                </a>
                <!-- End Icon Block -->

                <!-- Icon Block -->
                <a class="group flex flex-col justify-center border border-gray-200 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 rounded-2xl p-4 md:p-7 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                    <div class="flex justify-center items-center size-12 bg-blue-100 rounded-xl">
                        <svg class="shrink-0 size-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="m20.713 8.128l-.246.566a.506.506 0 0 1-.934 0l-.246-.566a4.36 4.36 0 0 0-2.22-2.25l-.759-.339a.53.53 0 0 1 0-.963l.717-.319a4.37 4.37 0 0 0 2.251-2.326l.253-.611a.506.506 0 0 1 .942 0l.253.61a4.37 4.37 0 0 0 2.25 2.327l.718.32a.53.53 0 0 1 0 .962l-.76.338a4.36 4.36 0 0 0-2.219 2.251M20 11c.701 0 1.374-.12 2-.341V20a1 1 0 0 1-1 1H2V4a1 1 0 0 1 1-1h11.341A6 6 0 0 0 14 5a5.97 5.97 0 0 0 1.36 3.803L12 11.683L5.65 6.24l-1.3 1.518L12 14.317l4.886-4.188A5.96 5.96 0 0 0 20 11" />
                        </svg>
                    </div>
                    <div class="mt-5">
                        <h3 class="group-hover:text-gray-600 text-lg font-semibold text-gray-800 dark:text-white dark:group-hover:text-gray-400">Templates</h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">
                            Importez des templates d'emails responsive et personnalisés.
                        </p>
                    </div>
                </a>
                <!-- End Icon Block -->

                <!-- Icon Block -->
                <a class="group flex flex-col justify-center border border-gray-200 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 rounded-2xl p-4 md:p-7 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                    <div class="flex justify-center items-center size-12 bg-blue-100 rounded-xl">
                        <svg class="shrink-0 size-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g fill="none" stroke-width="1.5">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M17 14h6m0 0l-3-3m3 3l-3 3" />
                                <path fill="currentColor" fill-rule="evenodd" d="M.25 7A2.75 2.75 0 0 1 3 4.25h13A2.75 2.75 0 0 1 18.75 7v2.129q-.181.12-.341.28a2.25 2.25 0 0 0-.53 2.341H17a2.25 2.25 0 0 0 0 4.5h.878a2.25 2.25 0 0 0 .435 2.239A2.75 2.75 0 0 1 16 19.75H3A2.75 2.75 0 0 1 .25 17zM17 13.25h1.75v1.5H17a.75.75 0 0 1 0-1.5M5.416 8.376a.75.75 0 0 0-.832 1.248l4.5 3a.75.75 0 0 0 .832 0l4.5-3a.75.75 0 0 0-.832-1.248L9.5 11.099z" clip-rule="evenodd" />
                            </g>
                        </svg>
                    </div>
                    <div class="mt-5">
                        <h3 class="group-hover:text-gray-600 text-lg font-semibold text-gray-800 dark:text-white dark:group-hover:text-gray-400">Envoi d'emails </h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">
                            Envoyez des campagnes ciblées et automatisées.
                        </p>
                    </div>
                </a>
                <!-- End Icon Block -->

                <!-- Icon Block -->
                <a class="group flex flex-col justify-center border border-gray-200 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 rounded-2xl p-4 md:p-7 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                    <div class="flex justify-center items-center size-12 bg-blue-100 rounded-xl">
                        <svg class="shrink-0 size-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M20 13.75a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75v6.75H14V4.25c0-.728-.002-1.2-.048-1.546c-.044-.325-.115-.427-.172-.484s-.159-.128-.484-.172C12.949 2.002 12.478 2 11.75 2s-1.2.002-1.546.048c-.325.044-.427.115-.484.172s-.128.159-.172.484c-.046.347-.048.818-.048 1.546V20.5H8V8.75A.75.75 0 0 0 7.25 8h-3a.75.75 0 0 0-.75.75V20.5H1.75a.75.75 0 0 0 0 1.5h20a.75.75 0 0 0 0-1.5H20z" />
                        </svg>
                    </div>
                    <div class="mt-5">
                        <h3 class="group-hover:text-gray-600 text-lg font-semibold text-gray-800 dark:text-white dark:group-hover:text-gray-400">Statistiques</h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">
                            Suivez les performances de vos campagnes en temps réel.
                        </p>
                    </div>
                </a>
                <!-- End Icon Block -->

                <!-- Icon Block -->
                <a class="group flex flex-col justify-center border border-gray-200 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 rounded-2xl p-4 md:p-7 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                    <div class="flex justify-center items-center size-12 bg-blue-100 rounded-xl">
                        <svg class="shrink-0 size-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g fill="currentColor">
                                <path d="M4.08 5.227A3 3 0 0 1 6.979 3H17.02a3 3 0 0 1 2.9 2.227l2.113 7.926A5.23 5.23 0 0 0 18.75 12H5.25a5.23 5.23 0 0 0-3.284 1.153z" />
                                <path fill-rule="evenodd" d="M5.25 13.5a3.75 3.75 0 1 0 0 7.5h13.5a3.75 3.75 0 1 0 0-7.5zm10.5 4.5a.75.75 0 1 0 0-1.5a.75.75 0 0 0 0 1.5m3.75-.75a.75.75 0 1 1-1.5 0a.75.75 0 0 1 1.5 0" clip-rule="evenodd" />
                            </g>
                        </svg>
                    </div>
                    <div class="mt-5">
                        <h3 class="group-hover:text-gray-600 text-lg font-semibold text-gray-800 dark:text-white dark:group-hover:text-gray-400">SMTP serveur</h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">
                            Ajouter et gérér plusieurs serveurs SMTP pour vos envois
                        </p>
                    </div>
                </a>
                <!-- End Icon Block -->

                <!-- Icon Block -->
                <a class="group flex flex-col justify-center border border-gray-200 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 rounded-2xl p-4 md:p-7 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                    <div class="flex justify-center items-center size-12 bg-blue-100 rounded-xl">
                        <svg class="shrink-0 size-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd" d="M4.172 3.172C3 4.343 3 6.229 3 10v4c0 3.771 0 5.657 1.172 6.828S7.229 22 11 22h2c3.771 0 5.657 0 6.828-1.172S21 17.771 21 14v-4c0-3.771 0-5.657-1.172-6.828S16.771 2 13 2h-2C7.229 2 5.343 2 4.172 3.172M8 9.25a.75.75 0 0 0 0 1.5h8a.75.75 0 0 0 0-1.5zm0 4a.75.75 0 0 0 0 1.5h5a.75.75 0 0 0 0-1.5z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="mt-5">
                        <h3 class="group-hover:text-gray-600 text-lg font-semibold text-gray-800 dark:text-white dark:group-hover:text-gray-400">Documentation</h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">
                            Chaque fonctionnalité est bien documenté
                        </p>
                    </div>
                </a>
                <!-- End Icon Block -->

                <!-- Icon Block -->
                <a class="group flex flex-col justify-center border border-gray-200 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 rounded-2xl p-4 md:p-7 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                    <div class="flex justify-center items-center size-12 bg-blue-100 rounded-xl">
                        <svg class="shrink-0 size-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" width="256" height="256" viewBox="0 0 256 256">
                            <path fill="currentColor" d="m213.66 82.34l-56-56A8 8 0 0 0 152 24H56a16 16 0 0 0-16 16v76a4 4 0 0 0 4 4h168a4 4 0 0 0 4-4V88a8 8 0 0 0-2.34-5.66M152 88V44l44 44ZM48 180c0 11 7.18 20 16 20a14.18 14.18 0 0 0 10.06-4.5a8.21 8.21 0 0 1 10.9-.91a8 8 0 0 1 .82 11.81A30.06 30.06 0 0 1 64 216c-17.64 0-32-16.15-32-36s14.36-36 32-36a30 30 0 0 1 21.39 9.19a8.26 8.26 0 0 1 .73 11.09a8 8 0 0 1-11.9.38A14.17 14.17 0 0 0 64 160c-8.82 0-16 9-16 20m103.81 16.31a20.82 20.82 0 0 1-9.19 15.23C137.43 215 131 216 125.13 216a61 61 0 0 1-15.13-2a8 8 0 1 1 4.3-15.41c4.38 1.2 14.95 2.7 19.55-.36c.88-.59 1.83-1.52 2.14-3.93c.35-2.67-.71-4.1-12.78-7.59c-9.35-2.7-25-7.23-23-23.11a20.56 20.56 0 0 1 9-14.95c11.84-8 30.71-3.31 32.83-2.76a8 8 0 0 1-4.07 15.48c-4.49-1.17-15.23-2.56-19.83.56a4.54 4.54 0 0 0-2 3.67c-.12.9-.14 1.09 1.11 1.9c2.31 1.49 6.45 2.68 10.45 3.84c9.79 2.83 26.35 7.66 24.11 24.97M215.42 155l-19.89 55.68a8 8 0 0 1-15.06 0L160.58 155a8.21 8.21 0 0 1 4.5-10.45a8 8 0 0 1 10.45 4.76l12.47 34.9l12.47-34.9a8 8 0 0 1 10.45-4.76a8.23 8.23 0 0 1 4.5 10.45" />
                        </svg>
                    </div>
                    <div class="mt-5">
                        <h3 class="group-hover:text-gray-600 text-lg font-semibold text-gray-800 dark:text-white dark:group-hover:text-gray-400">Gros fichiers</h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">
                            Gestion de gros volume de fichiers de contact
                        </p>
                    </div>
                </a>
                <!-- End Icon Block -->
            </div>
        </div>

        <div>
            <!-- Slider -->
            <div class="max-w-3xl mx-auto px-4 lg:px-6 lg:px-8 py-10">
                <div data-hs-carousel='{"loadingClasses": "opacity-0"}' class="relative">
                    <div class="hs-carousel relative overflow-hidden w-full h-[30rem] md:h-[calc(100vh-106px)]  bg-gray-100 rounded-2xl dark:bg-neutral-800">
                        <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                            <!-- Item -->
                            <div class="hs-carousel-slide">
                                <div class="h-[30rem] md:h-[calc(100vh-106px)] flex flex-col ">
                                    <img src="/assets/img/mockups/MacBook-Pro-1735635658277.jpeg" class="h-[30rem] md:h-[calc(100vh-106px)]" alt="">
                                </div>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="hs-carousel-slide">
                            <div class="h-[30rem] md:h-[calc(100vh-106px)] flex flex-col ">
                                    <img src="/assets/img/mockups/MacBook-Pro-1735635274820.jpeg" class="h-[30rem] md:h-[calc(100vh-106px)]" alt="">
                                </div>
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="hs-carousel-slide">
                            <div class="h-[30rem] md:h-[calc(100vh-106px)] flex flex-col ">
                                    <img src="/assets/img/mockups/MacBook-Pro-1735631511452.jpeg" class="h-[30rem] md:h-[calc(100vh-106px)]" alt="">
                                </div>
                            </div>
                            <!-- End Item -->
                              <!-- Item -->
                            <div class="hs-carousel-slide">
                            <div class="h-[30rem] md:h-[calc(100vh-106px)] flex flex-col ">
                                    <img src="/assets/img/mockups/MacBook-Pro-1735631613623.jpeg" class="h-[30rem] md:h-[calc(100vh-106px)]" alt="">
                                </div>
                            </div>
                               <!-- Item -->
                               <div class="hs-carousel-slide">
                            <div class="h-[30rem] md:h-[calc(100vh-106px)] flex flex-col ">
                                    <img src="/assets/img/mockups/MacBook-Pro-1735635438607.jpeg" class="h-[30rem] md:h-[calc(100vh-106px)]" alt="">
                                </div>
                            </div>
                            <!-- End Item -->
                        </div>
                    </div>

                    <!-- Arrows -->
                    <button type="button" class="hs-carousel-prev hs-carousel-disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-12 h-full text-black hover:bg-white/20 rounded-s-2xl focus:outline-none focus:bg-white/20">
                        <span class="text-2xl" aria-hidden="true">
                            <svg class="shrink-0 size-3.5 md:size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>
                            </svg>
                        </span>
                        <span class="sr-only">Previous</span>
                    </button>

                    <button type="button" class="hs-carousel-next hs-carousel-disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-12 h-full text-black hover:bg-white/20 rounded-e-2xl focus:outline-none focus:bg-white/20">
                        <span class="sr-only">Next</span>
                        <span class="text-2xl" aria-hidden="true">
                            <svg class="shrink-0 size-3.5 md:size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                            </svg>
                        </span>
                    </button>
                    <!-- End Arrows -->
                </div>
            </div>
            <!-- End Slider -->
        </div>

        <!-- Features -->
        <div class="overflow-hidden" id="pricing">
            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <!-- Title -->
                <div class="mx-auto max-w-2xl mb-8 lg:mb-14 text-center">
                    <h2 class="text-3xl lg:text-4xl text-gray-800 font-bold dark:text-neutral-200">
                        Choisissez le plan adapté à vos besoins
                    </h2>
                </div>
                <!-- End Title -->

                <div class="relative xl:w-10/12 xl:mx-auto">
                    <!-- Grid -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-8 items-center">
                        <div class="space-y-5">
                            <h2 class="text-xl md:text-2xl font-semibold">Plan Unique</h2>
                            <p class="md:text-lg text-gray-600">
                                Téléchargez et installez la solution sur votre propre serveur, avec une installation facile et rapide. Aucune obligation d'abonnement mensuel, payez une seule fois !
                            </p>
                        </div>

                        <div>
                            <!-- Card -->
                            <div class="shadow-xl shadow-gray-200 p-5 relative z-10 bg-white border rounded-xl md:p-10 dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-gray-900/20">
                                <h3 class="text-xl font-bold text-gray-800 dark:text-neutral-200">Licence</h3>
                                <div class="text-sm text-gray-500 dark:text-neutral-500">Accès à vie.</div>
                                <span class="absolute top-0 end-0 rounded-se-xl rounded-es-xl text-xs font-medium bg-gray-800 text-white py-1.5 px-3 dark:bg-white dark:text-neutral-800">Most popular</span>

                                <div class="mt-5">
                                    <span class="text-6xl font-bold text-gray-800 dark:text-neutral-200">$45</span>
                                    <span class="text-lg font-bold text-gray-800 dark:text-neutral-200">.00</span>
                                    <span class="ms-3 text-gray-500 dark:text-neutral-500">USD </span>
                                </div>

                                <div class="mt-5 gap-y-2 py-4 first:pt-0 last:pb-0 sm:gap-x-6 sm:gap-y-0">
                                    <!-- List -->
                                    <ul class="space-y-2 text-sm sm:text-base">
                                        <li class="flex gap-x-3">
                                            <span class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-800/30 dark:text-blue-500">
                                                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <polyline points="20 6 9 17 4 12" />
                                                </svg>
                                            </span>
                                            <span class="text-gray-800 dark:text-neutral-200">
                                                Installation facile sur votre serveur
                                            </span>
                                        </li>

                                        <li class="flex gap-x-3">
                                            <span class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-800/30 dark:text-blue-500">
                                                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <polyline points="20 6 9 17 4 12" />
                                                </svg>
                                            </span>
                                            <span class="text-gray-800 dark:text-neutral-200">
                                                Aucune redevance mensuelle ou abonnement
                                            </span>
                                        </li>

                                        <li class="flex gap-x-3">
                                            <span class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600 dark:bg-blue-800/30 dark:text-blue-500">
                                                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <polyline points="20 6 9 17 4 12" />
                                                </svg>
                                            </span>
                                            <span class="text-gray-800 dark:text-neutral-200">
                                                Accès complet à toutes les fonctionnalités
                                            </span>
                                        </li>
                                    </ul>
                                    <!-- End List -->

                                </div>

                                <div class="mt-5 grid grid-cols-2 gap-x-4 py-4 first:pt-0 last:pb-0">

                                    <div class="flex justify-end">
                                        <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-2xl border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                            Passer au Téléchargement
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- End Card -->
                        </div>
                    </div>
                    <!-- End Grid -->

                    <!-- SVG Element -->
                    <div class="hidden md:block absolute top-0 end-0 translate-y-16 translate-x-16">
                        <svg class="w-16 h-auto text-blue-600" width="121" height="135" viewBox="0 0 121 135" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 16.4754C11.7688 27.4499 21.2452 57.3224 5 89.0164" stroke="currentColor" stroke-width="10" stroke-linecap="round" />
                            <path d="M33.6761 112.104C44.6984 98.1239 74.2618 57.6776 83.4821 5" stroke="currentColor" stroke-width="10" stroke-linecap="round" />
                            <path d="M50.5525 130C68.2064 127.495 110.731 117.541 116 78.0874" stroke="currentColor" stroke-width="10" stroke-linecap="round" />
                        </svg>
                    </div>
                    <!-- End SVG Element -->

                    <!-- SVG Element -->
                    <div class="hidden md:block absolute bottom-0 start-0 translate-y-16 -translate-x-16">
                        <svg class="w-56 h-auto text-blue-200" width="347" height="188" viewBox="0 0 347 188" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 82.4591C54.7956 92.8751 30.9771 162.782 68.2065 181.385C112.642 203.59 127.943 78.57 122.161 25.5053C120.504 2.2376 93.4028 -8.11128 89.7468 25.5053C85.8633 61.2125 130.186 199.678 180.982 146.248L214.898 107.02C224.322 95.4118 242.9 79.2851 258.6 107.02C274.299 134.754 299.315 125.589 309.861 117.539L343 93.4426" stroke="currentColor" stroke-width="7" stroke-linecap="round" />
                        </svg>
                    </div>
                    <!-- End SVG Element -->
                </div>
            </div>
        </div>
        <!-- End Features -->

        <!-- Testimonials -->
        <div class="relative max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- Blockquote -->
            <blockquote class="text-center lg:mx-auto lg:w-3/5">
                <h4>Témoignage</h4>

                <div class="mt-6 lg:mt-10">
                    <p class="relative text-xl sm:text-2xl md:text-3xl md:leading-normal font-medium text-gray-800">
                        <svg class="absolute top-0 start-0 transform -translate-x-8 -translate-y-8 size-16 text-gray-200 sm:h-24 sm:w-24 dark:text-neutral-700" width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M7.18079 9.25611C7.18079 10.0101 6.93759 10.6211 6.45119 11.0891C5.96479 11.5311 5.35039 11.7521 4.60799 11.7521C3.71199 11.7521 2.96958 11.4531 2.38078 10.8551C1.81758 10.2571 1.53598 9.39911 1.53598 8.28111C1.53598 7.08511 1.86878 5.91511 2.53438 4.77111C3.22559 3.60111 4.18559 2.67811 5.41439 2.00211L6.29759 3.36711C5.63199 3.83511 5.09439 4.35511 4.68479 4.92711C4.30079 5.49911 4.04479 6.16211 3.91679 6.91611C4.14719 6.81211 4.41599 6.76011 4.72319 6.76011C5.43999 6.76011 6.02879 6.99411 6.48959 7.46211C6.95039 7.93011 7.18079 8.52811 7.18079 9.25611ZM14.2464 9.25611C14.2464 10.0101 14.0032 10.6211 13.5168 11.0891C13.0304 11.5311 12.416 11.7521 11.6736 11.7521C10.7776 11.7521 10.0352 11.4531 9.44639 10.8551C8.88319 10.2571 8.60159 9.39911 8.60159 8.28111C8.60159 7.08511 8.93439 5.91511 9.59999 4.77111C10.2912 3.60111 11.2512 2.67811 12.48 2.00211L13.3632 3.36711C12.6976 3.83511 12.16 4.35511 11.7504 4.92711C11.3664 5.49911 11.1104 6.16211 10.9824 6.91611C11.2128 6.81211 11.4816 6.76011 11.7888 6.76011C12.5056 6.76011 13.0944 6.99411 13.5552 7.46211C14.016 7.93011 14.2464 8.52811 14.2464 9.25611Z" fill="currentColor" />
                        </svg>
                        <span class="relative z-10 italic text-gray-800 dark:text-neutral-200">
                            <strong>REMAIL</strong> a simplifié nos campagnes email avec une interface intuitive, des envois automatisés et des statistiques en temps réel. L’option de gérer plusieurs serveurs SMTP est un vrai plus. Une solution efficace et sans abonnement mensuel !
                        </span>
                    </p>
                </div>

                <footer class="mt-6">
                    <div class="font-semibold text-gray-800 dark:text-neutral-200">Marie Lefevre</div>
                    <div class="text-sm text-gray-500 dark:text-neutral-500">Responsable Marketing Digital | DSMART</div>
                </footer>
            </blockquote>
            <!-- End Blockquote -->
        </div>
        <!-- End Testimonials -->

        <div class="max-w-5xl px-4 xl:px-0 py-10 mx-auto">
            <div class="border border-neutral-800 rounded-xl">
                <div class="p-4 lg:p-8 bg-gradient-to-bl from-neutral-800 via-neutral-900 to-neutral-950 rounded-xl">
                    <div class="grid grid-cols-1 sm:grid-cols-3 items-center gap-y-20 gap-x-12">
                        <!-- Stats -->
                        <div class="relative text-center first:before:hidden before:absolute before:-top-full sm:before:top-1/2 before:start-1/2 sm:before:-start-6 before:w-px before:h-20 before:bg-neutral-800 before:rotate-[60deg] sm:before:rotate-12 before:transform sm:before:-translate-y-1/2 before:-translate-x-1/2 sm:before:-translate-x-0 before:mt-3.5 sm:before:mt-0">
                            <svg class="shrink-0 size-6 sm:size-8 text-blue-600 mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <rect width="16" height="13" x="6" y="4" rx="2" />
                                    <path d="m22 7l-7.1 3.78c-.57.3-1.23.3-1.8 0L6 7M2 8v11c0 1.1.9 2 2 2h14" />
                                </g>
                            </svg>
                            <div class="mt-3 sm:mt-5">
                                <h3 class="text-lg sm:text-3xl font-semibold text-white">2,000+</h3>
                                <p class="mt-1 text-sm sm:text-base text-neutral-400">Campagnes mensuels</p>
                            </div>
                        </div>
                        <!-- End Stats -->

                        <!-- Stats -->
                        <div class="relative text-center first:before:hidden before:absolute before:-top-full sm:before:top-1/2 before:start-1/2 sm:before:-start-6 before:w-px before:h-20 before:bg-neutral-800 before:rotate-[60deg] sm:before:rotate-12 before:transform sm:before:-translate-y-1/2 before:-translate-x-1/2 sm:before:-translate-x-0 before:mt-3.5 sm:before:mt-0">
                            <div class="flex justify-center items-center -space-x-5">
                                <svg class="shrink-0 size-6 sm:size-8 text-blue-600 mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <g fill="none">
                                        <path d="m12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036q-.016-.004-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z" />
                                        <path fill="currentColor" d="m8.076 7.26l.095.083l8.486 8.485a1 1 0 0 1-.246 1.595l-.116.05L5.91 21.3c-1.952.72-3.853-1.115-3.26-3.064l.05-.146L6.526 7.705a1 1 0 0 1 1.447-.516zm9.031 4.344c.911.048 2.16.24 3.246.892a1 1 0 0 1-.925 1.77l-.104-.055c-.682-.41-1.554-.57-2.322-.61a8 8 0 0 0-.95.004l-.316.031a1 1 0 0 1-.281-1.98a8.6 8.6 0 0 1 1.652-.053m2.025-2.786a1 1 0 0 1 .116 1.993l-.116.007h-.708a1 1 0 0 1-.116-1.993l.116-.007zM15.95 8.05a1 1 0 0 1 .083 1.32l-.083.094l-1.061 1.061a1 1 0 0 1-1.497-1.32l.083-.094l1.06-1.06a1 1 0 0 1 1.415 0m-2.587-5.266c.448 1.346.208 2.82-.072 3.85a10 10 0 0 1-.69 1.863a1 1 0 0 1-1.79-.893a8 8 0 0 0 .55-1.496c.227-.832.341-1.735.166-2.475l-.061-.216a1 1 0 1 1 1.897-.633m5.415 2.438a1 1 0 0 1 0 1.414l-.707.707a1 1 0 1 1-1.414-1.414l.707-.707a1 1 0 0 1 1.414 0" />
                                    </g>
                                </svg>
                            </div>
                            <div class="mt-3 sm:mt-5">
                                <h3 class="text-lg sm:text-3xl font-semibold text-white">91%</h3>
                                <p class="mt-1 text-sm sm:text-base text-neutral-400">Taux de satisfaction</p>
                            </div>
                        </div>
                        <!-- End Stats -->

                        <!-- Stats -->
                        <div class="relative text-center first:before:hidden before:absolute before:-top-full sm:before:top-1/2 before:start-1/2 sm:before:-start-6 before:w-px before:h-20 before:bg-neutral-800 before:rotate-[60deg] sm:before:rotate-12 before:transform sm:before:-translate-y-1/2 before:-translate-x-1/2 sm:before:-translate-x-0 before:mt-3.5 sm:before:mt-0">
                            <svg class="shrink-0 size-6 sm:size-8 text-blue-600 mx-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <g fill="none" fill-rule="evenodd">
                                    <path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                    <path fill="currentColor" d="M16.612 3.956c-2.747-1.221-6.05.278-6.38 3.473A45 45 0 0 0 10 12c0 1.73.097 3.269.231 4.57c.33 3.196 3.634 4.695 6.381 3.474l.225-.1a8.694 8.694 0 0 0 0-15.889l-.225-.1Zm-4.391 3.679c.17-1.642 1.883-2.605 3.579-1.852l.225.1a6.694 6.694 0 0 1 0 12.234l-.225.1c-1.696.753-3.41-.21-3.58-1.852A43 43 0 0 1 12 12c0-1.656.093-3.126.22-4.365ZM3 6a1 1 0 1 0 0 2h5a1 1 0 0 0 0-2zm0 5a1 1 0 1 0 0 2h5a1 1 0 1 0 0-2zm-1 6a1 1 0 0 1 1-1h5a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1" />
                                </g>
                            </svg>
                            <div class="mt-3 sm:mt-5">
                                <h3 class="text-lg sm:text-3xl font-semibold text-white">$540K</h3>
                                <p class="mt-1 text-sm sm:text-base text-neutral-400">Volume annuel</p>
                            </div>
                        </div>
                        <!-- End Stats -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Hire Us -->
        <div id="contact" class="max-w-6xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- Grid -->
            <div class="grid md:grid-cols-2 items-center gap-12">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800 sm:text-4xl lg:text-5xl lg:leading-tight dark:text-white">
                        Contactez-nous
                    </h1>
                    <p class="mt-1 md:text-lg text-gray-800 dark:text-neutral-200">
                        Vous avez des questions ou souhaitez en savoir plus sur REMAIL ? Contactez notre équipe dès maintenant !
                    </p>

                    <div class="mt-8">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
                            À quoi dois-je m'attendre ?
                        </h2>

                        <ul class="mt-2 space-y-2">
                            <li class="flex gap-x-3">
                                <svg class="shrink-0 mt-0.5 size-5 text-gray-600 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <span class="text-gray-600 dark:text-neutral-400">
                                    Accompagnement de bout en bout
                                </span>
                            </li>

                            <li class="flex gap-x-3">
                                <svg class="shrink-0 mt-0.5 size-5 text-gray-600 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <span class="text-gray-600 dark:text-neutral-400">
                                    Documentation très détaillé
                                </span>
                            </li>

                            <li class="flex gap-x-3">
                                <svg class="shrink-0 mt-0.5 size-5 text-gray-600 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <span class="text-gray-600 dark:text-neutral-400">
                                    Simple et abordable
                                </span>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- End Col -->

                <div class="relative">
                    <!-- Card -->
                    <div class="flex flex-col border rounded-xl p-4 sm:p-6 lg:p-10 dark:border-neutral-700">
                        <form>
                            <div class="mt-6 grid gap-4 lg:gap-6">
                                <!-- Grid -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                                    <div>
                                        <label for="hs-firstname-hire-us-1" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Nom</label>
                                        <input type="text" name="hs-firstname-hire-us-1" id="hs-firstname-hire-us-1" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                    </div>

                                    <div>
                                        <label for="hs-lastname-hire-us-1" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Prénom</label>
                                        <input type="text" name="hs-lastname-hire-us-1" id="hs-lastname-hire-us-1" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                    </div>
                                </div>
                                <!-- End Grid -->

                                <div>
                                    <label for="hs-work-email-hire-us-1" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Adresse Email</label>
                                    <input type="email" name="hs-work-email-hire-us-1" id="hs-work-email-hire-us-1" autocomplete="email" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                </div>

                                <!-- Grid -->
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                                    <div>
                                        <label for="hs-company-hire-us-1" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Entreprise</label>
                                        <input type="text" name="hs-company-hire-us-1" id="hs-company-hire-us-1" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                    </div>

                                    <div>
                                        <label for="hs-company-website-hire-us-1" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Site web de l'entreprise</label>
                                        <input type="text" name="hs-company-website-hire-us-1" id="hs-company-website-hire-us-1" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                    </div>
                                </div>
                                <!-- End Grid -->

                                <div>
                                    <label for="hs-about-hire-us-1" class="block mb-2 text-sm text-gray-700 font-medium dark:text-white">Détails</label>
                                    <textarea id="hs-about-hire-us-1" name="hs-about-hire-us-1" rows="4" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"></textarea>
                                </div>
                            </div>
                        </form>
                        <!-- End Grid -->

                        <!-- Checkbox -->
                        <div class="mt-3 flex">
                            <div class="flex">
                                <input id="remember-me" name="remember-me" type="checkbox" class="shrink-0 mt-1.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                            </div>
                            <div class="ms-3">
                                <label for="remember-me" class="text-sm text-gray-600 dark:text-neutral-400">
                                    En soumettant ce formulaire, j'ai lu et reconnu la
                                    <a class="text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="#">politique de confidentialité</a>
                            </div>
                        </div>
                        <!-- End Checkbox -->

                        <div class="mt-6 grid">
                            <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Envoyer la demande</button>
                        </div>

                        <div class="mt-3 text-center">
                            <p class="text-sm text-gray-500 dark:text-neutral-500">
                                Nous vous répondrons dans un délai de 1 à 2 jours ouvrables.
                            </p>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Grid -->
        </div>
        <!-- End Hire Us -->

    </div>

    <div class="bg-gray-100" style="background-image: url(/assets/svg/component/hero-gradient.svg);">
        <!-- Subscribe -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-16 mx-auto">
            <div class="grid md:grid-cols-2 gap-8">
                <div class="max-w-md">
                    <h2 class="text-2xl font-bold md:text-3xl md:leading-tight dark:text-white">Newsletter</h2>
                    <p class="mt-3 text-gray-600 dark:text-neutral-400">
                        Abonnez-vous et commencez à tirer le meilleur parti de chaque communication. </p>
                </div>

                <form>
                    <div class="w-full sm:max-w-lg md:ms-auto">
                        <div class="flex flex-col items-center gap-2 sm:flex-row sm:gap-3">
                            <div class="w-full">
                                <input type="text" id="hero-input" name="hero-input" class="py-3 px-4 block w-full border-gray-200 rounded-2xl text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Entrer votre Email">
                            </div>
                            <a class="w-full sm:w-auto whitespace-nowrap py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-2xl border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
                                Souscrire
                            </a>
                        </div>
                        <p class="mt-3 text-sm text-gray-500 dark:text-neutral-500">
                            Pas de spam, désabonnement à tout moment
                        </p>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Subscribe -->
        <div class="relative overflow-hidden bg-transparent">
            <svg class="absolute text-gray-400 -bottom-20 start-1/2 w-[1900px] transform -translate-x-1/2" width="2745" height="488" viewbox="0 0 2745 488" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.5 330.864C232.505 403.801 853.749 527.683 1482.69 439.719C2111.63 351.756 2585.54 434.588 2743.87 487" stroke="currentColor"></path>
                <path d="M0.5 308.873C232.505 381.81 853.749 505.692 1482.69 417.728C2111.63 329.765 2585.54 412.597 2743.87 465.009" stroke="currentColor"></path>
                <path d="M0.5 286.882C232.505 359.819 853.749 483.701 1482.69 395.738C2111.63 307.774 2585.54 390.606 2743.87 443.018" stroke="currentColor"></path>
                <path d="M0.5 264.891C232.505 337.828 853.749 461.71 1482.69 373.747C2111.63 285.783 2585.54 368.615 2743.87 421.027" stroke="currentColor"></path>
                <path d="M0.5 242.9C232.505 315.837 853.749 439.719 1482.69 351.756C2111.63 263.792 2585.54 346.624 2743.87 399.036" stroke="currentColor"></path>
                <path d="M0.5 220.909C232.505 293.846 853.749 417.728 1482.69 329.765C2111.63 241.801 2585.54 324.633 2743.87 377.045" stroke="currentColor"></path>
                <path d="M0.5 198.918C232.505 271.855 853.749 395.737 1482.69 307.774C2111.63 219.81 2585.54 302.642 2743.87 355.054" stroke="currentColor"></path>
                <path d="M0.5 176.927C232.505 249.864 853.749 373.746 1482.69 285.783C2111.63 197.819 2585.54 280.651 2743.87 333.063" stroke="currentColor"></path>
                <path d="M0.5 154.937C232.505 227.873 853.749 351.756 1482.69 263.792C2111.63 175.828 2585.54 258.661 2743.87 311.072" stroke="currentColor"></path>
                <path d="M0.5 132.946C232.505 205.882 853.749 329.765 1482.69 241.801C2111.63 153.837 2585.54 236.67 2743.87 289.082" stroke="currentColor"></path>
                <path d="M0.5 110.955C232.505 183.891 853.749 307.774 1482.69 219.81C2111.63 131.846 2585.54 214.679 2743.87 267.091" stroke="currentColor"></path>
                <path d="M0.5 88.9639C232.505 161.901 853.749 285.783 1482.69 197.819C2111.63 109.855 2585.54 192.688 2743.87 245.1" stroke="currentColor"></path>
                <path d="M0.5 66.9729C232.505 139.91 853.749 263.792 1482.69 175.828C2111.63 87.8643 2585.54 170.697 2743.87 223.109" stroke="currentColor"></path>
                <path d="M0.5 44.9819C232.505 117.919 853.749 241.801 1482.69 153.837C2111.63 65.8733 2585.54 148.706 2743.87 201.118" stroke="currentColor"></path>
                <path d="M0.5 22.991C232.505 95.9276 853.749 219.81 1482.69 131.846C2111.63 43.8824 2585.54 126.715 2743.87 179.127" stroke="currentColor"></path>
                <path d="M0.5 1C232.505 73.9367 853.749 197.819 1482.69 109.855C2111.63 21.8914 2585.54 104.724 2743.87 157.136" stroke="currentColor"></path>
            </svg>

            <div class="relative z-10">
                <div class="w-full max-w-5xl px-4 xl:px-0 py-10 lg:pt-16 mx-auto">
                    <div class="inline-flex items-center">
                        <!-- Logo -->
                        <img src="/assets/img/logo/blue.png" class="h-8" alt="">

                        <div class="border-s border-gray-400 ps-5 ms-5">
                            <p class="text-sm text-gray-600">
                                © 2024 Tous droits reservés
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS PLUGINS -->
    <script src="/assets/vendor/preline/dist/index-3.js?v=2.5.0"></script>
</body>

</html>