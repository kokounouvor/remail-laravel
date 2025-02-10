@extends('layouts.app')

@section('content')
<div>
    @if($services->isEmpty())
    <div class="max-w-2xl mx-auto py-14 flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <div class="flex flex-auto flex-col justify-center items-center p-4 md:p-5">
            <svg class="size-20 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-server-off lucide-icon customizable" data-v-14c8c335="">
                <path d="M7 2h13a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2h-5"></path>
                <path d="M10 10 2.5 2.5C2 2 2 2.5 2 5v3a2 2 0 0 0 2 2h6z"></path>
                <path d="M22 17v-1a2 2 0 0 0-2-2h-1"></path>
                <path d="M4 14a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16.5l1-.5.5.5-8-8H4z"></path>
                <path d="M6 18h.01"></path>
                <path d="m2 2 20 20"></path>
            </svg>

            <p class="mt-2 text-sm text-gray-800 dark:text-neutral-300">
                Aucune donnée disponible
            </p>
            <button data-hs-overlay="#hs-server-add" type="button" class="mt-5 py-2 px-4 inline-flex items-center gap-x-2 text-sm font-normal rounded-full border border-gray-300 bg-gray-200 text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                Ajouter un serveur Mail
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </div>
    @else
    <div class="max-w-4xl mx-auto">
        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <div class="border-b rounded-t-xl py-2 px-4 md:py-3 md:px-5 dark:bg-neutral-900 dark:border-neutral-700">
                <div class="flex items-center justify-between">
                    <p class="mt-1 text-md text-gray-600 font-bold dark:text-neutral-500">
                        Serveur Email
                    </p>
                    <button type="button" data-hs-overlay="#hs-server-add" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-normal rounded-full border border-gray-800 text-gray-800 hover:border-gray-500 hover:text-gray-500 focus:outline-none focus:border-gray-500 focus:text-gray-500 disabled:opacity-50 disabled:pointer-events-none dark:border-white dark:text-white dark:hover:text-neutral-300 dark:hover:border-neutral-300">
                        Ajouter
                    </button>
                </div>
            </div>
            <div class="p-4 md:p-5">
                <div class="flex flex-col">
                    <div class="-m-1.5 overflow-x-auto">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                            <div class="border rounded-lg overflow-hidden dark:border-neutral-700 dark:shadow-gray-900">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                                    <thead>
                                        <tr class="divide-x divide-gray-200 dark:divide-neutral-700">
                                            <th scope="col" class="px-6 py-3 text-start text-xs font-normal text-gray-500 uppercase dark:text-neutral-500">ID</th>
                                            <th scope="col" class="px-6 py-3 text-start text-xs font-normal text-gray-500 uppercase dark:text-neutral-500">Serveur</th>
                                            <th scope="col" class="px-6 py-3 text-start text-xs font-normal text-gray-500 uppercase dark:text-neutral-500">Email</th>
                                            <th scope="col" class="px-6 py-3 text-start text-xs font-normal text-gray-500 uppercase dark:text-neutral-500">Envoie/Heure</th>
                                            <th scope="col" class="px-6 py-3 text-start text-xs font-normal text-gray-500 uppercase dark:text-neutral-500">Envoie/Jour</th>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-normal text-gray-500 uppercase dark:text-neutral-500">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                        @foreach($services as $sv)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-normal text-gray-800 dark:text-neutral-200">
                                                {{$sv->id}}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                {{$sv->name}}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                {{$sv->mail_username}}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                {{$sv->max_per_hour}}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                                {{$sv->max_per_day}}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap flex items-center justify-center gap-x-2 text-end text-sm font-normal">

                                                <button type="button" data-hs-overlay="#hs-server-edit-{{$sv->id}}" class="size-7 flex items-center justify-center gap-x-2 text-xs font-medium rounded-full border border-transparent bg-gray-200 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
                                                    <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil lucide-icon customizable">
                                                        <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                                                        <path d="m15 5 4 4"></path>
                                                    </svg>
                                                </button>
                                                <button type="button" data-hs-overlay="#hs-server-delete-{{$sv->id}}" class="size-7 flex items-center justify-center gap-x-2 text-xs font-medium rounded-full border border-transparent bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:bg-red-600 disabled:opacity-50 disabled:pointer-events-none">
                                                    <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash-2 lucide-icon customizable">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg>
                                                </button>

                                                <button type="button" data-hs-overlay="#hs-server-test-{{$sv->id}}" class="inline-flex items-center hidden gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">Tester</button>
                                            </td>
                                        </tr>
                                        <!-- Modal Update -->
                                        <div id="hs-server-edit-{{$sv->id}}" class="hs-overlay hs-overlay-backdrop-open:bg-blue-950/90 hidden size-full fixed top-0 start-0 z-[81] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-server-add-label">
                                            <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 h-[calc(100%-3.5rem)] sm:mx-auto">
                                                <div class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                                                    <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                                                        <h3 id="hs-server-add-label" class="font-bold text-gray-800 dark:text-white">
                                                            Modifier un Serveur Email
                                                        </h3>
                                                        <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600" aria-label="Close" data-hs-overlay="#hs-server-edit-{{$sv->id}}">
                                                            <span class="sr-only">Close</span>
                                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M18 6 6 18"></path>
                                                                <path d="m6 6 12 12"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="p-4 overflow-y-auto">
                                                        <form method="post" action="{{Route('/emails/services/edit')}}">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$sv->id}}">
                                                            <div class="mb-2">
                                                                <label for="name" class="font-normal text-sm text-gray-600 dark:text-slate-400">Nom du Services</label>
                                                                <input type="text" name="name" id="name" value="{{$sv->name}}" class="py-2 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="mailer" class="font-normal text-sm text-gray-600 dark:text-slate-400">Services email</label>
                                                                <select name="mailer" id="mailer" class="py-2 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>
                                                                    <option value="smtp">SMTP</option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-2 bg-blue-200 rounded-lg p-2">
                                                                <label for="host" class="font-normal text-sm text-gray-600 dark:text-slate-400">Email d'expédition</label>
                                                                <input type="email" name="email" value="{{$sv->mail_email}}" class="py-2 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>
                                                                <span class="text-xs text-red-600">Ce sera l'email d'expédition qui sera affiché</span>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="host" class="font-normal text-sm text-gray-600 dark:text-slate-400">Hote</label>
                                                                <input type="text" name="host" id="host" value="{{$sv->mail_host}}" class="py-2 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="username" class="font-normal text-sm text-gray-600 dark:text-slate-400">Nom d'utilisateur</label>
                                                                <input type="text" name="username" id="username" value="{{$sv->mail_username}}" class="py-2 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="password" class="font-normal text-sm text-gray-600 dark:text-slate-400">Mot de passe</label>
                                                                <input type="password" name="password" id="password" value="{{Crypt::decryptString($sv->mail_password)}}" class="py-2 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="port" class="font-normal text-sm text-gray-600 dark:text-slate-400">Port</label>
                                                                <input type="number" name="port" id="port" value="{{$sv->mail_port}}" class="py-2 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>
                                                            </div>
                                                            <div class="mb-5">
                                                                <label for="encryption" class="font-normal text-sm text-gray-600 dark:text-slate-400">Cryptage</label>
                                                                <select name="encryption" id="encryption" class="py-2 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>
                                                                    <option value="ssl" @if($sv->mail_encryption=='ssl') selected @endif>ssl</option>
                                                                    <option value="tls" @if($sv->mail_encryption=='tls') selected @endif>tls</option>
                                                                </select>
                                                            </div>
                                                            <div class="grid grid-cols-2 gap-5">
                                                                <div class="mb-2">
                                                                    <label for="max_per_hour" class="font-normal text-sm text-gray-600 dark:text-slate-400">Envoie maximum par Heure</label>
                                                                    <input type="number" name="max_per_hour" id="max_per_hour" value="{{$sv->max_per_hour}}" class="py-2 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>
                                                                </div>
                                                                <div class="mb-5">
                                                                    <label for="max_per_day" class="font-normal text-sm text-gray-600 dark:text-slate-400">Envoie maximum par jour</label>
                                                                    <input type="number" name="max_per_day" id="max_per_day" value="{{$sv->max_per_day}}" class="py-2 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>
                                                                </div>
                                                            </div>
                                                            <button type="submit" id="button-edit-{{$sv->id}}" class="py-2 px-3 inline-flex hidden items-center gap-x-2 text-sm font-normal rounded-lg border border-transparent bg-blue-500 text-white hover:bg-blue-500 focus:outline-none focus:bg-blue-500 disabled:opacity-50 disabled:pointer-events-none" href="#">
                                                                Enregistré
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                                                        <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-normal rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-server-add">
                                                            Quitter
                                                        </button>
                                                        <button type="button" onclick="$('#button-edit-{{$sv->id}}').click();" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-normal rounded-full border border-transparent bg-blue-800 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                                            Enregistré les modifications
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal -->
                                        <div id="hs-server-delete-{{$sv->id}}" class="hs-overlay hs-overlay-backdrop-open:bg-blue-950/90 hidden size-full fixed top-0 start-0 z-[81] overflow-x-hidden overflow-y-auto" role="dialog" tabindex="-1" aria-labelledby="hs-workspace-add-label">
                                            <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-sm sm:w-full m-3 sm:mx-auto">
                                                <div class="relative bg-white border border-gray-200 rounded-xl shadow-sm pointer-events-auto dark:bg-neutral-900 dark:border-neutral-800">
                                                    <div class="absolute top-2 end-2">
                                                        <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600" aria-label="Close" data-hs-overlay="#hs-server-delete-{{$sv->id}}">
                                                            <span class="sr-only">Close</span>
                                                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M18 6 6 18" />
                                                                <path d="m6 6 12 12" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="p-4 sm:p-7">

                                                        <div class="p-4 sm:p-10 text-center overflow-y-auto">
                                                            <!-- Icon -->
                                                            <span class="mb-4 inline-flex justify-center items-center size-[62px] rounded-full border-4 border-red-50 bg-red-100 text-red-500 dark:bg-red-700 dark:border-red-600 dark:text-red-100">
                                                                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                                                </svg>
                                                            </span>
                                                            <!-- End Icon -->

                                                            <h3 id="hs-sign-out-alert-small-window-label" class="mb-2 text-2xl font-bold text-gray-800 dark:text-neutral-200">
                                                                Suppression
                                                            </h3>
                                                            <p class="text-gray-500 font-light dark:text-neutral-500">
                                                                En supprimant ce <strong>serveur mail</strong> toutes les informations et opérations affiliés seront définitivement supprimé.
                                                            </p>

                                                            <form method="post" action="{{Route('/emails/services/delete')}}" class="mt-8">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{$sv->id}}">

                                                                <button type="submit" class="py-2.5 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-normal rounded-full border border-transparent bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:bg-red-600 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#hs-sign-out-alert-small-window">
                                                                    Supprimer
                                                                </button>
                                                                <button type="button" class="py-2 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-normal rounded-full text-center border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" data-hs-overlay="#hs-server-delete-{{$sv->id}}">
                                                                    Quitter
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

