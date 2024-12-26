<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="../../index.htm">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Email Marketing Web software">

    <meta name="twitter:site" content="@preline">
    <meta name="twitter:creator" content="@preline">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="REMAIL">
    <meta name="twitter:description" content="Email Marketing Web software">
    <meta name="twitter:image" content="https://preline.co/assets/img/og-image.png">

    <meta property="og:url" content="https://preline.co/">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Preline">
    <meta property="og:title" content="REMAIL">
    <meta property="og:description" content="Email Marketing Web software">
    <meta property="og:image" content="https://preline.co/assets/img/og-image.png">

    <!-- Title -->
    <title>REMAIL</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/img/logo/icon.png">

    <!-- Font -->
    <link href="../../css2-4?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

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

<body class="bg-gray-200 dark:bg-neutral-900">

    <div class="flex items-center justify-center bg-blue-600 py-3.5 shadow-sm sticky top-0">
        <img src="/assets/img/logo/white.png" class="h-8" alt="">
    </div>

    <div class="max-w-5xl mx-auto space-y-5 py-10">
        <div class="bg-white border border-gray-200 shadow-sm rounded-2xl dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <div class="p-4 md:p-5">
                <div class="grid lg:grid-cols-2 gap-5">
                    <div class="rounded-xl bg-gray-200 dark:bg-neutral-900 p-1">
                        <!-- List Group -->
                        <ul class="mt-1 flex flex-col mb-1">
                            <li class="inline-flex items-center gap-x-2 py-2 px-4 border text-gray-800 text-sm bg-white dark:bg-neutral-900 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-neutral-700 dark:text-neutral-200">
                                <div class="w-full">
                                    <span>De : </span>
                                    <span>
                                        {{$camps->from_name}}
                                        <strong>
                                            <>{{$camps->from_email}}
                                                <>
                                        </strong>
                                    </span>
                                </div>
                            </li>
                            <li class="inline-flex items-center gap-x-2 py-2 px-4 font-semibold bg-white dark:bg-neutral-900 text-sm border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200">
                                <div class=" w-full">
                                    <span>Objet : </span>
                                    <span> {{$camps->subject}}</span>
                                </div>
                            </li>
                        </ul>
                        <!-- End List Group -->
                        <iframe srcdoc="{{$camps->contents}}" class="rounded-xl" frameborder="0" width="100%" height="350px" scrolling="yes"></iframe>
                    </div>
                    <div>
                        <!-- Card Section -->
                        <div class="px-4 sm:px-6 lg:px-8 mx-auto space-y-5">
                            <!-- Grid -->
                            <div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-2 sm:gap-3">
                                <!-- Card -->
                                <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                                    <div class="p-4 md:p-5">
                                        <div class="flex items-center gap-x-2">
                                            <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                                                Contacts
                                            </p>
                                        </div>

                                        <div class="mt-1 flex items-center gap-x-2">
                                            <h3 class="text-lg sm:text-xl font-extrabold text-gray-800 dark:text-neutral-200">
                                                {{$mail_contact}}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Card -->

                                <!-- Card -->
                                <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                                    <div class="p-4 md:p-5">
                                        <div class="flex items-center gap-x-2">
                                            <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                                                Envoyés
                                            </p>
                                        </div>

                                        <div class="mt-1 flex items-center gap-x-2">
                                            <h3 class="text-lg sm:text-xl font-extrabold text-green-500 dark:text-neutral-200">
                                                {{$mail_sent}}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Card -->

                                <!-- Card -->
                                <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                                    <div class="p-4 md:p-5">
                                        <div class="flex items-center gap-x-2">
                                            <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                                                File d'attente
                                            </p>
                                        </div>

                                        <div class="mt-1 flex items-center gap-x-2">
                                            <h3 class="text-lg sm:text-xl font-extrabold text-gray-800 dark:text-neutral-200">
                                                {{$mail_attente}}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Card -->

                                <!-- Card -->
                                <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                                    <div class="p-4 md:p-5">
                                        <div class="flex items-center gap-x-2">
                                            <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                                                Bounce
                                            </p>
                                        </div>

                                        <div class="mt-1 flex items-center gap-x-2">
                                            <h3 class="text-lg sm:text-xl font-extrabold text-red-500 dark:text-neutral-200">
                                                {{$mail_bounced}}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Card -->

                                <!-- Card -->
                                <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                                    <div class="p-4 md:p-5">
                                        <div class="flex items-center gap-x-2">
                                            <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                                                Ouverts
                                            </p>
                                        </div>

                                        <div class="mt-1 flex items-center gap-x-2">
                                            <h3 class="text-lg sm:text-xl font-extrabold text-yellow-600 dark:text-neutral-200">
                                                {{DB::table('messages')->where([['campaign_id', '=', $camps->id],['open','=',true]])->count()}}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Card -->

                                <!-- Card -->
                                <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                                    <div class="p-4 md:p-5">
                                        <div class="flex items-center gap-x-2">
                                            <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                                                Clics
                                            </p>
                                        </div>

                                        <div class="mt-1 flex items-center gap-x-2">
                                            <h3 class="text-lg sm:text-xl font-extrabold text-blue-600 dark:text-neutral-200">
                                                {{$mail_clicks}}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Card -->
                            </div>
                            <!-- End Grid -->

                            <div id="hs-show-hide-collapse-heading" class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-show-hide-collapse">
                                <!-- List Group -->
                                <ul class="flex flex-col justify-end text-start -space-y-px">
                                    @foreach($mail_clicks_links as $lk)
                                    <li class="flex items-center gap-x-2 p-3 text-xs bg-white border text-gray-800 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200">
                                        <div class="w-full flex justify-between truncate">
                                            <span class="me-3 flex-1 w-0 truncate">
                                                {{$lk->url}}
                                            </span>
                                            <button type="button" class="bg-red-100 rounded-full py-1 px-1 text-red-600 focus:outline-none font-semibold whitespace-nowrap dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500">
                                                {{ App\Models\Campaign_link_click::where([["campaign_id",$camps->id], ["url",$lk->url]])->count() }}
                                            </button>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                                <!-- End List Group -->
                            </div>
                            <p class="mt-2">
                                <button type="button" class="hs-collapse-toggle inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 decoration-2 hover:text-blue-700 hover:underline focus:outline-none focus:underline focus:text-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-600 dark:focus:text-blue-600" id="hs-show-hide-collapse" aria-expanded="false" aria-controls="hs-show-hide-collapse-heading" data-hs-collapse="#hs-show-hide-collapse-heading">
                                    <span class="hs-collapse-open:hidden">Voir les clics sur les liens</span>
                                    <span class="hs-collapse-open:block hidden">Cacher les clics sur les liens</span>
                                    <svg class="hs-collapse-open:rotate-180 shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                </button>
                            </p>
                        </div>
                        <!-- End Card Section -->
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white border border-gray-200 dark:bg-neutral-800 dark:border-neutral-700 rounded-2xl p-4">
            <div class="flex flex-col mb-2">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="border rounded-lg overflow-hidden dark:border-neutral-700">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                                <thead class="bg-gray-50 dark:bg-neutral-700">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-400">Id</th>
                                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-400">Email</th>
                                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-400">Status</th>
                                        <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-400">Date</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                    @foreach($receivers as $list)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">{{$list->id}}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{$list->recipient_email}}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                            @if($list->sent==null)
                                            <span class="bg-gray-500/10 text-gray-500 text-[11px] font-medium mr-1 px-2.5 py-0.5 rounded ">File d'attente</span>
                                            @elseif($list->sent==true)
                                            <span class="inline-flex items-center gap-x-1.5 py-1 px-3 rounded-full text-xs font-medium bg-teal-100 text-teal-800 dark:bg-teal-800/30 dark:text-teal-500">Envoyé</span>
                                            @elseif($list->sent==false)
                                            <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-800/30 dark:text-red-500">Echec</span>
                                            @else
                                            <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-gray-100 text-gray-800 dark:bg-white/10 dark:text-white">Inconnu :)</span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            {{$list->created_at}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{$receivers->links('pagination::tailwind')}}
        </div>
    </div>

    <div class="fixed end-10 bottom-12">
        <button type="button" class="hs-dark-mode-active:hidden block hs-dark-mode font-medium text-gray-800 rounded-full bg-white shadow-sm hover:bg-gray-200 focus:outline-none focus:bg-gray-200 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" data-hs-theme-click-value="dark">
            <span class="group inline-flex shrink-0 justify-center items-center size-9">
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
                </svg>
            </span>
        </button>
        <button type="button" class="hs-dark-mode-active:block hidden hs-dark-mode font-medium text-gray-800 rounded-full hover:bg-gray-200 focus:outline-none focus:bg-gray-200 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" data-hs-theme-click-value="light">
            <span class="group inline-flex shrink-0 justify-center items-center size-9">
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="4"></circle>
                    <path d="M12 2v2"></path>
                    <path d="M12 20v2"></path>
                    <path d="m4.93 4.93 1.41 1.41"></path>
                    <path d="m17.66 17.66 1.41 1.41"></path>
                    <path d="M2 12h2"></path>
                    <path d="M20 12h2"></path>
                    <path d="m6.34 17.66-1.41 1.41"></path>
                    <path d="m19.07 4.93-1.41 1.41"></path>
                </svg>
            </span>
        </button>
    </div>

    <script src="/assets/vendor/preline/dist/index-3.js?v=2.5.0"></script>
</body>

</html>