@extends('layouts.app')

@section('sidebar')
@include('portal.inc.sidebar')
@endsection

@section('navbar')
@include('portal.inc.navbar')
@endsection

@section('content')
<div>
    @if($templ->isEmpty())
    <div class="max-w-2xl mx-auto min-h-60 flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <div class="flex flex-auto flex-col justify-center items-center p-4 md:p-5">
            <svg class="size-20 text-gray-500 dark:text-neutral-500" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 20.5H7C4 20.5 2 19 2 15.5V8.5C2 5 4 3.5 7 3.5H17C20 3.5 22 5 22 8.5V11.5" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                <path opacity="0.4" d="M17 9L13.87 11.5C12.84 12.32 11.15 12.32 10.12 11.5L7 9" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                <g opacity="0.4">
                    <path d="M19.2091 14.7683L15.6691 18.3083C15.5291 18.4483 15.3991 18.7083 15.3691 18.8983L15.1791 20.2483C15.1091 20.7383 15.4491 21.0783 15.9391 21.0083L17.2891 20.8183C17.4791 20.7883 17.7491 20.6583 17.8791 20.5183L21.4191 16.9783C22.0291 16.3683 22.3191 15.6583 21.4191 14.7583C20.5291 13.8683 19.8191 14.1583 19.2091 14.7683Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M18.6992 15.2773C18.9992 16.3573 19.8392 17.1973 20.9192 17.4973" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                </g>
            </svg>

            <p class="mt-2 text-sm text-gray-800 dark:text-neutral-300">
                Aucune template Email disponible
            </p>
            <button data-hs-overlay="#hs-modal-email-template-new" type="button" class="mt-5 py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-300 bg-gray-200 text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                Ajouter un template
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </div>
    @else
    <div class="max-w-5xl mx-auto">
        <!-- Grid -->
        <div class="mb-5 pb-5 flex justify-between items-center border-b border-gray-200 dark:border-neutral-700">
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-neutral-200">Email Template</h2>
            </div>
            <!-- Col -->

            <div class="inline-flex gap-x-2">
                <button type="button" data-hs-overlay="#hs-modal-email-template-new" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-gray-700 text-white hover:bg-gray-800 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="#">
                    <svg class="shrink-0 size-5" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 8C22 4 20 2 16 2H8C4 2 2 4 2 8V21C2 21.55 2.45 22 3 22H16C20 22 22 20 22 16V12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15.5088 11.7404L16.1588 11.0904C16.1988 11.0504 16.2388 11.0104 16.2788 10.9604C17.0888 10.1004 17.4088 9.09036 16.1588 7.84036C14.8388 6.52036 13.7988 6.95036 12.9088 7.84036L7.71881 13.0304C7.51881 13.2304 7.32882 13.6204 7.28882 13.9004L7.00882 15.8804C6.90882 16.6004 7.40882 17.1004 8.12882 17.0004L10.1088 16.7204C10.3888 16.6804 10.7788 16.4904 10.9788 16.2904L12.9188 14.3504" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12.168 8.58203C12.608 10.152 13.838 11.392 15.418 11.832" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                    Nouveau template
                </button>
            </div>
            <!-- Col -->
        </div>
        <!-- End Grid -->

        <div class="grid md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-4 mb-4 mt-5">
            @foreach($templ as $dat)
            <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div class="bg-gray-100 border-b rounded-t-xl py-3 px-4 md:py-4 md:px-5 dark:bg-neutral-900 dark:border-neutral-700">
                    <div class="flex items-center justify-between">
                        <p class="mt-1 text-sm text-gray-500 dark:text-neutral-500">
                            {{$dat->name}}
                        </p>
                        <div class="flex gap-x-2">
                            <button type="button" data-hs-overlay="#hs-modal-email-template-update-{{$dat->id}}" class="py-2 px-2 inline-flex items-center gap-x-2 text-xs font-medium rounded-full border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                Modifier
                            </button>
                            <button type="button" data-hs-overlay="#hs-modal-email-template-delete-{{$dat->id}}" class="py-2 px-2 inline-flex items-center gap-x-2 text-xs font-medium rounded-full border border-transparent bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:bg-blue-600 disabled:opacity-50 disabled:pointer-events-none">
                                Supprimer
                            </button>
                        </div>
                    </div>
                </div>
                <div class="p-1">
                    <iframe srcdoc="{{$dat->content}}" class="rounded-xl" frameborder="0" width="100%" height="350px" scrolling="yes"></iframe>
                </div>
            </div>

            <!-- Modifier le Template -->
            <div id="hs-modal-email-template-update-{{$dat->id}}" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-modal-email-template-new-label">
                <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-xl sm:w-full m-3 h-[calc(100%-3.5rem)] sm:mx-auto">
                    <div class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                        <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                            <h3 id="hs-modal-email-template-new-label" class="font-bold text-gray-800 dark:text-white">
                                Modifier le Template Email
                            </h3>
                            <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600" aria-label="Close" data-hs-overlay="#hs-modal-email-template-update-{{$dat->id}}">
                                <span class="sr-only">Close</span>
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 6 6 18"></path>
                                    <path d="m6 6 12 12"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="p-4 overflow-y-auto">
                            <form action="{{Route('template-edit')}}" method="post">
                                @csrf
                                <div class="mb-5">
                                    <label for="name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Nom du template</label>
                                    <input type="text" id="name" name="name" value="{{$dat->name}}" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-600 focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="">
                                </div>
                                <div class="mb-5">
                                    <label for="content" class="font-medium text-sm text-slate-600 dark:text-slate-400">Contenu</label>
                                    <div class="relative">
                                        <textarea id="content-{{$dat->id}}" name="content" cols="10" rows="15" class="p-4 block w-full border-gray-200 bg-gray-800 text-white rounded-lg text-sm focus:border-blue-600 focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Entrer ou copier le code du Template Email ici"> value="{!!$dat->content!!}"</textarea>
                                    </div>
                                </div>
                                <div class="hidden">
                                    <button type="submit" id="up-temp-btn-{{$dat->id}}" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-600 focus:outline-none focus:bg-blue-600 disabled:opacity-50 disabled:pointer-events-none">
                                        Enregistré
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                            <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-modal-email-template-new">
                                Quitter
                            </button>
                            <button type="button" data-hs-overlay="#hs-bg-preview" onclick="showPreview(document.getElementById('content-{{$dat->id}}').value);" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-gray-100 text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" data-hs-overlay="#hs-notifications">
                                Voir le rendu
                            </button>
                            <button type="button" onclick="$('#up-temp-btn-{{$dat->id}}').click();" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-blue-600 text-white hover:bg-blue-600 focus:outline-none focus:bg-blue-600 disabled:opacity-50 disabled:pointer-events-none">
                                Enregistré
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Supprimer le Template -->
            <div id="hs-modal-email-template-delete-{{$dat->id}}" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-modal-email-template-new-label">
                <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-xl sm:w-full m-3 h-[calc(100%-3.5rem)] sm:mx-auto">
                    <div class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                        <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                            <h3 id="hs-modal-email-template-new-label" class="font-bold text-gray-800 dark:text-white">
                                Supprimer le Template Email
                            </h3>
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
                            <span class="mb-4 inline-flex justify-center items-center size-[62px] rounded-full border-4 border-blue-50 bg-blue-100 text-blue-600 dark:bg-blue-700 dark:border-blue-600 dark:text-blue-100">
                                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg>
                            </span>
                            <!-- End Icon -->

                            <h3 id="hs-sign-out-alert-small-window-label" class="mb-2 text-2xl font-bold text-gray-800 dark:text-neutral-200">
                                Suppression
                            </h3>
                            <p class="text-gray-500 font-light dark:text-neutral-500 mb-7">
                                En supprimant ce template, toutes les informations afférentes seront définitvement supprimé
                            </p>

                            <form action="{{Route('template-delete')}}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$dat->id}}">
                                <button type="submit" class="py-2.5 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-blue-600 text-white hover:bg-blue-600 focus:outline-none focus:bg-blue-600 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#hs-sign-out-alert-small-window">
                                    Supprimer
                                </button>
                                <button type="button" class="py-2 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full text-center border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" data-hs-overlay="#hs-modal-email-template-delete-{{$dat->id}}">
                                    Quitter
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    @endif
</div>