<!-- Modal -->
<div id="hs-server-add" class="hs-overlay hs-overlay-backdrop-open:bg-blue-950/90 hidden size-full fixed top-0 start-0 z-[81] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-server-add-label">
    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 h-[calc(100%-3.5rem)] sm:mx-auto">
        <div class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                <h3 id="hs-server-add-label" class="font-bold text-gray-800 dark:text-white">
                    Ajouter un Serveur Email
                </h3>
                <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600" aria-label="Close" data-hs-overlay="#hs-server-add">
                    <span class="sr-only">Close</span>
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="p-4 overflow-y-auto">
                <form method="post" action="{{Route('/emails/services/add')}}">
                    @csrf
                    <div class="mb-2">
                        <label for="name" class="font-normal text-sm text-gray-600 dark:text-slate-400">Nom du Services</label>
                        <input type="text" name="name" id="name" class="py-2 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>
                    </div>
                    <div class="mb-2">
                        <label for="mailer" class="font-normal text-sm text-gray-600 dark:text-slate-400">Services email</label>
                        <select name="mailer" id="mailer" class="py-2 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>
                            <option value="smtp">SMTP</option>
                        </select>
                    </div>
                    <div class="mb-2 bg-blue-200 rounded-lg p-2">
                        <label for="host" class="font-normal text-sm text-gray-600 dark:text-slate-400">Email d'expédition</label>
                        <input type="email" name="email" class="py-2 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>
                        <span class="text-xs text-blue-800">Ce sera l'email d'expédition qui sera affiché</span>
                    </div>
                    <div class="mb-2">
                        <label for="host" class="font-normal text-sm text-gray-600 dark:text-slate-400">Hote</label>
                        <input type="text" name="host" id="host" class="py-2 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>
                    </div>
                    <div class="mb-2">
                        <label for="username" class="font-normal text-sm text-gray-600 dark:text-slate-400">Nom d'utilisateur</label>
                        <input type="text" name="username" id="username" class="py-2 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>
                    </div>
                    <div class="mb-2">
                        <label for="password" class="font-normal text-sm text-gray-600 dark:text-slate-400">Mot de passe</label>
                        <input type="password" name="password" id="password" class="py-2 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>
                    </div>
                    <div class="grid grid-cols-2 gap-5">
                        <div class="mb-2">
                            <label for="port" class="font-normal text-sm text-gray-600 dark:text-slate-400">Port</label>
                            <input type="number" name="port" id="port" class="py-2 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>
                        </div>
                        <div class="mb-5">
                            <label for="encryption" class="font-normal text-sm text-gray-600 dark:text-slate-400">Cryptage</label>
                            <select name="encryption" id="encryption" class="py-2 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>
                                <option value="ssl">ssl</option>
                                <option value="tls">tls</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-5">
                        <div class="mb-2">
                            <label for="max_per_hour" class="font-normal text-sm text-gray-600 dark:text-slate-400">Envoie maximum par Heure</label>
                            <input type="number" name="max_per_hour" id="max_per_hour" class="py-2 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>
                        </div>
                        <div class="mb-5">
                            <label for="max_per_day" class="font-normal text-sm text-gray-600 dark:text-slate-400">Envoie maximum par jour</label>
                            <input type="number" name="max_per_day" id="max_per_day" class="py-2 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" required>
                        </div>
                    </div>
                    <button type="submit" id="create_new_server" class="py-2 px-3 inline-flex hidden items-center gap-x-2 text-sm font-normal rounded-lg border border-transparent bg-blue-500 text-white hover:bg-blue-500 focus:outline-none focus:bg-blue-500 disabled:opacity-50 disabled:pointer-events-none" href="#">
                        Ajouter maintenant
                    </button>
                </form>
            </div>
            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-normal rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-server-add">
                    Quitter
                </button>
                <button type="button" onclick="$('#create_new_server').click();" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-normal rounded-full border border-transparent bg-blue-800 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Ajouter maintenant
                </button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->
@endsection