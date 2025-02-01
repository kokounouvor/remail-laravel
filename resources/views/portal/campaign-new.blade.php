@extends('layouts.app')

@section('content')
<style>
    .code-editor {
        position: relative;
        width: 100%;
        max-width: 800px;
        margin: 0 auto;
    }

    .textarea-sec {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 300px;
        font-family: "Courier New", Courier, monospace;
        font-size: 14px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background: transparent;
        color: transparent;
        caret-color: white;
        z-index: 1;
        resize: none;
    }

    textarea:focus {
        outline: none;
    }

    .code-output {
        width: 100%;
        height: 300px;
        white-space: pre-wrap;
        font-family: "Courier New", Courier, monospace;
        font-size: 14px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #2e3440;
        color: #d8dee9;
        overflow-x: auto;
        pointer-events: none;
    }

    .code-output .tag {
        color: #81a1c1;
    }

    .code-output .attribute {
        color: #a3be8c;
    }

    .code-output .value {
        color: #ebcb8b;
    }

    .code-output .text {
        color: #d8dee9;
    }
</style>
<!-- quill css -->
<link href="/assets/vendor/quill/quill.core.css" rel="stylesheet" type="text/css">
<link href="/assets/vendor/quill/quill.bubble.css" rel="stylesheet" type="text/css">
<link href="/assets/vendor/quill/quill.snow.css" rel="stylesheet" type="text/css">

