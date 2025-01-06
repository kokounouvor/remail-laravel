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

<body class="bg-white">
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
                    <a class="p-3 ps-px sm:px-3 md:py-4 text-sm text-gray-800 hover:text-neutral-300 focus:outline-none focus:text-neutral-300" href="/#features">Fonctionnalités</a>
                    <a class="p-3 ps-px sm:px-3 md:py-4 text-sm text-gray-800 hover:text-neutral-300 focus:outline-none focus:text-neutral-300" href="/#pricing">Tarifs</a>
                    <a class="p-3 ps-px sm:px-3 md:py-4 text-sm text-gray-800 hover:text-neutral-300 focus:outline-none focus:text-neutral-300" href="/#contact">Contact</a>

                    <div class="md:ms-5">
                        <a class="p-3 ps-px sm:px-3 md:py-4 text-sm font-bold text-gray-800 hover:text-neutral-300 focus:outline-none focus:text-neutral-500" href="{{Route('docs')}}">Docs</a>
                        <a class="group inline-flex items-center gap-x-2 py-2 px-3 text-blue-600 hover:text-blue-700 border border-2 border-blue-600 font-medium text-sm rounded-full focus:outline-none" href="{{Route('auth.login')}}">
                            Voir la démo
                        </a>
                        <a class="group inline-flex items-center gap-x-2 py-2 px-3 bg-blue-600 hover:bg-blue-700 font-medium text-sm text-white rounded-full focus:outline-none" href="#">
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
        <div class="lg:max-w-3xl mx-auto xl:max-w-none xl:ms-0 xl:me-64 xl:pe-16 pb-14">
            <!-- Page Heading -->
            <header class="border-b pb-7 mb-7 sm:pb-10 mt-14 sm:mb-10 dark:border-neutral-700 scroll-mt-24" id="first">
                <p class="mb-2 text-sm font-semibold text-blue-600 dark:text-blue-500">Installation</p>
                <h1 class="block text-2xl font-bold text-gray-800 sm:text-3xl dark:text-white">REMAIL - Solution de Marketing par Email (Emailing) </h1>
                <p class="mt-2 sm:text-lg text-gray-800 dark:text-neutral-400">
                    REMAIL est une solution puissante et intuitive pour gérer vos campagnes de marketing par email. Optimisez vos envois avec différents SMTP et suivez vos performances en temps réel.
                </p>
            </header>
            <!-- End Page Heading -->

            <!-- Content -->
            <div>
                <div id="scrollspy" class="space-y-10 md:space-y-12">
                    <!-- Component -->
                    <div>
                        <h2 id="requirements-setup" class="scroll-mt-24">
                            <a class="group relative text-lg font-bold text-gray-800 dark:text-white focus:outline-none" href="#quick-setup">
                                <span class="absolute top-1 -start-4 inline-block shrink-0 opacity-0 transition-all group-hover:opacity-100 group-hover:-start-5 group-focus:opacity-100 group-focus:-start-5 before:absolute before:top-0 before:start-0 before:w-8 before:h-full">
                                    <svg class="shrink-0 size-4 text-blue-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="4" x2="20" y1="9" y2="9"></line>
                                        <line x1="4" x2="20" y1="15" y2="15"></line>
                                        <line x1="10" x2="8" y1="3" y2="21"></line>
                                        <line x1="16" x2="14" y1="3" y2="21"></line>
                                    </svg>
                                </span>
                                Exigences techniques pour l'installation
                            </a>
                        </h2>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">
                            Avant d'installer notre solution de marketing par email sur votre serveur, il est important de vérifier que votre environnement respecte certaines exigences techniques. Ce logiciel a été conçu pour être installé sur un serveur SMTP, et fonctionne de manière optimale sur des serveurs dotés de configurations récentes et performantes.
                        </p>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">
                            Notre solution est construite avec la dernière version de <a class="text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="https://www.php.net" target="_blank">PHP</a> et du framework <a class="text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="https://laravel.com" target="_blank">Laravel</a>, ce qui garantit une grande efficacité et une flexibilité d'intégration. Afin d'assurer une installation et une utilisation sans encombre, nous vous recommandons de vous assurer que votre serveur remplit les critères suivants :
                        </p>
                        <ul class="space-y-3 text-sm">
                            <li class="flex gap-x-3 mt-5">
                                <svg class="shrink-0 size-4 mt-0.5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                                <span class="text-gray-800 dark:text-neutral-400">
                                    Version de PHP : au minimum PHP 8.0
                                </span>
                            </li>

                            <li class="flex gap-x-3">
                                <svg class="shrink-0 size-4 mt-0.5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                                <span class="text-gray-800 dark:text-neutral-400">
                                    Serveur SMTP : Un serveur SMTP externe
                                </span>
                            </li>

                            <li class="flex gap-x-3">
                                <svg class="shrink-0 size-4 mt-0.5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                                <span class="text-gray-800 dark:text-neutral-400">
                                    Base de données : MYSQL
                                </span>
                            </li>

                            <li class="flex gap-x-3">
                                <svg class="shrink-0 size-4 mt-0.5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                                <span class="text-gray-800 dark:text-neutral-400">
                                    Extensions PHP requises : mbstring, openssl, pdo, et curl
                                </span>
                            </li>

                            <li class="flex gap-x-3">
                                <svg class="shrink-0 size-4 mt-0.5 text-blue-600 dark:text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                                <span class="text-gray-800 dark:text-neutral-400">
                                    Tache CRON JOB
                                </span>
                            </li>

                        </ul>
                    </div>
                    <!-- End Component -->

                    <!-- Component -->
                    <div>

                        <h2 id="installation" class="scroll-mt-24">
                            <a class="group relative text-lg font-bold text-gray-800 dark:text-white focus:outline-none" href="#require-via-npm">
                                <span class="absolute top-1 -start-4 inline-block shrink-0 opacity-0 transition-all group-hover:opacity-100 group-hover:-start-5 group-focus:opacity-100 group-focus:-start-5 before:absolute before:top-0 before:start-0 before:w-8 before:h-full">
                                    <svg class="shrink-0 size-4 text-blue-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="4" x2="20" y1="9" y2="9"></line>
                                        <line x1="4" x2="20" y1="15" y2="15"></line>
                                        <line x1="10" x2="8" y1="3" y2="21"></line>
                                        <line x1="16" x2="14" y1="3" y2="21"></line>
                                    </svg>
                                </span>
                                Installation sur votre propre serveur
                            </a>
                        </h2>

                        <!-- Vertical Steps -->
                        <ol class="relative space-y-2 doc-installation-step mt-5">
                            <li id="step-1" class="scroll-mt-24 relative ps-12 pb-8 last:pb-0 before:content-[counter(step)] before:absolute before:start-0 before:flex before:items-center before:justify-center before:size-7 before:text-xs before:font-semibold before:text-gray-700 before:rounded-full before:border before:border-gray-200 dark:before:border-neutral-700 dark:before:text-neutral-200 dark:before:ring-0 dark:before:shadow-none dark:before:highlight-white/5 last:after:hidden after:absolute after:top-[calc(1.75rem_+_.5rem)] after:bottom-0 after:start-[0.875rem] after:w-px after:bg-gray-200 dark:after:bg-neutral-800" style="counter-increment: step 1;">
                                <h3 class="text-sm font-semibold text-gray-800 dark:text-neutral-200">
                                    Installation de REMAIL Core
                                </h3>
                                <p class="mt-2 text-gray-600 dark:text-neutral-400">
                                    Installation via <code>GIT</code>
                                </p>
                                <pre class="mt-3 bg-gray-800 text-sm leading-7 text-gray-50 flex overflow-auto rounded-lg dark:bg-neutral-950 dark:border dark:border-neutral-700"><code class="docs-prism flex-none min-w-full p-5"><span class="block"><span class="text-yellow-400">https://github.com/*******/remail.git</span></span></code></pre>

                                <div class="mt-4 bg-gray-50 border border-gray-200 text-sm text-gray-500 rounded-lg p-2 dark:border-neutral-700 dark:bg-neutral-800">
                                    <div class="flex">
                                        <svg class="shrink-0 size-4 text-gray-600 mt-0.5 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="M12 16v-4"></path>
                                            <path d="M12 8h.01"></path>
                                        </svg>
                                        <div class="ms-2">
                                            <p class="text-gray-800 dark:text-neutral-400">
                                                Vous recevrez le lien du dépot distant automatiquement apres le paiement.
                                                Cependant si vous désirez procéder par <code>FTP</code>, vous n'aurez qu'a charger le contenu du ZIP que vous recvrez via un lien de téléchargement après le paiement.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li id="step-2" class="scroll-mt-24 relative ps-12 pb-8 last:pb-0 before:content-[counter(step)] before:absolute before:start-0 before:flex before:items-center before:justify-center before:size-7 before:text-xs before:font-semibold before:text-gray-700 before:rounded-full before:border before:border-gray-200 dark:before:border-neutral-700 dark:before:text-neutral-200 dark:before:ring-0 dark:before:shadow-none dark:before:highlight-white/5 last:after:hidden after:absolute after:top-[calc(1.75rem_+_.5rem)] after:bottom-0 after:start-[0.875rem] after:w-px after:bg-gray-200 dark:after:bg-neutral-800" style="counter-increment: step 1;">
                                <h3 class="text-sm font-semibold text-gray-800 dark:text-neutral-200">
                                    Migration de la base de donnée
                                </h3>
                                <p class="mt-2 text-gray-600 dark:text-neutral-400">
                                    Une fois les fichiers requis chargé sur votre serveur, vous devrez migrer les <code>table</code> nécéssaire
                                    au fonctionnement de l'application.
                                </p>
                                <pre class="mt-3 bg-gray-800 text-sm leading-7 text-gray-50 flex overflow-auto rounded-lg dark:bg-neutral-950 dark:border dark:border-neutral-700"><code class="docs-prism flex-none min-w-full p-5"><span class="block"><span class="text-yellow-400">php artisan migrate</span></span></code></pre>
                            </li>

                            <li id="step-3" class="scroll-mt-24 relative ps-12 pb-8 last:pb-0 before:content-[counter(step)] before:absolute before:start-0 before:flex before:items-center before:justify-center before:size-7 before:text-xs before:font-semibold before:text-gray-700 before:rounded-full before:border before:border-gray-200 dark:before:border-neutral-700 dark:before:text-neutral-200 dark:before:ring-0 dark:before:shadow-none dark:before:highlight-white/5 last:after:hidden after:absolute after:top-[calc(1.75rem_+_.5rem)] after:bottom-0 after:start-[0.875rem] after:w-px after:bg-gray-200 dark:after:bg-neutral-800" style="counter-increment: step 1;">
                                <h3 class="text-sm font-semibold text-gray-800 dark:text-neutral-200">
                                    Lancer et configurer les tâches Cron pour votre application
                                </h3>
                                <p class="mt-2 text-gray-600 dark:text-neutral-400">
                                    Pour que votre application Laravel exécute automatiquement les tâches planifiées (comme l'envoi d'emails, le traitement des files d'attente, etc.), vous devez configurer et exécuter les tâches cron sur votre serveur. Suivez ces étapes pour configurer correctement les cron jobs pour votre application.
                                </p>
                                <pre class="mt-3 bg-gray-800 text-sm leading-7 text-gray-50 flex overflow-auto rounded-lg dark:bg-neutral-950 dark:border dark:border-neutral-700"><code class="docs-prism flex-none min-w-full p-5"><span class="block"><span class="text-yellow-400">* * * * * cd /chemin/vers/votre/application && php artisan schedule:run >> /dev/null 2>&1</span></span></code></pre>
                            </li>
                        </ol>
                        <!-- End Vertical Steps -->
                    </div>
                    <!-- End Component -->

                    <!-- Component -->
                    <div>
                        <!-- Alert -->
                        <div id="information" class="scroll-mt-24 bg-blue-50 border border-blue-500 text-sm text-gray-500 rounded-lg p-5 dark:bg-blue-600/10">
                            <div class="flex">
                                <svg class="shrink-0 size-4 text-blue-600 mt-0.5 dark:text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M12 16v-4"></path>
                                    <path d="M12 8h.01"></path>
                                </svg>
                                <div class="ms-3">
                                    <h3 class="text-blue-600 font-semibold dark:font-medium dark:text-white">
                                        Vérifier l'exécution des tâches cron
                                    </h3>
                                    <p class="mt-2 text-gray-800 dark:text-neutral-400">
                                        Une fois que vous avez ajouté la tâche cron, Laravel exécutera la méthode schedule() dans le fichier app/Console/Kernel.php chaque minute.
                                        Vous pouvez vérifier que vos tâches cron sont correctement exécutées en consultant les logs du système ou en vérifiant la sortie dans un fichier de log personnalisé.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Alert -->
                    </div>
                    <!-- End Component -->
                </div>
            </div>
            <!-- End Content -->

            <!-- On this page links -->
            <div id="docs-on-this-page-sidebar" class="hs-overlay [--auto-close:xl] hs-overlay-open:translate-x-0 translate-x-full transition-all duration-300 transform hidden fixed top-0 end-0 bottom-0 xl:block xl:translate-x-0 xl:top-14 xl:end-[max(0px,calc(50%-45rem))] z-[59] xl:z-10 w-80 pt-5 pb-10 sm:pt-7 px-4 sm:px-8 bg-white overflow-y-auto [&amp;::-webkit-scrollbar]:w-2 [&amp;::-webkit-scrollbar-thumb]:rounded-full [&amp;::-webkit-scrollbar-track]:bg-gray-100 [&amp;::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&amp;::-webkit-scrollbar-track]:bg-neutral-700 dark:[&amp;::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900" role="dialog" aria-labelledby="docs-on-this-page-sidebar-label">
                <!-- Sidebar Toggle -->
                <button type="button" class="absolute top-4 end-4 z-20 xl:hidden flex justify-center items-center size-8 text-sm font-semibold rounded-full border border-gray-200 text-gray-800 hover:bg-gray-100 focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" aria-label="Close" data-hs-overlay="#docs-on-this-page-sidebar">
                    <span class="sr-only">Close</span>
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
                <!-- End Sidebar Toggle -->
                <div data-hs-docs-scrollspy="#scrollspy" data-hs-docs-scrollspy-offset="70">
                    <h5 id="docs-on-this-page-sidebar-label" class="mb-3 text-sm font-semibold text-gray-800 dark:text-neutral-300">Navigation</h5>
                    <ul>
                        <li data-hs-docs-scrollspy-group="">
                            <a href="#first" class="block py-0.5 text-sm leading-6 text-gray-600 hover:text-gray-900 focus:outline-none focus:text-blue-600 dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300 ">Premier pas sur Remail</a>
                        </li>
                        <li>
                            <a href="#requirements-setup" class="block py-0.5 text-sm leading-6 text-gray-600 hover:text-gray-900 focus:outline-none focus:text-blue-600 dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300 ">Exigences techniques</a>
                        </li>
                        <li>
                            <a href="#step-1" class="block py-0.5 text-sm leading-6 text-gray-600 hover:text-gray-900 focus:outline-none focus:text-blue-600 dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300 ">Installation</a>
                        </li>
                        <li>
                            <a href="#step-2" class="block py-0.5 text-sm leading-6 text-gray-600 hover:text-gray-900 focus:outline-none focus:text-blue-600 dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300 ">Migration du DB</a>
                        </li>
                        <li>
                            <a href="#step-3" class="block py-0.5 text-sm leading-6 text-gray-600 hover:text-gray-900 focus:outline-none focus:text-blue-600 dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300 ">Automatisation</a>
                        </li>
                    </ul>
                </div>
                <!-- PRO Banner -->
                <a class="mt-5 xl:-ms-3 xl:me-3 group block bg-gradient-to-bl from-violet-200 via-transparent rounded-2xl transition hover:drop-shadow-xl hover:shadow-sm hover:-translate-y-1 hover:translate-x-1 hover:scale-[1.025] focus:outline-none focus:drop-shadow-xl focus:shadow-sm focus:-translate-y-1 focus:translate-x-1 focus:scale-[1.025] dark:from-violet-800 dark:via-transparent" href="#">
                    <div class="p-px bg-gradient-to-tr from-blue-200 via-transparent rounded-2xl dark:from-blue-800 dark:via-transparent">
                        <div class="p-3 bg-white rounded-2xl dark:bg-neutral-900">
                            <img class="dark:hidden rounded-lg" src="/assets/img/mockups/MacBook-Pro-1735631820469.jpeg" alt="Preline Pro">
                            <img class="dark:block hidden rounded-lg" src="../assets/img/others/pro-dark.jpg" alt="Preline Pro">
                            <h3 class="font-bold text-blue-600 mt-3">Prix : 45$</h3>
                            <p class="mt-3 text-sm text-gray-800 dark:text-white">
                                Une solution puissante pour gérer vos campagnes d'emails et analyser vos performances.
                            </p>
                            <p class="mt-2">
                                <span class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 font-medium dark:text-blue-500">
                                    Télécharger maintenant
                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path class="lg:opacity-0 lg:-translate-x-1 lg:group-hover:opacity-100 lg:group-hover:translate-x-0 lg:transition" d="M5 12h14"></path>
                                        <path class="lg:-translate-x-1.5 lg:group-hover:translate-x-0 lg:transition" d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </span>
                            </p>
                        </div>
                    </div>
                </a>
                <!-- End PRO Banner -->
            </div>
            <!-- End On this page links -->
        </div>
    </div>
    <!-- End Hero -->


    <!-- JS PLUGINS -->
    <script src="/assets/vendor/preline/dist/index-3.js?v=2.5.0"></script>
</body>

</html>