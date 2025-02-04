@extends('layouts.app')

@section('content')
<div>
    @if($templ->isEmpty())
    <div class="max-w-2xl mx-auto py-10 flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <div class="flex flex-auto flex-col justify-center items-center p-4 md:p-5">
            <img src="/assets/svg/template.svg" class="h-56" alt="">

            <p class="mt-2 text-sm text-gray-800 dark:text-neutral-300">
                Aucune template Email disponible
            </p>
            <a href="{{Route('portal.template.publisher')}}" class="mt-5 py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-300 bg-gray-200 text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                Ajouter un template
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </div>
    @else
    <div class="max-w-5xl mx-auto">
        <!-- Grid -->
        <div class="mb-5 pb-5 flex justify-between items-center">
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-neutral-200">Email Templates</h2>
            </div>
            <!-- Col -->

            <div class="inline-flex gap-x-2">
                <a href="{{Route('portal.template.publisher')}}" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-gray-50 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" href="#">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus lucide-icon customizable" data-v-14c8c335="">
                        <path d="M5 12h14"></path>
                        <path d="M12 5v14"></path>
                    </svg>

                    Nouveau template
                </a>
            </div>
            <!-- Col -->
        </div>
        <!-- End Grid -->

        <div class="grid md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-4 mb-4 mt-5">
            @foreach($templ as $dat)
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div class="bg-white border-b rounded-t-xl py-2 px-4 md:py-4 md:px-5 dark:bg-neutral-900 dark:border-neutral-700">
                    <div class="flex items-center justify-between">
                        <p class="mt-1 text-sm text-gray-600 dark:text-neutral-500">
                            {{$dat->name}}
                        </p>
                        <div class="flex gap-x-2">
                            <a href="{{Route('portal.template.editor', $dat->id)}}" class="size-7 flex items-center justify-center gap-x-2 text-xs font-medium rounded-full border border-transparent bg-gray-200 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
                                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil lucide-icon customizable">
                                    <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                                    <path d="m15 5 4 4"></path>
                                </svg>
                            </a>
                            <button type="button" data-hs-overlay="#hs-modal-email-template-delete-{{$dat->id}}" class="size-7 flex items-center justify-center gap-x-2 text-xs font-medium rounded-full border border-transparent bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:bg-red-600 disabled:opacity-50 disabled:pointer-events-none">
                                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash-2 lucide-icon customizable">
                                    <path d="M3 6h18"></path>
                                    <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                    <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                    <line x1="10" x2="10" y1="11" y2="17"></line>
                                    <line x1="14" x2="14" y1="11" y2="17"></line>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="p-1">
                    <iframe data-src="/storage/{{$dat->content}}" class="template-iframe rounded-xl" frameborder="0" width="100%" height="300px" scrolling="yes" loading="lazy"></iframe>
                </div>
            </div>


            <!-- Supprimer le Template -->
            <div id="hs-modal-email-template-delete-{{$dat->id}}" class="hs-overlay hs-overlay-backdrop-open:bg-blue-950/90 hidden size-full fixed top-0 start-0 z-[81] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-modal-email-template-new-label">
                <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-sm sm:w-full m-3 h-[calc(100%-3.5rem)] sm:mx-auto">
                    <div class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                        <div class="flex justify-end items-center py-3 px-4">
                            <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600" aria-label="Close" data-hs-overlay="#hs-modal-email-template-delete-{{$dat->id}}">
                                <span class="sr-only">Close</span>
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 6 6 18"></path>
                                    <path d="m6 6 12 12"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="p-4 sm:p-10 text-center overflow-y-auto">
                            <!-- Icon -->
                            <span class="mb-4 inline-flex justify-center items-center size-[62px] rounded-full border-4 border-red-50 bg-red-100 text-red-500 dark:bg-red-700 dark:border-blue-600 dark:text-blue-100">
                                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg>
                            </span>
                            <!-- End Icon -->

                            <h3 id="hs-sign-out-alert-small-window-label" class="mb-2 text-2xl font-bold text-red-500 dark:text-neutral-200">
                                Suppression
                            </h3>
                            <p class="text-gray-500 font-light dark:text-neutral-500 mb-7">
                                En supprimant ce template, toutes les informations afférentes seront définitvement supprimé
                            </p>

                            <form action="{{Route('portal.template.remove')}}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$dat->id}}">
                                <button type="submit" class="py-2 px-5 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:bg-red-600 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#hs-sign-out-alert-small-window">
                                    Supprimer
                                </button>
                                <button type="button" class="py-2 px-5 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full text-center border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" data-hs-overlay="#hs-modal-email-template-delete-{{$dat->id}}">
                                    Quitter
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="inline-flex items-center justify-center">
                {{$templ->links()}}
            </div>
        </div>
    </div>
    @endif
</div>
@endsection

@section('script')
<script>
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
</script>
@endsection