<!-- Stepper -->
<div data-hs-stepper="" class="max-w-4xl mx-auto">
    <!-- Stepper Nav -->
    <ul class="relative flex flex-row gap-x-2">
        <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{"index": 1}'>
            <span class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle">
                <span class="size-7 flex justify-center items-center shrink-0 bg-gray-100 font-normal text-gray-800 rounded-full group-focus:bg-gray-200 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600 dark:bg-neutral-700 dark:text-white dark:group-focus:bg-gray-600 dark:hs-stepper-active:bg-blue-500 dark:hs-stepper-success:bg-blue-500 dark:hs-stepper-completed:bg-teal-500 dark:hs-stepper-completed:group-focus:bg-teal-600">
                    <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">1</span>
                    <svg class="hidden shrink-0 size-3 hs-stepper-success:block" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                </span>
                <span class="ms-2 text-sm font-normal text-gray-800 dark:text-neutral-200">
                    Entete
                </span>
            </span>
            <div class="w-full h-px flex-1 bg-gray-300 group-last:hidden hs-stepper-success:bg-blue-600 hs-stepper-completed:bg-teal-600 dark:bg-neutral-700 dark:hs-stepper-success:bg-blue-600 dark:hs-stepper-completed:bg-teal-600"></div>
        </li>

        <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{"index": 2}'>
            <span class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle">
                <span class="size-7 flex justify-center items-center shrink-0 bg-gray-100 font-normal text-gray-800 rounded-full group-focus:bg-gray-200 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600 dark:bg-neutral-700 dark:text-white dark:group-focus:bg-gray-600 dark:hs-stepper-active:bg-blue-500 dark:hs-stepper-success:bg-blue-500 dark:hs-stepper-completed:bg-teal-500 dark:hs-stepper-completed:group-focus:bg-teal-600">
                    <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">2</span>
                    <svg class="hidden shrink-0 size-3 hs-stepper-success:block" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                </span>
                <span class="ms-2 text-sm font-normal text-gray-800 dark:text-neutral-200">
                    Contenu
                </span>
            </span>
            <div class="w-full h-px flex-1 bg-gray-300 group-last:hidden hs-stepper-success:bg-blue-600 hs-stepper-completed:bg-teal-600 dark:bg-neutral-700 dark:hs-stepper-success:bg-blue-600 dark:hs-stepper-completed:bg-teal-600"></div>
        </li>

        <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group" data-hs-stepper-nav-item='{"index": 3}'>
            <span class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle">
                <span class="size-7 flex justify-center items-center shrink-0 bg-gray-100 font-normal text-gray-800 rounded-full group-focus:bg-gray-200 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600 dark:bg-neutral-700 dark:text-white dark:group-focus:bg-gray-600 dark:hs-stepper-active:bg-blue-500 dark:hs-stepper-success:bg-blue-500 dark:hs-stepper-completed:bg-teal-500 dark:hs-stepper-completed:group-focus:bg-teal-600">
                    <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">3</span>
                    <svg class="hidden shrink-0 size-3 hs-stepper-success:block" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                </span>
                <span class="ms-2 text-sm font-normal text-gray-800 dark:text-neutral-200">
                    Finaliser
                </span>
            </span>
            <div class="w-full h-px flex-1 bg-gray-300 group-last:hidden hs-stepper-success:bg-blue-600 hs-stepper-completed:bg-teal-600 dark:bg-neutral-700 dark:hs-stepper-success:bg-blue-600 dark:hs-stepper-completed:bg-teal-600"></div>
        </li>
        <!-- End Item -->
    </ul>
    <!-- End Stepper Nav -->

    <!-- Stepper Content -->
    <div class="mt-5 sm:mt-8">
        <form action="{{Route('campaign-new-add')}}" method="POST">
            @csrf
            <div>
                <!-- First Content -->
                <div data-hs-stepper-content-item='{"index": 1}'>
                    <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                        <div class=" border-b rounded-t-xl py-3 px-4 md:py-4 md:px-5 dark:bg-neutral-900 dark:border-neutral-700">
                            <p class="mt-1 text-md text-gray-600 font-bold dark:text-neutral-500">
                                Entete de l'Email
                            </p>
                        </div>
                        <div class="p-4 md:p-5 space-y-3">
                            <div class="">
                                <label for="input-label" class="block text-sm text-gray-600 font-normal mb-2 dark:text-white">Nom de la campagne</label>
                                <input type="text" name="name" class="py-2 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="">
                            </div>
                            <div class="">
                                <label for="input-label" class="block text-sm text-gray-600 font-normal mb-2 dark:text-white">Objet</label>
                                <input type="text" name="subject" class="py-2 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="">
                            </div>
                            <div class="grid grid-cols-2 gap-5">
                                <div class="">
                                    <label for="input-label" class="block text-sm font-normal  text-gray-600 mb-2 dark:text-white">Nom de l' expéditeur</label>
                                    <input type="text" name="from_name" class="py-2 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="">
                                </div>
                                <div class="">
                                    <label for="input-label" class="block text-sm font-normal text-gray-600 mb-2 dark:text-white">Email de l'expéditeur</label>
                                    @if($emails->isEmpty())
                                    <div class="bg-red-50 border border-red-200 text-xs text-red-500 rounded-lg py-2 px-2 dark:bg-white/10 dark:border-white/10 dark:text-neutral-400" role="alert" tabindex="-1" aria-labelledby="hs-link-on-right-label">
                                        <div class="flex">
                                            <div class="shrink-0">
                                                <svg class="shrink-0 size-4 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <path d="M12 16v-4"></path>
                                                    <path d="M12 8h.01"></path>
                                                </svg>
                                            </div>
                                            <div class="flex-1 md:flex md:justify-between ms-2">
                                                <p id="hs-link-on-right-label" class="text-sm">
                                                    Vous n'avez pas enregistré de serveur mail
                                                </p>
                                                <p class="text-sm mt-3 md:mt-0 md:ms-6">
                                                    <a class="text-red-800 hover:text-gray-500 focus:outline-none focus:text-gray-500 font-normal whitespace-nowrap dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" href="{{Route('/emails/services')}}">Ajouter</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                    <select type="text" name="from_email" class="py-2 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="">
                                        @foreach($emails as $ls)
                                        <option value="{{$ls->mail_username}}"> {{$ls->mail_username}} </option>
                                        @endforeach
                                    </select>
                                    <p class="text-xs italic mt-1 text-red-600">A selectionner parmis vos serveurs Mail préenregistré</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End First Content -->

                <!-- First Content -->
                <div data-hs-stepper-content-item='{"index": 2}' style="display: none;">
                    <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                        <div class="border-b rounded-t-xl py-3 px-4 md:py-4 md:px-5 dark:bg-neutral-900 dark:border-neutral-700">
                            <div class="flex items-center justify-between">
                                <p class="mt-1 text-md text-gray-600 font-bold dark:text-neutral-500">
                                    Apparence de l'Email
                                </p>
                                <button type="button" data-hs-overlay="#hs-bg-preview" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-normal rounded-full bg-gray-100 border border-gray-200 text-gray-800 hover:border-gray-500 hover:bg-gray-200 focus:outline-none focus:border-gray-500 focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:border-white dark:text-white dark:hover:text-neutral-300 dark:hover:border-neutral-300">
                                    Voir un Aperçu
                                </button>
                            </div>
                        </div>
                        <div class="p-4 md:p-5">

                            <div class="">
                                <div class="flex items-center justify-center">
                                    <div class="flex bg-blue-200 hover:bg-gray-200 rounded-2xl transition p-1 dark:bg-neutral-700 dark:hover:bg-neutral-600">
                                        <nav class="flex gap-x-1" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                                            <button type="button" class="hs-tab-active:bg-white hs-tab-active:text-gray-700 hs-tab-active:dark:bg-neutral-800 hs-tab-active:dark:text-neutral-400 dark:hs-tab-active:bg-gray-800 py-3 px-4 inline-flex items-center gap-x-2 bg-transparent text-sm text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 font-normal rounded-2xl hover:hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-white dark:focus:text-white active" id="segment-item-1" aria-selected="true" data-hs-tab="#segment-1" aria-controls="segment-1" role="tab">
                                                Editeur de texte
                                            </button>
                                            <button type="button" class="hs-tab-active:bg-white hs-tab-active:text-gray-700 hs-tab-active:dark:bg-neutral-800 hs-tab-active:dark:text-neutral-400 dark:hs-tab-active:bg-gray-800 py-3 px-4 inline-flex items-center gap-x-2 bg-transparent text-sm text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 font-normal rounded-2xl hover:hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-white dark:focus:text-white" id="segment-item-2" aria-selected="false" data-hs-tab="#segment-2" aria-controls="segment-2" role="tab">
                                                Editeur HTML
                                            </button>
                                            <button type="button" class="hs-tab-active:bg-white hs-tab-active:text-gray-700 hs-tab-active:dark:bg-neutral-800 hs-tab-active:dark:text-neutral-400 dark:hs-tab-active:bg-gray-800 py-3 px-4 inline-flex items-center gap-x-2 bg-transparent text-sm text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 font-normal rounded-2xl hover:hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-white dark:focus:text-white" id="segment-item-3" aria-selected="false" data-hs-tab="#segment-3" aria-controls="segment-3" role="tab">
                                                Templates
                                            </button>
                                        </nav>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <div id="segment-1" role="tabpanel" aria-labelledby="segment-item-1">
                                        <div class="mt-4">
                                            <div class="w-full" rows="4" placeholder="" id="snow-editor"></div>
                                            <textarea id="snow-editor-html" class="hidden" rows="10" name="content"></textarea>
                                        </div>
                                    </div>
                                    <div id="segment-2" class="hidden" role="tabpanel" aria-labelledby="segment-item-2">
                                        <div class="code-editor">
                                            <pre id="highlightedCode" class="code-output"></pre>
                                            <textarea class="textarea-sec" id="htmlInput" name="htmlInput" spellcheck="false" oninput="updatePreview();" placeholder="Paste or edit your HTML code here"></textarea>
                                        </div>
                                    </div>
                                    <div id="segment-3" class="hidden" role="tabpanel" aria-labelledby="segment-item-3">
                                        <div class="grid md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-2 gap-4 mb-4 mt-5">
                                            @foreach($templ as $dat)
                                            <textarea class="hidden" name="" id="pd-{{$dat->id}}">{!! Storage::disk('public')->get($dat->content) !!}</textarea>
                                            <label for="" onclick="gfx('{{$dat->id}}');" class="p-2 w-full border border-gray-200 bg-white shadow-sm -mt-px -ms-px rounded-2xl text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                                <div class="flex ">
                                                    <input type="radio" name="af-account-gender-checkbox" class="shrink-0 mt-0.5 border-gray-300 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-500 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="af-account-gender-checkbox">
                                                    <span class="text-sm text-gray-500 ms-3 dark:text-neutral-400">{!!$dat->name!!}</span>
                                                </div>
                                                <div class="relative p-1 rounded-xl">
                                                    <iframe data-src="/storage/{{$dat->content}}" class="template-iframe rounded-xl" frameborder="0" width="100%" height="180px" scrolling="yes" loading="lazy"></iframe>
                                                </div>
                                            </label>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End First Content -->

                <!-- First Content -->
                <div data-hs-stepper-content-item='{"index": 3}' style="display: none;">
                    <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                        <div class="bg-gray-100 border-b rounded-t-xl py-3 px-4 md:py-4 md:px-5 dark:bg-neutral-900 dark:border-neutral-700">
                            <p class="mt-1 text-md text-gray-600 font-bold dark:text-neutral-500">
                                Prochaine étape
                            </p>
                        </div>
                        <div class="p-4 md:p-5">
                            <div class="text-center mb-8 mt-6">
                                <svg class="mb-8 size-32 inline-flex items-center justify-center" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.89 5.87988H5.10999C3.39999 5.87988 2 7.27987 2 8.98987V20.3499C2 21.7999 3.04 22.4199 4.31 21.7099L8.23999 19.5199C8.65999 19.2899 9.34 19.2899 9.75 19.5199L13.68 21.7099C14.95 22.4199 15.99 21.7999 15.99 20.3499V8.98987C16 7.27987 14.6 5.87988 12.89 5.87988Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16 8.98987V20.3499C16 21.7999 14.96 22.4099 13.69 21.7099L9.76001 19.5199C9.34001 19.2899 8.65999 19.2899 8.23999 19.5199L4.31 21.7099C3.04 22.4099 2 21.7999 2 20.3499V8.98987C2 7.27987 3.39999 5.87988 5.10999 5.87988H12.89C14.6 5.87988 16 7.27987 16 8.98987Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path opacity="0.4" d="M22 5.10999V16.47C22 17.92 20.96 18.53 19.69 17.83L16 15.77V8.98999C16 7.27999 14.6 5.88 12.89 5.88H8V5.10999C8 3.39999 9.39999 2 11.11 2H18.89C20.6 2 22 3.39999 22 5.10999Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>

                                <h1 class="font-bold text-xl text-gray-800 dark:text-slate-200">Terminé!</h1>
                                <h5 class="font-normal text-gray-500">Passer à la prochaine étape</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End First Content -->

                <!-- Button Group -->
                <div class="max-w-sm mx-auto mt-5 flex justify-between items-center gap-x-2">
                    <button type="button" class="w-full py-3 px-5 inline-flex items-center justify-center gap-x-1 text-sm font-normal rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-stepper-back-btn="">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m15 18-6-6 6-6"></path>
                        </svg>
                        Précédent
                    </button>
                    <button type="button" class="w-full py-3 px-5 inline-flex items-center justify-center gap-x-1 text-sm font-normal rounded-full border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" data-hs-stepper-next-btn="">
                        Continuer
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </button>
                    <button type="submit" class="w-full py-3 px-5 inline-flex items-center justify-center gap-x-1 text-sm font-normal rounded-full border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" data-hs-stepper-finish-btn="" style="display: none;">
                        Enregistré
                    </button>
                </div>
                <!-- End Button Group -->
            </div>
        </form>
    </div>
    <!-- End Stepper Content -->