<!-- Add new Email Template Modal -->
<div id="hs-modal-email-template-new" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-modal-email-template-new-label">
    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-xl sm:w-full m-3 h-[calc(100%-3.5rem)] sm:mx-auto">
        <div class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                <h3 id="hs-modal-email-template-new-label" class="font-bold text-gray-800 dark:text-white">
                    Nouveau Template Email
                </h3>
                <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600" aria-label="Close" data-hs-overlay="#hs-modal-email-template-new">
                    <span class="sr-only">Close</span>
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="p-4 overflow-y-auto">
                <form action="{{Route('template-add')}}" method="post">
                    @csrf
                    <div class="mb-5">
                        <label for="name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Nom du template</label>
                        <input type="text" id="name" name="name" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-600 focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="">
                    </div>
                    <div class="mb-5">
                        <label for="content" class="font-medium text-sm text-slate-600 dark:text-slate-400">Contenu</label>
                        <div class="relative">
                            <textarea id="content" name="content" cols="10" rows="15" class="p-4 block w-full border-gray-200 bg-gray-800 text-white font-normal rounded-lg text-sm focus:border-blue-600 focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Entrer ou copier le code du Template Email ici"></textarea>
                        </div>
                    </div>
                    <div class="hidden">
                        <button type="submit" id="nw-temp-btn" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-600 focus:outline-none focus:bg-blue-600 disabled:opacity-50 disabled:pointer-events-none">
                            Enregistré
                        </button>
                    </div>
                </form>
            </div>
            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-modal-email-template-new">
                    Quitter
                </button>
                <button type="button" data-hs-overlay="#hs-bg-preview" onclick="showPreview(document.getElementById('content').value);" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-gray-100 text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" data-hs-overlay="#hs-notifications">
                    Voir le rendu
                </button>
                <button type="button" onclick="$('#nw-temp-btn').click();" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-blue-600 text-white hover:bg-blue-600 focus:outline-none focus:bg-blue-600 disabled:opacity-50 disabled:pointer-events-none">
                    Enregistré
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Preview Email Template Modal -->
<div id="hs-bg-preview" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-bg-preview-label">
    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-4xl sm:w-full m-3 h-[calc(100%-3.5rem)] sm:mx-auto">
        <div class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-neutral-700/70">
            <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-800">
                <h3 id="hs-bg-preview-label" class="font-extrabold text-gray-800 dark:text-neutral-200">
                    Prévisualisation
                </h3>
                <div class="flex gap-x-2 items-center">
                    <div class="flex items-end justify-end bg-gray-100 hover:bg-gray-200 rounded-lg transition p-1 dark:bg-neutral-700 dark:hover:bg-neutral-600">
                        <nav class="flex items-end  justify-end gap-x-1" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                            <button type="button" class="hs-tab-active:bg-white hs-tab-active:text-gray-700 hs-tab-active:dark:bg-neutral-800 hs-tab-active:dark:text-neutral-400 dark:hs-tab-active:bg-gray-800 py-2 px-3 inline-flex items-center gap-x-2 bg-transparent text-sm text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 font-medium rounded-lg hover:hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-white dark:focus:text-white active" id="segment-item-1" aria-selected="true" data-hs-tab="#segment-1" aria-controls="segment-1" role="tab">
                                <svg class="size-4" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.44 2H17.55C21.11 2 22 2.89 22 6.44V12.77C22 16.33 21.11 17.21 17.56 17.21H6.44C2.89 17.22 2 16.33 2 12.78V6.44C2 2.89 2.89 2 6.44 2Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path opacity="0.4" d="M12 17.2188V21.9988" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path opacity="0.4" d="M2 13H22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.5 22H16.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <button type="button" class="hs-tab-active:bg-white hs-tab-active:text-gray-700 hs-tab-active:dark:bg-neutral-800 hs-tab-active:dark:text-neutral-400 dark:hs-tab-active:bg-gray-800 py-2 px-3 inline-flex items-center gap-x-2 bg-transparent text-sm text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 font-medium rounded-lg hover:hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-white dark:focus:text-white" id="segment-item-2" aria-selected="false" data-hs-tab="#segment-2" aria-controls="segment-2" role="tab">
                                <svg class="size-4" width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 6V16C17 20 16 21 12 21H6C2 21 1 20 1 16V6C1 2 2 1 6 1H12C16 1 17 2 17 6Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path opacity="0.4" d="M11 4.5H7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path opacity="0.4" d="M8.99922 18.1C9.85526 18.1 10.5492 17.406 10.5492 16.55C10.5492 15.694 9.85526 15 8.99922 15C8.14318 15 7.44922 15.694 7.44922 16.55C7.44922 17.406 8.14318 18.1 8.99922 18.1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </nav>
                    </div>
                    <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600" aria-label="Close" data-hs-overlay="#hs-bg-preview">
                        <span class="sr-only">Close</span>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="p-4 overflow-y-auto">
                <!-- Device preview -->
                <div>
                    <div class="mt-3">
                        <div id="segment-1" role="tabpanel" aria-labelledby="segment-item-1">
                            <figure class="relative z-[1] max-w-full mx-auto w-[50rem] h-auto shadow-[0_2.75rem_3.5rem_-2rem_rgb(45_55_75_/_20%),_0_0_5rem_-2rem_rgb(45_55_75_/_15%)] dark:shadow-[0_2.75rem_3.5rem_-2rem_rgb(0_0_0_/_20%),_0_0_5rem_-2rem_rgb(0_0_0_/_15%)] rounded-b-lg">
                                <div class="relative flex items-center max-w-[50rem] bg-gray-800 rounded-t-lg py-2 px-24 dark:bg-neutral-700">
                                    <div class="flex gap-x-1 absolute top-2/4 start-4 -translate-y-1">
                                        <span class="size-2 bg-gray-600 rounded-full dark:bg-neutral-600"></span>
                                        <span class="size-2 bg-gray-600 rounded-full dark:bg-neutral-600"></span>
                                        <span class="size-2 bg-gray-600 rounded-full dark:bg-neutral-600"></span>
                                    </div>
                                    <div class="flex justify-center items-center size-full bg-gray-700 text-[.25rem] text-gray-400 rounded-sm sm:text-[.5rem] dark:bg-neutral-600 dark:text-neutral-400">www.remail.io</div>
                                </div>

                                <div class="bg-gray-800 rounded-b-lg">
                                    <iframe srcdoc="" class="w-full rounded-[1.25rem]  h-screen" id="smo"></iframe>
                                </div>
                            </figure>
                        </div>
                        <div id="segment-2" class="hidden" role="tabpanel" aria-labelledby="segment-item-2">
                            <figure class="mx-auto max-w-full w-80 h-auto">
                                <div class="p-1.5 bg-gray-800 shadow-[0_2.75rem_5.5rem_-3.5rem_rgb(45_55_75_/_20%),_0_2rem_4rem_-2rem_rgb(45_55_75_/_30%),_inset_0_-0.1875rem_0.3125rem_0_rgb(45_55_75_/_20%)] dark:bg-neutral-600 dark:shadow-[0_2.75rem_5.5rem_-3.5rem_rgb(0_0_0_/_20%),_0_2rem_4rem_-2rem_rgb(0_0_0_/_30%),_inset_0_-0.1875rem_0.3125rem_0_rgb(0_0_0_/_20%)] rounded-3xl">
                                    <iframe srcdoc="" class="w-full rounded-[1.25rem] h-screen" id="smop"></iframe>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
                <!-- End Device preview -->
            </div>
        </div>
    </div>
</div>

<script>
    function showPreview(content) {
        $("#smop").attr("srcdoc", content);
        $("#smo").attr("srcdoc", content);
    }
</script>
@endsection