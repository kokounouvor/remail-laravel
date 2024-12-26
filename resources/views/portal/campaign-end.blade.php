@extends('layouts.app')

@section('sidebar')
@include('portal.inc.sidebar')
@endsection

@section('navbar')
@include('portal.inc.navbar')
@endsection

@section('content')
@include('layouts.alert')


<!-- Css -->
<!-- quill css -->
<link href="/assets/libs/quill/quill.core.css" rel="stylesheet" type="text/css">
<link href="/assets/libs/quill/quill.bubble.css" rel="stylesheet" type="text/css">
<link href="/assets/libs/quill/quill.snow.css" rel="stylesheet" type="text/css">

<script src="/assets/js/jquery.min.js"></script>

<div class="max-w-5xl mx-auto space-y-5">
    <div>
        <ol class="flex items-center whitespace-nowrap">
            <li class="inline-flex items-center">
                <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" href="#">
                    Accueil
                </a>
                <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </li>
            <li class="inline-flex items-center">
                <a href="{{Route('campaigns')}}" class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500">
                    Mes Campagnes
                    <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </a>
            </li>
            <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-neutral-200" aria-current="page">
                Finaliser
            </li>
        </ol>
        <div class="flex items-center gap-x-2 mt-3">
            <a href="/campaigns" class="text-blue-600 hover:underline">
                <svg class="size-7" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.0003 12.0001V14.6701C18.0003 17.9801 15.6503 19.3401 12.7803 17.6801L10.4703 16.3401L8.16031 15.0001C5.29031 13.3401 5.29031 10.6301 8.16031 8.97005L10.4703 7.63005L12.7803 6.29005C15.6503 4.66005 18.0003 6.01005 18.0003 9.33005V12.0001Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
            <h2 class="text-2xl font-semibold text-gray-800 dark:text-neutral-200">Finaliser l'envoi</h2>
        </div>
    </div>
    <div class="grid sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 gap-4">
        <!--Test Email Envoi -->
        <div class="sm:col-span-12 md:col-span-6 lg:col-span-8 bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <div class="bg-gray-100 border-b rounded-t-xl py-3 px-4 md:py-4 md:px-5 dark:bg-neutral-900 dark:border-neutral-700">
                <p class="mt-1 text-md font-bold text-gray-500 dark:text-neutral-500">
                    Rendu du Email
                </p>
            </div>
            <div class="p-4 md:p-5">
                <!-- List Group -->
                <ul class="mt-3 flex flex-col">
                    <li class="inline-flex items-center gap-x-2 py-3 px-4 border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-neutral-700 dark:text-neutral-200">
                        <div class="w-full">
                            <span>De : </span>
                            <span>
                                {{$camp->from_name}}
                                <strong class="text-blue-600">
                                    <>{{$camp->from_email}}<>
                                </strong>
                            </span>
                        </div>
                    </li>
                    <li class="inline-flex items-center gap-x-2 py-3 px-4 font-semibold bg-blue-50 border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200">
                        <div class=" w-full">
                            <span>Objet : </span>
                            <span> {{$camp->subject}}</span>
                        </div>
                    </li>
                </ul>
                <!-- End List Group -->
                <div>
                    <textarea name="htmlInput" id="htmlInput" cols="30" rows="10" style="display: none;">{{$camp->contents}}</textarea>
                    <div class="border rounded-2xl p-2 mt-3 h-96 max-h-full overflow-y-auto" id="preview"></div>
                    <div id="" class="form-input w-full rounded-md mt-1 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700"></div>
                </div>
            </div>
        </div>
        <!-- End Test Email -->
        <!--Test Email Envoi -->
        <div class="sm:col-span-12 md:col-span-6 lg:col-span-4 space-y-5 bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <div class="bg-gray-100 border-b rounded-t-xl py-3 px-4 md:py-4 md:px-5 dark:bg-neutral-900 dark:border-neutral-700">
                <p class="mt-1 text-md font-bold text-gray-500 dark:text-neutral-500">
                    Email de Test
                </p>
            </div>
            <div class="p-4 md:p-5">
                <form method="POST" action="{{Route('sendmail-campaign-test')}}" id="test_email_form">
                    @csrf
                    <div class="mb-2">
                        <div class="max-w-sm">
                            <label for="input-label" class="block text-sm font-medium mb-2 dark:text-white">Email</label>
                            <input type="email" id="email" name="email" class="py-2 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="monemail@exemple.com">
                        </div>
                        <input type="hidden" name="campaign" value="{{$camp->id}}">
                    </div>
                    <button type="submit" class="w-full py-2 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        Envoyer
                    </button>
                </form>
            </div>
            <div class="bg-gray-100 mt-5 border-b py-3 px-4 md:py-4 md:px-5 dark:bg-neutral-900 dark:border-neutral-700">
                <p class="mt-1 text-md font-bold text-gray-500 dark:text-neutral-500">
                    Options d'envoi
                </p>
            </div>
            <div class="p-4 md:p-5">
                <form method="POST" action="{{Route('sendmail-campaign-sender')}}" id="campaign_sender_form">
                    @csrf
                    <input type="hidden" name="campaign" value="{{$camp->id}}">
                    <div class="space-y-3">
                        <div>
                            <label for="receivers" class="block text-sm font-medium mb-1 dark:text-white">Choisir les destinataires</label>
                            <select id="receivers" name="receivers" class="py-2 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                <option value="all">Tous les contacts ({{DB::table('subscribers')->where('user', '=', Session::get('user'))->count()}}) </option>
                                @foreach($contacts_group as $ls)
                                <option value="{{$ls->tag}}"> {{DB::table('tags')->where('id', '=', $ls->tag)->first()->name}} ({{DB::table('subscribers')->where('tag', '=', $ls->tag)->count()}}) </option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="type_send" class="block text-sm font-medium mb-1 dark:text-white">Choisir les destinataires</label>
                            <select name="type_send" id="type_send" onchange="defineCalendar();" class="py-2 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                <option value="now">Maintenant </option>
                                <option value="shedule">Planifié</option>
                            </select>
                        </div>
                        <!-- Cladendar to schedule sending-->
                        <div id="pick_t" style="display: none;">
                            <label for="Default_Datepicker" class="font-medium text-sm text-slate-600 dark:text-slate-400">Planifier l'envoi</label>
                            <div class="relative">
                                <div class="sm:flex rounded-lg" id="DateRange">
                                    <input type="date" name="start_date" class="py-2 px-3 pe-1 block w-full border-gray-200 sm:shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                    <span class="py-2 px-3 inline-flex items-center min-w-fit w-full border border-gray-200 bg-gray-50 text-sm text-gray-500 -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:w-auto sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg dark:bg-neutral-700 dark:border-neutral-700 dark:text-neutral-400">
                                        <svg class="hidden sm:block size-4 text-gray-400 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M8 3 4 7l4 4"></path>
                                            <path d="M4 7h16"></path>
                                            <path d="m16 21 4-4-4-4"></path>
                                            <path d="M20 17H4"></path>
                                        </svg>
                                        <svg class="sm:hidden mx-auto size-4 text-gray-400 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m3 16 4 4 4-4"></path>
                                            <path d="M7 20V4"></path>
                                            <path d="m21 8-4-4-4 4"></path>
                                            <path d="M17 4v16"></path>
                                        </svg>
                                    </span>
                                    <input type="time" name="start_time" class="py-2 px-3 pe-3 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                </div>
                            </div>
                        </div>
                        <!--End Cladendar to schedule sending-->
                    </div>

                    <div class="flex gap-3 mt-5">
                        <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-gray-200 text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" data-hs-overlay="#hs-notifications">
                            Quitter
                        </button>
                        <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
                            Envoyer la campagne
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Test Email -->
    </div>