</div>
<!-- End Stepper -->

<div id="hs-bg-preview" class="hs-overlay hs-overlay-backdrop-open:bg-blue-950/90 hidden size-full fixed top-0 start-0 z-[81] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-bg-preview-label">
    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-4xl sm:w-full m-3 h-[calc(100%-3.5rem)] sm:mx-auto">
        <div class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-900 dark:border-neutral-800 dark:shadow-neutral-700/70">
            <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-800">
                <h3 id="hs-bg-preview-label" class="font-extrabold text-gray-800 dark:text-neutral-200">
                    Prévisualisation
                </h3>
                <div class="flex gap-x-2 items-center">
                    <div class="flex items-end justify-end bg-gray-100 hover:bg-gray-200 rounded-lg transition p-1 dark:bg-neutral-700 dark:hover:bg-neutral-600">
                        <nav class="flex items-end  justify-end gap-x-1" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                            <button type="button" class="hs-tab-active:bg-white hs-tab-active:text-gray-700 hs-tab-active:dark:bg-neutral-800 hs-tab-active:dark:text-neutral-400 dark:hs-tab-active:bg-gray-800 py-1 px-1 inline-flex items-center gap-x-2 bg-transparent text-sm text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 font-normal rounded-lg hover:hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-white dark:focus:text-white active" id="prevo-item-1" aria-selected="true" data-hs-tab="#prevo-1" aria-controls="prevo-1" role="tab">
                                <svg class="size-4" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.44 2H17.55C21.11 2 22 2.89 22 6.44V12.77C22 16.33 21.11 17.21 17.56 17.21H6.44C2.89 17.22 2 16.33 2 12.78V6.44C2 2.89 2.89 2 6.44 2Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path opacity="0.4" d="M12 17.2188V21.9988" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path opacity="0.4" d="M2 13H22" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.5 22H16.5" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <button type="button" class="hs-tab-active:bg-white hs-tab-active:text-gray-700 hs-tab-active:dark:bg-neutral-800 hs-tab-active:dark:text-neutral-400 dark:hs-tab-active:bg-gray-800 py-1 px-1 inline-flex items-center gap-x-2 bg-transparent text-sm text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 font-normal rounded-lg hover:hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-white dark:focus:text-white" id="prevo-item-2" aria-selected="false" data-hs-tab="#prevo-2" aria-controls="prevo-2" role="tab">
                                <svg class="size-4" width="18" height="22" viewBox="0 0 18 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 6V16C17 20 16 21 12 21H6C2 21 1 20 1 16V6C1 2 2 1 6 1H12C16 1 17 2 17 6Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path opacity="0.4" d="M11 4.5H7" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path opacity="0.4" d="M8.99922 18.1C9.85526 18.1 10.5492 17.406 10.5492 16.55C10.5492 15.694 9.85526 15 8.99922 15C8.14318 15 7.44922 15.694 7.44922 16.55C7.44922 17.406 8.14318 18.1 8.99922 18.1Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
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
                        <div id="prevo-1" role="tabpanel" aria-labelledby="prevo-item-1">
                            <figure class="relative z-[1] max-w-full mx-auto w-[50rem] h-auto shadow-[0_2.75rem_3.5rem_-2rem_rgb(45_55_75_/_20%),_0_0_5rem_-2rem_rgb(45_55_75_/_15%)] dark:shadow-[0_2.75rem_3.5rem_-2rem_rgb(0_0_0_/_20%),_0_0_5rem_-2rem_rgb(0_0_0_/_15%)] rounded-b-lg">
                                <div class="relative flex items-center max-w-[50rem] bg-gray-800 rounded-t-lg py-2 px-24 dark:bg-neutral-700">
                                    <div class="flex gap-x-1 absolute top-2/4 start-4 -translate-y-1">
                                        <span class="size-2 bg-gray-600 rounded-full dark:bg-neutral-600"></span>
                                        <span class="size-2 bg-gray-600 rounded-full dark:bg-neutral-600"></span>
                                        <span class="size-2 bg-gray-600 rounded-full dark:bg-neutral-600"></span>
                                    </div>
                                    <div class="flex justify-center items-center size-full bg-gray-700 text-[.25rem] text-gray-400 rounded-sm sm:text-[.5rem] dark:bg-neutral-600 dark:text-neutral-400">www.preline.com</div>
                                </div>

                                <div class="bg-gray-800 rounded-b-lg p-1">
                                    <iframe srcdoc="" class="w-full rounded-[1.25rem] h-screen bg-white" id="preview1"></iframe>
                                </div>
                            </figure>
                        </div>
                        <div id="prevo-2" class="hidden" role="tabpanel" aria-labelledby="prevo-item-2">
                            <figure class="mx-auto max-w-full w-80 h-auto">
                                <div class="p-1.5 bg-gray-800 shadow-[0_2.75rem_5.5rem_-3.5rem_rgb(45_55_75_/_20%),_0_2rem_4rem_-2rem_rgb(45_55_75_/_30%),_inset_0_-0.1875rem_0.3125rem_0_rgb(45_55_75_/_20%)] dark:bg-neutral-600 dark:shadow-[0_2.75rem_5.5rem_-3.5rem_rgb(0_0_0_/_20%),_0_2rem_4rem_-2rem_rgb(0_0_0_/_30%),_inset_0_-0.1875rem_0.3125rem_0_rgb(0_0_0_/_20%)] rounded-3xl">
                                    <iframe srcdoc="" class="w-full rounded-[1.25rem] h-screen bg-white" id="preview2"></iframe>
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

