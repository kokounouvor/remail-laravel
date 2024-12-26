<!-- Offer/Help Menu -->
@if(date('D')=='Mon' && !empty(@$msg->lundi))
<div class="py-3 items-center bg-primary-100 text-second z-20">
    <div class="container">
        <div class="max-w-4xl mx-auto items-center gap-4">
            <!-- Offer Link -->
            <h5 class="text-sm text-second text-center">{{@$msg->lundi}} <a class="font-semibold underline" href="{{@$msg->lundi_link}}">{{@$msg->lundi_link_name}}</a></h5>
        </div>
    </div>
</div>
@elseif(date('D')=='Tue' && !empty(@$msg->mardi))
<div class="py-3 items-center bg-primary-100 text-second z-20">
    <div class="container">
        <div class="max-w-4xl mx-auto items-center gap-4">
            <!-- Offer Link -->
            <h5 class="text-sm text-second text-center">{{@$msg->mardi}} <a class="font-semibold underline" href="{{@$msg->mardi_link}}">{{@$msg->mardi_link_name}}</a></h5>
        </div>
    </div>
</div>
@elseif(date('D')=='Wed' && !empty(@$msg->mercredi))
<div class="py-3 items-center bg-primary-100 text-second z-20">
    <div class="container">
        <div class="max-w-4xl mx-auto items-center gap-4">
            <!-- Offer Link -->
            <h5 class="text-sm text-second text-center">{{@$msg->mercredi}} <a class="font-semibold underline" href="{{@$msg->mercredi_link}}">{{@$msg->mercredi_link_name}}</a></h5>
        </div>
    </div>
</div>
@elseif(date('D')=='Thu' && !empty(@$msg->jeudi))
<div class="py-3 items-center bg-primary-100 text-second z-20">
    <div class="container">
        <div class="max-w-4xl mx-auto items-center gap-4">
            <!-- Offer Link -->
            <h5 class="text-sm text-second text-center">{{@$msg->jeudi}} <a class="font-semibold underline" href="{{@$msg->jeudi_link}}">{{@$msg->jeudi_link_name}}</a></h5>
        </div>
    </div>
</div>
@elseif(date('D')=='Fri' && !empty(@$msg->vendredi))
<div class="py-3 items-center bg-primary-100 text-second z-20">
    <div class="container">
        <div class="max-w-4xl mx-auto items-center gap-4">
            <!-- Offer Link -->
            <h5 class="text-sm text-second text-center">{{@$msg->vendredi}} <a class="font-semibold underline" href="{{@$msg->vendredi_link}}">{{@$msg->vendredi_link_name}}</a></h5>
        </div>
    </div>
</div>
@elseif(date('D')=='Sat' && !empty(@$msg->samedi))
<div class="py-3 items-center bg-primary-100 text-second z-20">
    <div class="container">
        <div class="max-w-4xl mx-auto items-center gap-4">
            <!-- Offer Link -->
            <h5 class="text-sm text-second text-center">{{@$msg->samedi}} <a class="font-semibold underline" href="{{@$msg->samedi_link}}">{{@$msg->samedi_link_name}}</a></h5>
        </div>
    </div>
</div>
@endif

