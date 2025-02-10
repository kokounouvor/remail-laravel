@extends('layouts.app')

@section('content')
<!-- -->
<link rel="stylesheet" href="/assets/vendor/ckeditor5/ckeditor5.css">
<script src="/assets/vendor/ckeditor5/ckeditor5.js"></script>
<!-- -->

<div class="max-w-3xl mx-auto">
    <ol class="flex items-center whitespace-nowrap mb-5">
        <li class="inline-flex items-center">
            <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" href="{{Route('portal.templates')}}">
                Mes Templates
            </a>
            <svg class="shrink-0 mx-2 size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6"></path>
            </svg>
        </li>
        <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-neutral-200" aria-current="page">
            Publicateur
        </li>
    </ol>

    <div class="flex flex-col bg-white border shadow-sm rounded-xl divide-y dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <form id="temp_add_form" action="{{Route('portal.template.store')}}" method="POST" class="divide-y">
            @csrf
            <div class="p-4 sticky bg-blue-50 top-14 rounded-t-xl">
                <div class="md:flex justify-between items-center">
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                        Enregistré un Template Email
                    </h3>
                    <div class="flex md:justify-end items-center gap-x-2">
                        <button type="button" data-hs-overlay="#hs-preview" onclick="showPreview();" class="py-1.5 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                            Voir le rendu
                        </button>
                        <button type="submit" id="temp_add_btn" class="py-1.5 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-blue-800 text-white hover:bg-blue-600 focus:outline-none focus:bg-blue-600 disabled:opacity-50 disabled:pointer-events-none">
                            Enregistré
                        </button>
                    </div>
                </div>
            </div>

            <div class="p-4">
                <div class="mb-3">
                    <label for="name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Nom du template</label>
                    <input type="text" id="name" name="name" class="py-2 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-600 focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="">
                    <input type="text" id="content_type" name="content_type" class="hidden" value="code">
                </div>

                <div class="border-b border-gray-200 dark:border-neutral-700">
                    <nav class="-mb-0.5 flex justify-center gap-x-6" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                        <button type="button" onclick="$('#content_type').val('code');" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500 active" id="horizontal-alignment-item-1" aria-selected="true" data-hs-tab="#horizontal-alignment-1" aria-controls="horizontal-alignment-1" role="tab">
                            Editeur HTML
                        </button>
                        <button type="button" onclick="$('#content_type').val('texte');" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-blue-500" id="horizontal-alignment-item-2" aria-selected="false" data-hs-tab="#horizontal-alignment-2" aria-controls="horizontal-alignment-2" role="tab">
                            Editeur de texte
                        </button>
                    </nav>
                </div>

                <div class="mt-3">
                    <div id="horizontal-alignment-1" role="tabpanel" aria-labelledby="horizontal-alignment-item-1">
                        <textarea name="code_content" id="code_content" class="hidden"></textarea>
                    </div>
                    <div id="horizontal-alignment-2" class="hidden" role="tabpanel" aria-labelledby="horizontal-alignment-item-2">
                        <div class="relative">
                            <textarea id="text_editor" name="content" cols="10" rows="15" class="p-4 block w-full border-gray-200 font-normal rounded-lg text-sm focus:border-blue-600 focus:ring-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Entrer ou copier le code du Template Email ici"></textarea>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>

