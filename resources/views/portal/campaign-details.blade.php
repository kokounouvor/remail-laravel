@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto space-y-5">
    <div class="sm:flex justify-between items-center">
        <div>
            <ol class="flex items-center whitespace-nowrap">
                <li class="inline-flex items-center">
                    <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" href="{{Route('campaigns')}}">
                        Mes campagnes
                    </a>
                    <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </li>
                <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-neutral-200" aria-current="page">
                    Détails
                </li>
            </ol>
            <div class="flex items-center gap-x-2 mt-3">
                <a href="/campaigns" class="text-blue-600 hover:underline">
                    <svg class="size-7" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.0003 12.0001V14.6701C18.0003 17.9801 15.6503 19.3401 12.7803 17.6801L10.4703 16.3401L8.16031 15.0001C5.29031 13.3401 5.29031 10.6301 8.16031 8.97005L10.4703 7.63005L12.7803 6.29005C15.6503 4.66005 18.0003 6.01005 18.0003 9.33005V12.0001Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-neutral-200">Campagne Détail</h2>
            </div>
        </div>

        <div>
            <!-- Modal Button -->
            <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-white text-gray-800 hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-modal-example" data-hs-overlay="#hs-modal-example">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.9902 17.5H16.5002C19.5202 17.5 22.0002 15.03 22.0002 12C22.0002 8.98 19.5302 6.5 16.5002 6.5H14.9902" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M2.37 10.01C2.13 10.63 2 11.3 2 12C2 15.02 4.47 17.5 7.5 17.5H9" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M8.99969 6.5H7.49969C6.66969 6.5 5.88969 6.68 5.17969 7.01" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M8 12H16" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
            <!-- End Modal Button -->

            <!-- Modal Content -->
            <div id="hs-modal-example" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-modal-example-label">
                <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                    <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                        <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                            <h3 id="hs-modal-example-label" class="font-bold text-gray-800 dark:text-white">
                                Lien d'accès visiteur
                            </h3>
                            <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600" aria-label="Close" data-hs-overlay="#hs-modal-example">
                                <span class="sr-only">Close</span>
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 6 6 18"></path>
                                    <path d="m6 6 12 12"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="p-4 overflow-y-auto">
                            <div class="w-full inline-flex gap-x-2">
                                <input id="hs-clipboard-modal" type="text" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm placeholder:text-gray-400 focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder:text-neutral-500 dark:focus:ring-neutral-600" value="{{Route('visitor.campaign-details',$camps->uuid)}}">
                            </div>
                        </div>
                        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                            <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-modal-example">
                                Fermer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal Content -->


        </div>
    </div>

    <div class="bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">

        <div class="p-4 md:p-5">
            <div class="grid grid-cols-2 gap-5">
                <div class="rounded-xl bg-gray-200 p-1">
                    <!-- List Group -->
                    <ul class="mt-1 flex flex-col mb-1">
                        <li class="inline-flex items-center gap-x-2 py-2 px-4 border text-gray-800 text-sm bg-white -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:border-neutral-700 dark:text-neutral-200">
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
                        <li class="inline-flex items-center gap-x-2 py-2 px-4 font-semibold bg-white text-sm border text-gray-800 -mt-px first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-200">
                            <div class=" w-full">
                                <span>Objet : </span>
                                <span> {{$camps->subject}}</span>
                            </div>
                        </li>
                    </ul>
                    <!-- End List Group -->
                    <iframe data-src="/storage/{{$camps->contents}}" class="template-iframe rounded-xl" frameborder="0" width="100%" height="350px" scrolling="yes"></iframe>
                </div>
                <div>
                    <!-- Card Section -->
                    <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto space-y-5">
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
                        <button type="button" class="hs-collapse-toggle w-full py-3 px-4 inline-flex items-center justify-between gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" id="hs-basic-collapse" aria-expanded="false" aria-controls="hs-basic-collapse-heading" data-hs-collapse="#hs-basic-collapse-heading">
                            Voir les clics sur les liens
                            <svg class="hs-collapse-open:rotate-180 shrink-0 size-4 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        <div id="hs-basic-collapse-heading" class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-collapse">
                            <div class="">

                                <!-- List Group -->
                                <ul class="flex flex-col justify-end text-start -space-y-px">
                                    @foreach($mail_clicks_links as $lk)
                                    <li class="flex items-center gap-x-2 p-3 text-sm bg-white border text-gray-800 first:rounded-t-lg first:mt-0 last:rounded-b-lg dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200">
                                        <div class="w-full flex justify-between truncate">
                                            <span class="me-3 flex-1 w-0 truncate">
                                                {{$lk->url}}
                                            </span>
                                            <button type="button" class="bg-red-600 rounded-full py-1 px-1 text-white hover:text-blue-600 focus:outline-none focus:text-blue-600 whitespace-nowrap dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500">
                                                {{ App\Models\Campaign_link_click::where([["campaign_id",$camps->id], ["url",$lk->url]])->count() }}
                                            </button>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                                <!-- End List Group -->
                            </div>
                        </div>
                    </div>
                    <!-- End Card Section -->
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-xl p-4">
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

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Fonction pour charger l'iframe lorsque celle-ci devient visible dans la fenêtre de visualisation
        function loadIframeLazy() {
            const iframes = document.querySelectorAll('.template-iframe');
            const options = {
                root: null, // Observer l'ensemble du viewport
                rootMargin: '0px',
                threshold: 0.25 // Charge l'iframe lorsque 25% est visible
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const iframe = entry.target;
                        const src = iframe.getAttribute('data-src'); // On récupère l'URL à charger dans l'iframe

                        if (src) {
                            iframe.src = src; // On charge l'URL dans l'iframe
                            iframe.removeAttribute('data-src'); // Retirer l'attribut data-src après avoir chargé l'URL
                        }
                        observer.unobserve(iframe); // Cesse d'observer cette iframe une fois chargée
                    }
                });
            }, options);

            iframes.forEach(iframe => {
                observer.observe(iframe);
            });
        }

        // Appeler la fonction de lazy loading
        loadIframeLazy();
    });
</script>
@endsection