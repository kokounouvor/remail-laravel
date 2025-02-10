@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/assets/vendor/ckeditor5/ckeditor5.css">
<script src="/assets/vendor/ckeditor5/ckeditor5.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.44.0/min/vs/loader.min.js"></script>



<div id="editora" class="w-full h-96"></div>

<textarea name="" id="topo"></textarea>
<script>
    require.config({ paths: { vs: "https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.44.0/min/vs" }});
    require(["vs/editor/editor.main"], function () {
        var editor = monaco.editor.create(document.getElementById("editora"), {
            value: "<!-- Commencez à écrire votre code HTML ici -->",
            language: "html",
            theme: "vs-light"
        });

        // Mettre à jour le contenu du textarea en temps réel
        editor.onDidChangeModelContent(function () {
            document.getElementById("topo").value = editor.getValue();
        });
    });
</script>


<div>
    @if($templ->isEmpty())
    <div class="max-w-2xl mx-auto py-10 flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <div class="flex flex-auto flex-col justify-center items-center p-4 md:p-5">
            <img src="/assets/svg/template.svg" class="h-56" alt="">

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
        <div class="mb-5 pb-5 flex justify-between items-center">
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-neutral-200">Email Templates</h2>
            </div>
            <!-- Col -->

            <div class="inline-flex gap-x-2">
                <button type="button" data-hs-overlay="#hs-modal-email-template-new" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-gray-50 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" href="#">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus lucide-icon customizable" data-v-14c8c335="">
                        <path d="M5 12h14"></path>
                        <path d="M12 5v14"></path>
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
                <div class="bg-white border-b rounded-t-xl py-2 px-4 md:py-4 md:px-5 dark:bg-neutral-900 dark:border-neutral-700">
                    <div class="flex items-center justify-between">
                        <p class="mt-1 text-sm text-gray-600 dark:text-neutral-500">
                            {{$dat->name}}
                        </p>
                        <div class="flex gap-x-2">
                            <a href="{{Route('template-editor', $dat->id)}}" class="size-7 flex items-center justify-center gap-x-2 text-xs font-medium rounded-full border border-transparent bg-gray-200 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
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

            <!-- Modifier le Template -->
            <div id="hs-modal-email-template-update-{{$dat->id}}" class="hs-overlay hs-overlay-backdrop-open:bg-blue-950/90 hidden size-full fixed top-0 start-0 z-[81] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-modal-email-template-new-label">
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
                            <form id="temp_form_data_up_{{$dat->id}}" action="{{Route('template-edit')}}" method="post">
                                @csrf
                                <div class="mb-2">
                                    <label for="name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Nom du template</label>
                                    <input class="hidden" type="text" name="id" value="{{$dat->id}}">
                                    <input type="text" id="name" name="name" value="{{$dat->name}}" class="py-2 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-600 focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="">
                                </div>
                                <div class="mb-2">
                                    <label for="content" class="font-medium text-sm text-slate-600 dark:text-slate-400">Contenu</label>
                                    <div class="relative">
                                        <textarea id="content-{{$dat->id}}" name="content" cols="10" rows="15" class="p-4 block w-full border-gray-200 bg-gray-800 text-white rounded-lg text-sm focus:border-blue-600 focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Entrer ou copier le code du Template Email ici"> {!! Storage::disk('public')->get($dat->content) !!}</textarea>
                                    </div>
                                </div>

                                <div class="mt-5 flex justify-end items-center gap-x-2 py-3 px-4">
                                    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-modal-email-template-new">
                                        Quitter
                                    </button>
                                    <button type="button" data-hs-overlay="#hs-bg-preview" onclick="showPreview(document.getElementById('content-{{$dat->id}}').value);" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-gray-100 text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" data-hs-overlay="#hs-notifications">
                                        Voir le rendu
                                    </button>
                                    <button type="submit" id="btn_update_{{$dat->id}}" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-blue-600 text-white hover:bg-blue-600 focus:outline-none focus:bg-blue-600 disabled:opacity-50 disabled:pointer-events-none">
                                        Enregistré
                                    </button>
                                </div>
                            </form>

                            <script>
                                $(document).ready(function(e) {
                                    $("#temp_form_data_up_{{$dat->id}}").on("submit", (function(e) {

                                        // Modification du boutton
                                        $("#btn_update_{{$dat->id}}").attr("disabled", true);
                                        $("#btn_update_{{$dat->id}}").html("Enregistrement <svg class='size-4 animate-spin' xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='lucide lucide-loader lucide-icon customizable' data-v-14c8c335=''><path d='M12 2v4'></path><path d='m16.2 7.8 2.9-2.9'></path><path d='M18 12h4'></path><path d='m16.2 16.2 2.9 2.9'></path><path d='M12 18v4'></path><path d='m4.9 19.1 2.9-2.9'></path><path d='M2 12h4'></path><path d='m4.9 4.9 2.9 2.9'></path></svg>");

                                        e.preventDefault();
                                        $.ajax({
                                            url: "{{Route('template-edit')}}",
                                            type: "POST",
                                            data: new FormData(this),
                                            contentType: false,
                                            cache: false,
                                            processData: false,
                                            success: function(data) {
                                                if (data.status == "ok") {
                                                    $("#btn_update_{{$dat->id}}").html("Modification enregistré !");
                                                    setTimeout(() => {
                                                        $("#btn_update_{{$dat->id}}").html("Enregistré");
                                                    }, 2000);
                                                } else {
                                                    $("#btn_update_{{$dat->id}}").html("Enregistré");
                                                    alert("Le status de l'enregistrement est inconnus")
                                                }
                                                $("#btn_update_{{$dat->id}}").attr("disabled", false);
                                            },

                                            error: function(xhr) {
                                                $("#btn_update_{{$dat->id}}").attr("disabled", false);
                                                $("#btn_update_{{$dat->id}}").html("Enregistré");
                                                alert("Un problème inattendue est survenue");
                                            },
                                        });
                                    }));
                                });
                            </script>
                        </div>
                    </div>
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

                            <form action="{{Route('template-delete')}}" method="post">
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
        </div>
    </div>
    @endif
