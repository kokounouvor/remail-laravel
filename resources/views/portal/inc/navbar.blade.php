<header class="flex flex-wrap sticky top-0 sm:justify-start sm:flex-nowrap w-full bg-blue-600 text-sm py-3.5 z-[80]">
    <nav class="max-w-[85rem] w-full mx-auto px-4">
        <div class="flex items-center justify-between">
            <a class="flex-none text-xl font-semibold text-white focus:outline-none focus:opacity-80" href="{{Route('dashboard')}}">
                <img src="/assets/img/logo/white.png" class="size-7 w-full" alt="">
            </a>

            <div class="flex items-center gap-x-2">
                <span>
                    <button type="button" class="hs-dark-mode-active:hidden block hs-dark-mode font-medium text-gray-800 rounded-full hover:bg-gray-200 focus:outline-none focus:bg-gray-200 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" data-hs-theme-click-value="dark">
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
                </span>
                <div class="m-1 hs-dropdown [--auto-close:inside] relative inline-flex" data-hs-dropdown-auto-close="inside">
                    <button id="hs-dropdown-item-checkbox" type="button" class="relative hs-dropdown-toggle" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                        <svg class="size-8 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g fill="none" fill-rule="evenodd">
                                <path d="m12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036q-.016-.004-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z" />
                                <path fill="currentColor" d="M5 9a7 7 0 0 1 14 0v3.764l1.822 3.644A1.1 1.1 0 0 1 19.838 18h-3.964a4.002 4.002 0 0 1-7.748 0H4.162a1.1 1.1 0 0 1-.984-1.592L5 12.764zm5.268 9a2 2 0 0 0 3.464 0zM12 4a5 5 0 0 0-5 5v3.764a2 2 0 0 1-.211.894L5.619 16h12.763l-1.17-2.342a2 2 0 0 1-.212-.894V9a5 5 0 0 0-5-5" />
                            </g>
                        </svg>
                        @if($notifications_unread>0)
                        <span class="absolute top-0 end-0 inline-flex items-center py-0.5 px-1.5 rounded-full text-xs font-medium transform -translate-y-1/2 translate-x-1/2 bg-red-500 text-white"> {{$notifications->count()}} </span>
                        @endif
                    </button>

                    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 w-64 bg-white shadow-md rounded-lg mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-item-checkbox">
                        <div class="p-4 space-y-0.5 h-64 overflow-y-auto">
                            @if($notifications->isEmpty())
                            <div class="min-h-60 flex flex-col">
                                <div class="flex flex-auto flex-col justify-center items-center p-4 md:p-5">
                                    <svg class="size-10 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                        <line x1="22" x2="2" y1="12" y2="12"></line>
                                        <path d="M5.45 5.11 2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
                                        <line x1="6" x2="6.01" y1="16" y2="16"></line>
                                        <line x1="10" x2="10.01" y1="16" y2="16"></line>
                                    </svg>
                                    <p class="mt-2 text-sm text-center text-gray-800 dark:text-neutral-300">
                                        Aucune notification disponible
                                    </p>
                                </div>
                            </div>
                            @else
                            <!-- Timeline -->
                            <div>
                                @foreach($notifications as $notif)
                                <!-- Item -->
                                <div class="flex gap-x-3">
                                    <!-- Icon -->
                                    <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-neutral-700">
                                        <div class="relative z-10 size-7 flex justify-center items-center">
                                            <div class="size-2 rounded-full @if($notif->status!=true) bg-green-600 @else bg-gray-400 @endif dark:bg-neutral-600"></div>
                                        </div>
                                    </div>
                                    <!-- End Icon -->

                                    <!-- Right Content -->
                                    <div class="grow pt-0.5 pb-8 truncate">
                                        <h3 class="flex gap-x-1.5 font-semibold truncate text-gray-800 dark:text-white">
                                            {{$notif->title}}
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-600 truncate dark:text-neutral-400">
                                            {{$notif->message}}
                                        </p>
                                        <p type="button" class="mt-1 -ms-1 p-1 inline-flex items-center gap-x-2 text-xs rounded-lg border border-transparent text-gray-400 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                            {{$notif->created_at}}
                                        </p>
                                    </div>
                                    <!-- End Right Content -->
                                </div>
                                <!-- End Item -->
                                @endforeach

                                <!-- Item -->
                                <div class="ps-[7px] flex gap-x-3">
                                    <a href="{{Route('notifications')}}" class="text-start inline-flex items-center gap-x-1 text-sm text-blue-600 font-medium decoration-2 hover:underline focus:outline-none focus:underline dark:text-blue-500">
                                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m6 9 6 6 6-6"></path>
                                        </svg>
                                        Tout voir
                                    </a>
                                </div>
                                <!-- End Item -->
                            </div>
                            <!-- End Timeline -->
                            @endif
                        </div>
                    </div>
                </div>
                <!-- Dropdown -->
                <div class="hs-dropdown [--placement:bottom-right] relative">
                    <div class="shrink-0 group block cursor-pointer">
                        <div class="flex items-center">
                            <img class="inline-block shrink-0 size-[38px] rounded-full" src="/assets/img/160x160/img1.jpg" alt="Avatar">
                            <div class="ms-3 hidden lg:block">
                                <h3 class="font-bold text-sm text-white dark:text-white">{{$user->name}}</h3>
                                <p class="text-xs font-normal text-white dark:text-neutral-500">{{$user->email}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-xl border border-gray-200 rounded-lg mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-account">
                        <div class="py-3 px-5 bg-gray-100 rounded-t-lg dark:bg-neutral-700">
                            <p class="text-sm text-gray-500 dark:text-neutral-500">Connecté en tant que</p>
                            <p class="text-sm font-medium text-gray-800 dark:text-neutral-200">{{$user->email}}</p>
                        </div>
                        <div class="p-1.5 space-y-0.5">
                            <a href="{{Route('setting')}}" class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z" />
                                    <path d="M3 6h18" />
                                    <path d="M16 10a4 4 0 0 1-8 0" />
                                </svg>
                                Parametres
                            </a>
                            <a href="{{Route('/emails/services')}}" class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242" />
                                    <path d="M12 12v9" />
                                    <path d="m8 17 4 4 4-4" />
                                </svg>
                                Services Email
                            </a>
                            <a href="{{Route('logout')}}" class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                </svg>
                                Déconnexion
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Dropdown -->
                <div class="sm:hidden">
                    <button type="button" class="inline-flex items-center text-white" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-application-sidebar" aria-label="Toggle navigation" data-hs-overlay="#hs-application-sidebar">
                        <svg class="shrink-0 size-8" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M4 18q-.425 0-.712-.288T3 17t.288-.712T4 16h11q.425 0 .713.288T16 17t-.288.713T15 18zm14.9-1.7l-3.6-3.6q-.3-.3-.3-.7t.3-.7l3.6-3.6q.275-.275.7-.275t.7.275t.275.7t-.275.7L17.4 12l2.9 2.9q.275.275.275.7t-.275.7t-.7.275t-.7-.275M4 13q-.425 0-.712-.288T3 12t.288-.712T4 11h8q.425 0 .713.288T13 12t-.288.713T12 13zm0-5q-.425 0-.712-.288T3 7t.288-.712T4 6h11q.425 0 .713.288T16 7t-.288.713T15 8z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>