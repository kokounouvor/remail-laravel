<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>REMAIL - @yield('title')</title>

    <meta charset="utf-8" />
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="cagnotte,ong,association,organisation,entrepreneur,collecte de fonds,crowdfunding,levée de fond,financement,projet,fintech" />
    <meta property="og:type" content="website" />
    <!-- <meta http-equiv="Content-Security-Policy" content="default-src https:">-->

    <!--  Head js -->
    <link rel="stylesheet" href="/assets/css/main.min.css?v=2.5.0">

    <!-- Favicons -->
    <link rel="shortcut icon" href="/assets/img/logo/icon.png" />
</head>

<body>
    <div class="max-w-[50rem] flex flex-col mx-auto size-full">
        <!-- ========== HEADER ========== -->
        <header class="mb-auto flex justify-center z-50 w-full py-4">
            <nav class="px-4 sm:px-6 lg:px-8">
                <a class="flex-none text-xl font-semibold sm:text-3xl dark:text-white" href="/" aria-label="Brand">
                    <img src="/assets/img/logo/blue.png" class="h-10" alt="">
                </a>
            </nav>
        </header>
        <!-- ========== END HEADER ========== -->

        <!-- ========== MAIN CONTENT ========== -->
        <main id="content">
            <div class="text-center py-10 px-4 sm:px-6 lg:px-8">
                <h1 class="block text-7xl font-bold text-gray-800 sm:text-9xl dark:text-white">@yield('code')</h1>
                <p class="mt-3 text-gray-600 dark:text-neutral-400">Oops, something went wrong.</p>
                <p class="text-gray-600 dark:text-neutral-400">Sorry, we couldn't find your page.</p>
                <div class="mt-5 flex flex-col justify-center items-center gap-2 sm:flex-row sm:gap-3">
                    <a class="w-full sm:w-auto py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="../examples.html">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m15 18-6-6 6-6" />
                        </svg>
                        Retourner à l'accueil
                    </a>
                </div>
            </div>
        </main>
        <!-- ========== END MAIN CONTENT ========== -->

        <!-- ========== FOOTER ========== -->
        <footer class="mt-auto text-center py-5">
            <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
                <p class="text-sm text-gray-500 dark:text-neutral-500">© Tout droit réservé 2024</p>
            </div>
        </footer>
        <!-- ========== END FOOTER ========== -->
    </div>
</body>

</html>