<!-- Main Navigation Menu -->
<header id="navbar" class="sticky top-0 z-20 border-b border-default-200 bg-white dark:bg-default-50 transition-all">
    <div class="lg:h-20 h-14 flex items-center">
        <div class="container">
            <div class="grid lg:grid-cols-6 grid-cols-2 items-center gap-4">
                <div class="lg:col-span-1 flex">
                    <!-- Mobile Menu Toggle Button -->
                    <button class="lg:hidden block " data-hs-overlay="#mobile-menu">
                        <i data-lucide="menu" class="w-7 h-7 text-default-600 me-4 hover:text-primary"></i>
                    </button>

                    <!-- Navbar Brand Logo -->
                    <a href="/">
                        <img src="/web/assets/logo/logo-primary.png" alt="logo" class="h-8 flex dark:hidden">
                        <img src="/web/assets/logo/white.png" alt="logo" class="sm:h-7 md:h-9 hidden dark:flex">
                    </a>
                </div>

                <!-- Nevigation Menu -->
                <ul class="lg:col-span-3 menu lg:flex items-center justify-end hidden relative">
                    <!-- Home Menu -->
                    <li class="menu-item ">
                        <a href="{{Route('how-it-work')}}" class="inline-flex items-center text-sm lg:text-base font-medium text-default-800 py-2 px-4 hover:text-primary">Comment ça marche </a>
                    </li>
                    <!-- Home Menu -->
                    <li class="menu-item">
                        <a href="{{Route('discover')}}" class="inline-flex items-center text-sm lg:text-base font-medium text-default-800 py-2 px-4 hover:text-primary">Liste des projets </a>
                    </li>
                    <!-- Home Menu -->
                    <li class="menu-item">
                        <a href="{{Route('products')}}" class="inline-flex items-center text-sm lg:text-base font-medium text-default-800 py-2 px-4 hover:text-primary">Produits </a>
                    </li>
                    <!-- Search Form Input -->
                    <li class="relative menu-item hidden">
                        <form action="{{Route('campaign/search')}}" method="GET">
                            @csrf
                            <input name="words" class="ps-10 pe-4 py-2.5 block w-64 border-transparent dark:bg-default-50 rounded-full text-sm bg-white text-default-800" placeholder="Rechercher un projet...." type="search">
                            <span class="absolute start-4 top-3">
                                <button type="submit"> <i class="w-4 h-4 text-default-800" data-lucide="search"></i></button>
                            </span>
                        </form>
                    </li>

                </ul>

                <ul class="lg:col-span-2 flex items-center justify-end gap-x-3">
                    <!-- Search Button (small screen) -->
                    <li class="flex menu-item">
                        <button data-hs-overlay="#mobileSearchSidebar" class="relative flex text-base transition-all text-default-600 hover:text-primary">
                            <i class="w-5 h-5" data-lucide="search"></i>
                        </button>
                    </li>

                    @if(empty($user))
                    <li class="md:flex relative menu-item hidden">
                        <a href="{{Route('login')}}" class="py-3 px-5 font-medium shadow-md text-second  hover:text-white border bg-white rounded-full hover:bg-primary-500 transition-all">
                            Connexion
                        </a>
                    </li>

                    <li class="lg:flex relative menu-item hidden">
                        <a href="{{Route('register')}}" class="py-3 px-5 font-medium shadow-md text-white bg-primary rounded-full hover:bg-primary-500 transition-all">
                            Collecter des fonds
                        </a>
                    </li>
                    @else
                    <!-- User Dropdown -->
                    <li class="flex menu-item">
                        <div class="hs-dropdown relative inline-flex [--trigger:hover] [--placement:bottom]">
                            <a class="hs-dropdown-toggle after:absolute hover:after:-bottom-10 after:inset-0 relative flex items-center text-base transition-all text-default-600 hover:text-primary" href="javascript:void(0)">
                                <div class="relative ">
                                    @if(!empty($user->profil))
                                    <img src="/storage/{{$user->profil}}" class="h-12 w-12 rounded-full" alt="avatar" style="padding: 0.21rem;">
                                    @else
                                    <!-- -->
                                    @if($user->sexe=='mascular')
                                    <img src="/landing/img/avatars/m.png" class="h-12 w-12 rounded-full" alt="avatar" style="padding: 0.21rem;">
                                    @endif
                                    <!-- -->
                                    @if($user->sexe=='female')
                                    <img src="/landing/img/avatars/f.png" class="h-12 w-12 rounded-full" alt="avatar" style="padding: 0.21rem;">
                                    @endif
                                    @endif
                                </div>
                            </a>

                            <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-[200px] transition-[opacity,margin] mt-4 opacity-0 hidden z-20 bg-white shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] rounded-lg border border-default-100 p-1.5 dark:bg-default-50">
                                <div>
                                    <div class="flex items-center gap-2 mb-5">
                                        @if(!empty($user->profil))
                                        <img src="/storage/{{$user->profil}}" class="h-12 w-12 rounded-full" alt="avatar" style="padding: 0.21rem;">
                                        @else
                                        <!-- -->
                                        @if($user->sexe=='mascular')
                                        <img src="/landing/img/avatars/m.png" class="h-12 w-12 rounded-full" alt="avatar" style="padding: 0.21rem;">
                                        @endif
                                        <!-- -->
                                        @if($user->sexe=='female')
                                        <img src="/landing/img/avatars/f.png" class="h-12 w-12 rounded-full" alt="avatar" style="padding: 0.21rem;">
                                        @endif
                                        @endif
                                        <div class="">
                                            <h6 class="text-base font-medium text-default-900"> {{$user->prenom}}</h6>
                                            <p class="text-sm font-medium text-default-500">Mon compte</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-t border-b ">
                                    @if($upgrade->getUpgrade()=="active")
                                    <div class="w-full flex items-center justify-center text-center">
                                        <a href="{{Route('upgrade')}}" class="rounded-lg bg-second underline text-white w-full px-2 dark:bg-dark2 py-2 font-semibold"><i class="mdi mdi-professional-hexagon"></i> Membre PRO </a>
                                    </div>
                                    @endif
                                    @if($upgrade->getUpgrade()=="expired")
                                    <div class="w-full flex items-center justify-center">
                                        <a href="{{Route('upgrade')}}" class="rounded-lg bg-light-base underline px-2 dark:bg-dark2 py-2 font-semibold"><i class="mdi mdi-professional-hexagon text-accent"></i> Repasser à PRO </a>
                                    </div>
                                    @endif
                                    @if($upgrade->getUpgrade()=="new")
                                    <div class="w-fullflex items-center justify-center">
                                        <a href="{{Route('upgrade')}}" class="rounded-lg underline px-2 dark:bg-dark2 py-2 font-semibold"><i class="mdi mdi-professional-hexagon text-white"></i> Passer à PRO </a>
                                    </div>
                                    @endif
                                </div>
                                <ul class="flex flex-col gap-1 mt-4">
                                    <li>
                                        <a href="{{Route('dashboard')}}" class="text-sm flex items-center gap-3 font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-100 rounded" href="cart.html">
                                            <i class="h-4 w-4" data-lucide="home"></i>
                                            Tableau de bord</a>
                                    </li>
                                    <li>
                                        <a href="{{Route('upgrade')}}" class="text-sm flex items-center gap-3 font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-100 rounded" href="wishlist.html">
                                            <i class="h-4 w-4" data-lucide="diamond"></i>
                                            Abonnement</a>
                                    </li>
                                    <li>
                                        <a href="{{Route('logout-account')}}" class="text-sm flex items-center gap-3 font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-100 rounded" href="auth-login.html"><i class="h-4 w-4" data-lucide="log-out"></i>
                                            Déconnexion</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="2xl:flex relative menu-item hidden">
                        <a href="{{Route('campaign-editor')}}" class="flex gap-x-2 py-3 px-5 font-medium shadow-md text-white bg-primary rounded-full hover:bg-primary-500 transition-all">
                            <i class="w-5 h-5" data-lucide="piggy-bank"></i> Lancer une collecte
                        </a>
                    </li>
                    @endif

                </ul>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Nav (Bottom Navbar) -->