</div>

<!-- Add new Email Template Modal -->
<div id="hs-modal-email-template-new" class="hs-overlay hs-overlay-backdrop-open:bg-blue-950/90 hidden size-full fixed top-0 start-0 z-[81] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-modal-email-template-new-label">
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
                <form id="temp_add_form" action="{{Route('template-add')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Nom du template</label>
                        <input type="text" id="name" name="name" class="py-2 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-600 focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="">
                    </div>

                    <div class="mb-3">
                        <label for="content" class="font-medium text-sm text-slate-600 dark:text-slate-400">Contenu</label>
                        <div class="relative">
                            <textarea id="content" name="content" cols="10" rows="15" class="p-4 block w-full border-gray-200 bg-gray-800 text-white font-normal rounded-lg text-sm focus:border-blue-600 focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Entrer ou copier le code du Template Email ici"></textarea>
                        </div>
                    </div>
                    <div class="mt-3 flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                        <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-modal-email-template-new">
                            Quitter
                        </button>
                        <button type="button" data-hs-overlay="#hs-bg-preview" onclick="showPreview(document.getElementById('content').value);" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-gray-100 text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" data-hs-overlay="#hs-notifications">
                            Voir le rendu
                        </button>
                        <button type="submit" id="temp_add_btn" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-blue-600 text-white hover:bg-blue-600 focus:outline-none focus:bg-blue-600 disabled:opacity-50 disabled:pointer-events-none">
                            Enregistré
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Preview Email Template Modal -->
<div id="hs-bg-preview" class="hs-overlay hs-overlay-backdrop-open:bg-blue-950/90v hidden size-full fixed top-0 start-0 z-[81] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-bg-preview-label">
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
                    <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600" aria-label="Close" data-hs-overlay="#hs-modal-email-template-new">
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
@endsection

@section('script')
<script type="importmap">
    {
                "imports": {
                    "ckeditor5": "/assets/vendor/ckeditor5/ckeditor5.js",
                    "ckeditor5/": "/assets/vendor/ckeditor5/"
                }
            }
        </script>

<script type="module">
    import {
        ClassicEditor,
        Essentials,
        Paragraph,
        Bold,
        Italic,
        Font,
        Code,
        CodeBlock,
        Link,
        BlockQuote,
    } from 'ckeditor5';

    ClassicEditor
        .create(document.querySelector('#content'), {
            licenseKey: 'GPL', // Or 'GPL'.
            plugins: [Essentials, Paragraph, Bold, Italic, Font, Link, BlockQuote, Code, CodeBlock],
            toolbar: {
                items: [
                    'undo', 'redo',
                    '|',
                    'heading',
                    '|',
                    'fontfamily', 'fontsize', 'fontColor', 'fontBackgroundColor',
                    '|',
                    'bold', 'italic', 'strikethrough', 'subscript', 'superscript', 'code',
                    '|',
                    'link', 'uploadImage', 'blockQuote', 'codeBlock',
                    '|',
                    'bulletedList', 'numberedList', 'todoList', 'outdent', 'indent'
                ],
                codeBlock: {
                    languages: [{
                            language: 'plaintext',
                            label: 'Plain Text'
                        },
                        {
                            language: 'javascript',
                            label: 'JavaScript'
                        },
                        {
                            language: 'html',
                            label: 'HTML'
                        },
                        {
                            language: 'css',
                            label: 'CSS'
                        },
                        {
                            language: 'php',
                            label: 'PHP'
                        }
                    ]
                },
                shouldNotGroupWhenFull: true
            },
            placeholder: 'Écrivez votre texte ici...'
        })
        .then(editor => {
            window.editor = editor;
            $("#john").val(editor.getData())
        })
        .catch(error => {
            console.error(error);
        });

    $(document).ready(function(e) {
        $("#temp_add_forms").on("submit", (function(e) {

            // Modification du boutton
            $("#temp_add_btn").attr("disabled", true);
            $("#temp_add_btn").html("Enregistrement <svg class='size-4 animate-spin' xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='lucide lucide-loader lucide-icon customizable' data-v-14c8c335=''><path d='M12 2v4'></path><path d='m16.2 7.8 2.9-2.9'></path><path d='M18 12h4'></path><path d='m16.2 16.2 2.9 2.9'></path><path d='M12 18v4'></path><path d='m4.9 19.1 2.9-2.9'></path><path d='M2 12h4'></path><path d='m4.9 4.9 2.9 2.9'></path></svg>");

            e.preventDefault();
            $.ajax({
                url: "{{Route('template-add')}}",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    if (data.status == "ok") {
                        $("#temp_add_btn").html("Template enregistré !");
                        setTimeout(() => {
                            window.location.replace("{{Route('templates')}}");
                        }, 1000);
                    } else {
                        $("#temp_add_btn").html("Enregistré");
                        alert("Le status de l'enregistrement est inconnus")
                    }
                    $("#temp_add_btn").attr("disabled", false);
                },

                error: function(xhr) {
                    $("#temp_add_btn").attr("disabled", false);
                    $("#temp_add_btn").html("Enregistré");
                    alert("Un problème inattendue est survenue");
                },
            });
        }));
    });

    function showPreview(content) {
        $("#smop").attr("srcdoc", content);
        $("#smo").attr("srcdoc", content);
    }

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