</div>


<script src="/assets/libs/quill/quill.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var htmlInput = document.getElementById("htmlInput").value;
        document.getElementById("preview").innerHTML = htmlInput;
        document.getElementById("snow-editor-html").value = htmlInput;
    })

    function defineCalendar() {
        var type_send = document.getElementById("type_send").value;
        if (type_send === "shedule") {
            $("#pick_t").show();
        } else {
            $("#pick_t").hide();
        }
    }
    
    window.onload = function() {
    // Fonction qui charge l'iframe en ajoutant son src ou srcdoc
    const loadIframe = (iframe) => {
        const src = iframe.getAttribute('src');
        const srcdoc = iframe.getAttribute('srcdoc');

        // Si l'iframe a un src et n'a pas encore été chargé
        if (src && !iframe.hasAttribute('data-loaded')) {
            iframe.setAttribute('data-loaded', 'true');  // Marque comme chargé
        } else if (srcdoc && !iframe.hasAttribute('data-loaded')) {
            iframe.setAttribute('data-loaded', 'true');  // Marque comme chargé
        }
    };

    // Fonction pour vérifier la visibilité des iframes
    const onScroll = () => {
        const iframes = document.querySelectorAll('iframe');

        iframes.forEach(iframe => {
            const rect = iframe.getBoundingClientRect();
            
            // Si l'iframe est visible dans la fenêtre de l'utilisateur
            if (rect.top <= window.innerHeight && rect.bottom >= 0) {
                loadIframe(iframe);
            }
        });
    };

    // Appliquer le lazy loading pour les iframes après que la page soit complètement chargée
    const iframes = document.querySelectorAll('iframe');

    // Charger les iframes visibles dès le chargement de la page
    iframes.forEach(iframe => {
        const src = iframe.getAttribute('src');
        const srcdoc = iframe.getAttribute('srcdoc');

        // Si l'iframe a un src ou srcdoc, on commence à les charger
        if (src || srcdoc) {
            loadIframe(iframe);
        }
    });

    // Écouter l'événement de défilement pour charger les iframes visibles
    window.addEventListener('scroll', onScroll);

    // Charger immédiatement les iframes visibles après le chargement de la page
    onScroll();
};

</script>

@endsection