<div class="flex lg:hidden">
    <div class="fixed inset-x-0 bottom-0 h-16 w-full grid grid-cols-2 items-center justify-items-center border-t border-default-200 bg-white dark:bg-default-50 z-40">
        <a href="/" class="flex flex-col items-center justify-center gap-1 text-default-600" type="button">
            <i class="fa-solid fa-house text-lg"></i>
            <span class="text-xs font-medium">Accueil</span>
        </a>
        <a href="{{Route('discover')}}" class="flex flex-col items-center justify-center gap-1 text-default-600" type="button">
            <i class="fa-solid fa-list text-lg"></i>
            <span class="text-xs font-medium">Projets</span>
        </a>
    </div>
</div>

<!-- Mobile Menu (Sidebar Menu) -->
<div id="mobile-menu" class="hs-overlay hs-overlay-open:translate-x-0 hidden -translate-x-full fixed top-0 left-0 transition-all transform h-full max-w-[270px] w-full z-60  border-r border-default-200 bg-white dark:bg-default-50" tabindex="-1">
    <div class="flex justify-center items-center border-b border-dashed border-default-200 h-16 transition-all duration-300">
        <a href="/">
            <img src="/web/assets/logo/logo-primary.png" alt="logo" class="h-8 flex dark:hidden">
            <img src="/web/assets/logo/white.png" alt="logo" class="h-8 hidden dark:flex">
        </a>
    </div>
    <div class="h-[calc(100%-4rem)]" data-simplebar>
        <ul class="admin-menu p-4 w-full flex flex-col gap-1.5">
            <li class="menu-item">
                <a href="{{Route('how-it-work')}}" class="flex items-center gap-x-3.5 py-3 px-4 text-sm text-default-700 rounded-md hover:bg-default-100">
                    <i data-lucide="layout-grid" class="w-5 h-5"></i>
                    Comment ça marche
                </a>
            </li>

            <li class="menu-item">
                <a href="{{Route('discover')}}" class="flex items-center gap-x-3.5 py-3 px-4 text-sm text-default-700 rounded-md hover:bg-default-100">
                    <i data-lucide="settings-2" class="w-5 h-5"></i>
                    Liste des projets
                </a>
            </li>

            <li class="menu-item mb-10">
                <a href="{{Route('products')}}" class="flex items-center gap-x-3.5 py-3 px-4 text-sm text-default-700 rounded-md hover:bg-default-100">
                    <i data-lucide="wallet" class="w-5 h-5"></i>
                    Produits
                </a>
            </li>

            <div class="text-center">
                @if(empty($user))
                <li class="w-full py-5">
                    <a href="{{Route('login')}}" class="py-2 px-5 font-medium shadow-md text-white bg-primary rounded-md hover:bg-primary-500 transition-all">
                        Connexion
                    </a>
                </li>

                <li class="relative ">
                    <a href="{{Route('register')}}" class="py-2 px-5 font-medium shadow-md text-white bg-primary rounded-md hover:bg-primary-500 transition-all">
                        Collecter de l’argent
                    </a>
                </li>
                @else
                <li class="relative">
                    <a href="{{Route('campaign-editor')}}" class="flex gap-x-2 py-2 px-5 font-medium shadow-md text-white bg-primary rounded-full hover:bg-primary-500 transition-all">
                        <i class="w-5 h-5" data-lucide="piggy-bank"></i> Lancer une collecte
                    </a>
                </li>
                @endif
            </div>

        </ul>

    </div>