<script src="/assets/vendor/quill/quill.min.js"></script>

<script>
    var quill = new Quill('#snow-editor', {
        theme: 'snow',
        placeholder: 'Rédiger la description du projet et dites à quoi servira la collecte ....',
        modules: {
            'toolbar': [
                [{
                    'font': []
                }, {
                    'size': []
                }],
                ['bold', 'italic', 'underline', 'strike'],
                [{
                    'color': []
                }, {
                    'background': []
                }],
                [{
                    'script': 'super'
                }, {
                    'script': 'sub'
                }],
                [{
                    'header': [false, 1, 2, 3, 4, 5, 6]
                }, 'blockquote'],
                [{
                    'list': 'ordered'
                }, {
                    'list': 'bullet'
                }, {
                    'indent': '-1'
                }, {
                    'indent': '+1'
                }],
                ['direction', {
                    'align': []
                }],
                ['link', 'image', 'video'],
                ['clean']
            ]
        },
    });
    quill.on('text-change', function(delta, oldDelta, source) {
        $("#snow-editor-html").text($('#snow-editor').html());
        $("#preview1").attr("srcdoc", $('#snow-editor').html());
        $("#preview2").attr("srcdoc", $('#snow-editor').html());
    });

    function updatePreview() {
        var htmlInput = document.getElementById("htmlInput").value;
        $("#preview1").attr("srcdoc", htmlInput);
        $("#preview2").attr("srcdoc", htmlInput);
        document.getElementById("snow-editor-html").value = htmlInput;
    }

    function gfx(temps) {
        var tem = document.getElementById("pd-" + temps).value;
        $("#preview1").attr("srcdoc", tem);
        $("#preview2").attr("srcdoc", tem);
        document.getElementById("snow-editor-html").value = tem;
    }

    const textarea = document.getElementById('htmlInput');
    const highlightedCode = document.getElementById('highlightedCode');

    // Synchronize scrolling
    textarea.addEventListener('scroll', () => {
        highlightedCode.scrollTop = textarea.scrollTop;
        highlightedCode.scrollLeft = textarea.scrollLeft;
    });

    // Highlight the code
    textarea.addEventListener('input', () => {
        const code = textarea.value;
        highlightedCode.innerHTML = highlightHTML(code);
    });

    function highlightHTML(html) {
        // Escape HTML entities
        const escapeHtml = html
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;');

        // Highlight tags, attributes, and values
        return escapeHtml.replace(
            /(&lt;\/?)(\w+)([^&]*?)(&gt;)/g,
            (match, p1, p2, p3, p4) => {
                const tag = `<span class="tag">${p1}${p2}</span>`;
                const attrs = p3.replace(
                    /(\w+)=("[^"]*")/g,
                    `<span class="attribute">$1</span>=<span class="value">$2</span>`
                );
                const end = `<span class="tag">${p4}</span>`;
                return tag + attrs + end;
            }
        );
    }

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