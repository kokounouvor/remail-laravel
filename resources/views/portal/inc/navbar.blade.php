<header class="flex flex-wrap sticky top-0 sm:justify-start sm:flex-nowrap w-full bg-blue-600 text-sm py-3.5 z-[80]">
    <nav class="max-w-[85rem] w-full mx-auto px-4">
        <div class="flex items-center justify-between">
            <a class="flex-none text-xl font-semibold text-white focus:outline-none focus:opacity-80" href="{{Route('dashboard')}}">
                <img src="/assets/img/logo/white.png" class="size-6 w-full" alt="">
            </a>

            <div class="flex items-center gap-x-2">
                <div class="m-1 hs-dropdown [--auto-close:inside] relative inline-flex" data-hs-dropdown-auto-close="inside">
                    <button id="hs-dropdown-item-checkbox" type="button" class="relative hs-dropdown-toggle" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                        <svg class="size-7 text-white" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.1892 14.0608L19.0592 12.1808C18.8092 11.7708 18.5892 10.9808 18.5892 10.5008V8.63078C18.5892 5.00078 15.6392 2.05078 12.0192 2.05078C8.38923 2.06078 5.43923 5.00078 5.43923 8.63078V10.4908C5.43923 10.9708 5.21923 11.7608 4.97923 12.1708L3.84923 14.0508C3.41923 14.7808 3.31923 15.6108 3.58923 16.3308C3.85923 17.0608 4.46923 17.6408 5.26923 17.9008C6.34923 18.2608 7.43923 18.5208 8.54923 18.7108C8.65923 18.7308 8.76923 18.7408 8.87923 18.7608C9.01923 18.7808 9.16923 18.8008 9.31923 18.8208C9.57923 18.8608 9.83923 18.8908 10.1092 18.9108C10.7392 18.9708 11.3792 19.0008 12.0192 19.0008C12.6492 19.0008 13.2792 18.9708 13.8992 18.9108C14.1292 18.8908 14.3592 18.8708 14.5792 18.8408C14.7592 18.8208 14.9392 18.8008 15.1192 18.7708C15.2292 18.7608 15.3392 18.7408 15.4492 18.7208C16.5692 18.5408 17.6792 18.2608 18.7592 17.9008C19.5292 17.6408 20.1192 17.0608 20.3992 16.3208C20.6792 15.5708 20.5992 14.7508 20.1892 14.0608ZM12.7492 10.0008C12.7492 10.4208 12.4092 10.7608 11.9892 10.7608C11.5692 10.7608 11.2292 10.4208 11.2292 10.0008V6.90078C11.2292 6.48078 11.5692 6.14078 11.9892 6.14078C12.4092 6.14078 12.7492 6.48078 12.7492 6.90078V10.0008Z" fill="currentColor" />
                            <path d="M14.8297 20.01C14.4097 21.17 13.2997 22 11.9997 22C11.2097 22 10.4297 21.68 9.87969 21.11C9.55969 20.81 9.31969 20.41 9.17969 20C9.30969 20.02 9.43969 20.03 9.57969 20.05C9.80969 20.08 10.0497 20.11 10.2897 20.13C10.8597 20.18 11.4397 20.21 12.0197 20.21C12.5897 20.21 13.1597 20.18 13.7197 20.13C13.9297 20.11 14.1397 20.1 14.3397 20.07C14.4997 20.05 14.6597 20.03 14.8297 20.01Z" fill="currentColor" />
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
                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
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
                    <button type="button" class="p-2 inline-flex items-center gap-x-2 text-xs font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-application-sidebar" aria-label="Toggle navigation" data-hs-overlay="#hs-application-sidebar">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" x2="21" y1="6" y2="6"></line>
                            <line x1="3" x2="21" y1="12" y2="12"></line>
                            <line x1="3" x2="21" y1="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>