</div>

<!-- Topbar Search Modal (Small Screen) -->
<div id="mobileSearchSidebar" class="hs-overlay hidden w-full h-full fixed top-0 left-0 z-60 overflow-x-hidden overflow-y-auto">
    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all max-w-3xl sm:w-full m-3 sm:mx-auto">
        <div class="flex flex-col bg-white shadow-sm rounded-lg">

            <div class="p-3">
                <!-- Barre de recherche -->
                <form action="{{Route('campaign/search')}}" method="GET" class="bg-white dark:bg-default-50 rounded-xl">
                    @csrf
                    <!-- Barre de recherche -->
                    <div class="flex flex-col justify-between gap-4 p-4 dark:border-jacarta-600 dark:bg-jacarta-800 md:flex-row md:items-center md:gap-6">
                        <div class="hidden flex-shrink-0 items-center gap-3 md:flex">
                            <div class="flex h-10 w-10 group cursor-pointer items-center justify-center rounded-lg dark:bg-jacarta-700 dark:border-jacarta-600 border border-jacarta-100 bg-white dark:hover:bg-accent hover:bg-accent hover:border-accent">
                                <i class="mdi mdi-list-box-outline mdi-24px"></i>
                            </div>
                            <div class="flex flex-shrink-0 flex-col">
                                <div class="text-left text-sm font-medium text-jacarta-500 dark:text-jacarta-300 md:whitespace-nowrap">
                                    <strong>Actualisé</strong>
                                </div>
                                <div class="text-left text-xs text-jacarta-300 dark:text-jacarta-400">Il y a 1 min</div>
                            </div>
                        </div>
                        <div class="relative flex w-full flex-1">
                            <div class="relative w-full md:w-2/3">
                                <input type="search" name="words" value="{{@$_GET['words']}}" class="h-10 w-full rounded-lg border border-jacarta-100 py-2 px-4 pl-10 text-jacarta-700 placeholder-jacarta-500 focus:ring-accent dark:border-transparent dark:bg-white/[.15] dark:text-white dark:placeholder-white" placeholder="Mots clés correspondants">
                                <span class="absolute left-0 top-0 flex h-full w-12 items-center justify-center rounded-2xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="h-4 w-4 fill-jacarta-500 dark:fill-white">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15z"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="flex flex-wrap justify-between gap-2">
                            <div class="flex flex-shrink-0 items-center gap-3 md:hidden">
                                <div class="flex h-10 w-10 group cursor-pointer items-center justify-center rounded-lg dark:bg-jacarta-700 dark:border-jacarta-600 border border-jacarta-100 bg-white dark:hover:bg-accent hover:bg-accent hover:border-accent">
                                    <i class="mdi mdi-list-box-outline mdi-24px"></i>
                                </div>
                                <div class="flex flex-shrink-0 flex-col">
                                    <div class="text-left text-sm font-medium text-jacarta-500 dark:text-jacarta-300 md:whitespace-nowrap">
                                        <strong>Actualisé</strong>
                                    </div>
                                    <div class="text-left text-xs text-jacarta-300 dark:text-jacarta-400">Il y a 1 min</div>
                                </div>
                            </div>
                            <div class="flex flex-shrink-0 items-center text-xs font-medium text-jacarta-500 dark:text-jacarta-300 sm:text-sm">
                                <div class="flex h-10 w-full cursor-pointer items-center sm:px-4 sm:py-2">
                                    <select name="select" id="" class="rounded-lg border-jacarta-100 py-2.5 text-sm dark:border-jacarta-600 dark:bg-jacarta-700 dark:text-white">
                                        <option value="all">Tout</option>
                                        @if(!empty(@$categories))
                                        @foreach(@$categories as $lisC)
                                        <option value="{{@$lisC->slug}}">{{@$lisC->name}}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="flex h-10 w-full cursor-pointer items-center p-3 first:rounded-l-lg last:rounded-r-lg hover:border-transparent hover:bg-accent hover:text-white dark:border-jacarta-600 dark:bg-jacarta-700 sm:px-4 sm:py-2">
                                    <button type="submit" class="flex h-10 w-full cursor-pointer items-center justify-center whitespace-nowrap rounded-xl bg-primary py-4 px-2 items-center text-center font-semibold text-white shadow-accent-volume transition-all hover:bg-accent-dark">
                                        <i class="mdi mdi-send mdi-24px"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fin de la barre de recherche -->
                </form>
                <!-- Fin de la barre de recherche -->
            </div>

        </div>
    </div>
</div>