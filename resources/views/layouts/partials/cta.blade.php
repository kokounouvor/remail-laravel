<!-- Download App Section -->
<section class="py-6 bg-black dark:bg-default-50">
    <div class="container">
        <div class="rounded-xl" style="background-image: url(/web/assets/img/hape.png);">
            <div class="grid grid-cols-1 lg:grid-cols-3 items-center gap-6 py-6">
                <div class="relative p-6 h-full">
                    <span class="absolute bottom-40 end-40 h-2 w-2 inline-flex items-center justify-center bg-primary text-white rounded-full"></span>
                    <span class="inline-flex text-base border-x-2 border-x-primary-600 text-primary-700 font-semibold px-2 rounded-full bg-primary-100  mb-2">
                        Démarrer maintenant
                    </span>
                    <h2 class="lg:text-3xl/normal md:text-3xl/snug text-xl font-semibold text-white max-w-sm mb-6">Êtes-vous prêt?</h2>
                    <p class="text-white text-base max-w-md mb-10 hidden">
                        Accéder au financement nécéssaire à vos projets grâce à nos outils pour mobiliser des ressources et de l’argent, mais également grâce à nos accompagnements.
                    </p>
                    @if(Session::get("user_id_particular"))
                    <div class="lg:flex gap-x-2">
                        <div class="">
                            <a href="{{Route('campaign-editor')}}" class="rounded-xl py-3 px-8 text-center border border-default-100 font-semibold text-white transition-all hover:bg-accent-dark">
                                Lancer une collecte
                            </a>
                        </div>
                    </div>
                    @else
                    <div class="lg:flex gap-x-2">
                        <div class="">
                            <a href="{{Route('register')}}" class="rounded-full bg-primary py-3 px-8 text-center font-semibold text-white transition-all hover:bg-accent-dark">
                                Démarrer
                            </a>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="relative lg:p-20 p-6 h-full">
                    <span class="absolute bottom-40 end-40 h-2 w-2 inline-flex items-center justify-center bg-primary text-white rounded-full"></span>
                    <span class="inline-flex text-base border-x-2 border-x-primary-600 text-primary-700 font-semibold px-2 rounded-full bg-primary-100  mb-2">
                        Démarrer maintenant
                    </span>
                    <h2 class="lg:text-3xl/normal md:text-3xl/snug text-xl font-semibold text-white max-w-sm mb-6">Êtes-vous prêt?</h2>
                    <p class="text-white text-base max-w-md mb-10 hidden">
                        Accéder au financement nécéssaire à vos projets grâce à nos outils pour mobiliser des ressources et de l’argent, mais également grâce à nos accompagnements.
                    </p>
                    @if(Session::get("user_id_particular"))
                    <div class="lg:flex gap-x-2">
                        <div class="">
                            <a href="{{Route('campaign-editor')}}" class="rounded-xl py-3 px-8 text-center border border-default-100 font-semibold text-white transition-all hover:bg-accent-dark">
                                Lancer une collecte
                            </a>
                        </div>
                    </div>
                    @else
                    <div class="lg:flex gap-x-2">
                        <div class="">
                            <a href="{{Route('register')}}" class="rounded-full bg-primary py-3 px-8 text-center font-semibold text-white transition-all hover:bg-accent-dark">
                                Démarrer
                            </a>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="relative px-20 lg:flex hidden">
                    <span class="absolute end-10 bottom-28 text-3xl -rotate-45">😃</span>
                    <span class="absolute bottom-10 end-20 h-3 w-3 inline-flex items-center justify-center bg-primary text-white rounded-full"></span>
                    <span class="absolute top-1/4 end-10 h-2.5 w-2.5 inline-flex items-center justify-center bg-yellow-400 text-white rounded-full"></span>
                    <span class="absolute end-1/4 top-12 text-xl -rotate-45">🔥‹</span>
                    <span class="absolute start-10 top-12 h-2 w-2 inline-flex items-center justify-center bg-primary text-white rounded-full"></span>
                    <img src="{{url('landing/img/mockup/app.png')}}" class="">
                </div>
            </div>
        </div>
    </div>
</section>