<div id="hs-preview" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-preview-label">
    <div class="hs-overlay-animation-target hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-2xl sm:w-full m-3 sm:mx-auto">
        <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                <h3 id="hs-preview-label" class="font-bold text-gray-800 dark:text-white">
                    Prévisualisation
                </h3>
                <div class="flex gap-x-2 items-center">
                    <div class="flex items-end justify-end bg-gray-100 hover:bg-gray-200 rounded-lg transition p-1 dark:bg-neutral-700 dark:hover:bg-neutral-600">
                        <nav class="flex items-end  justify-end gap-x-1" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                            <button type="button" class="hs-tab-active:bg-white hs-tab-active:text-gray-700 hs-tab-active:dark:bg-neutral-800 hs-tab-active:dark:text-neutral-400 dark:hs-tab-active:bg-gray-800 py-2 px-3 inline-flex items-center gap-x-2 bg-transparent text-sm text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700 font-medium rounded-lg hover:hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-white dark:focus:text-white active">
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

                    <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600" aria-label="Close" data-hs-overlay="#hs-preview">
                        <span class="sr-only">Close</span>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
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

                                <div class="bg-gray-100 rounded-b-lg">
                                    <iframe srcdoc="" class="w-full rounded-[1.25rem]  h-screen" id="smo"></iframe>
                                </div>
                            </figure>
                        </div>
                        <div id="segment-2" class="hidden" role="tabpanel" aria-labelledby="segment-item-2">
                            <figure class="mx-auto max-w-full w-80 h-auto">
                                <div class="p-1.5 bg-gray-100 shadow-[0_2.75rem_5.5rem_-3.5rem_rgb(45_55_75_/_20%),_0_2rem_4rem_-2rem_rgb(45_55_75_/_30%),_inset_0_-0.1875rem_0.3125rem_0_rgb(45_55_75_/_20%)] dark:bg-neutral-600 dark:shadow-[0_2.75rem_5.5rem_-3.5rem_rgb(0_0_0_/_20%),_0_2rem_4rem_-2rem_rgb(0_0_0_/_30%),_inset_0_-0.1875rem_0.3125rem_0_rgb(0_0_0_/_20%)] rounded-3xl">
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
<!-- Code editor manager -->
<!-- Inclure ACE Editor depuis un CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Récupérer le textarea existant
        var textarea = document.getElementById('code_content');

        // Créer un conteneur pour ACE Editor et l'insérer dans le DOM
        var editorDiv = document.createElement('div');
        editorDiv.id = 'ace_editor_container';
        editorDiv.style.width = '100%';
        editorDiv.style.height = '400px'; // Ajustez la hauteur selon vos besoins
        textarea.parentNode.insertBefore(editorDiv, textarea);

        // Initialiser ACE Editor sur le conteneur créé
        var editor = ace.edit("ace_editor_container");
        editor.setTheme("ace/theme/chrome"); // Thème light pour l'éditeur
        editor.session.setMode("ace/mode/html"); // Limiter l'éditeur au langage HTML

        // Charger le contenu initial du textarea dans l'éditeur
        editor.session.setValue(textarea.value);

        // Synchroniser en temps réel : mise à jour du textarea à chaque modification
        editor.session.on('change', function() {
            textarea.value = editor.session.getValue();
        });
    });
</script>
<!-- End code editor manager -->

<!-- Rich text editor -->
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
        .create(document.querySelector('#text_editor'), {
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
        })
        .catch(error => {
            console.error(error);
        });
</script>
<!-- End Rich text editor -->

<script>
    $(document).ready(function(e) {
        $("#temp_add_forms").on("submit", (function(e) {

            $("#code_content").val(encodeURIComponent($("#code_content").val()));

            // Modification du boutton
            $("#temp_add_btn").attr("disabled", true);
            $("#temp_add_btn").html("Enregistrement <svg class='size-4 animate-spin' xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='lucide lucide-loader lucide-icon customizable' data-v-14c8c335=''><path d='M12 2v4'></path><path d='m16.2 7.8 2.9-2.9'></path><path d='M18 12h4'></path><path d='m16.2 16.2 2.9 2.9'></path><path d='M12 18v4'></path><path d='m4.9 19.1 2.9-2.9'></path><path d='M2 12h4'></path><path d='m4.9 4.9 2.9 2.9'></path></svg>");

            e.preventDefault();
            $.ajax({
                url: "{{Route('portal.template.store')}}",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    if (data.status == "ok") {
                        $("#temp_add_btn").html("Template enregistré !");
                        setTimeout(() => {
                            window.location.replace("{{Route('portal.templates')}}");
                        }, 1000);
                    } else {
                        $("#temp_add_btn").html("Enregistré");
                        alert("Le status de l'enregistrement est inconnus")
                    }
                    $("#temp_add_btn").attr("disabled", false);
                },

                error: function(xhr) {
                    $("#temp_add_btn").attr("disabled", false);
                    $("#temp_add_btn").html("Echec de l'enregistrement");
                    setTimeout(() => {
                        $("#temp_add_btn").html("Enregistré");
                    }, 2000);
                },
            });
        }));
    });

    function showPreview() {
        $("#w1").hide();
        var content = editor.getData();
        var code_content = $("#code_content").val();
        var content_type = $("#content_type").val();

        var final_content = content_type === "texte" ? content : code_content;

        $("#smop").attr("srcdoc", final_content);
        $("#smo").attr("srcdoc", final_content);
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