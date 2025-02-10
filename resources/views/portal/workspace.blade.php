@extends('layouts.app')

@section('content')
<div>
    @include('layouts.alert')

    @if($workspaces->isEmpty())
    <div class="max-w-2xl mx-auto py-10 flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <div class="flex flex-auto flex-col justify-center items-center p-4 md:p-5">

            <img src="/assets/svg/workspace.svg" class="h-56" alt="">
            <p class="mt-2 text-sm text-gray-800 dark:text-neutral-300">
                Aucune donnée disponible
            </p>
            <button data-hs-overlay="#hs-workspace-add" type="button" class="mt-5 py-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-300 bg-gray-200 text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                Ajouter un workspace
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
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-neutral-200">Workspaces</h2>
            </div>
            <!-- Col -->

            <div class="inline-flex gap-x-2">
                <button type="button" data-hs-overlay="#hs-workspace-add" class="py-2 px-5 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-gray-50 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" href="#">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus lucide-icon customizable" data-v-14c8c335="">
                        <path d="M5 12h14"></path>
                        <path d="M12 5v14"></path>
                    </svg>

                    Ajouter
                </button>
            </div>
            <!-- Col -->
        </div>
        <!-- End Grid -->

        <div class="max-w-2xl mx-auto flex flex-col">
            <div class="-m-1.5 overflow-x-auto bg-white dark:bg-neutral-800 border dark:border-neutral-700 shadow-sm rounded-xl">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="border rounded-xl overflow-hidden dark:border-neutral-700">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase dark:text-neutral-500">ID</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase dark:text-neutral-500">Nom</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-bold text-gray-500 uppercase dark:text-neutral-500">Date</th>
                                    <th scope="col" class="px-6 py-3 text-center text-xs font-bold text-gray-500 uppercase dark:text-neutral-500">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                @foreach($workspaces as $list)
                                <tr>
                                    <td class="px-6 py-2 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                        {{$list->id}}
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                        {{$list->name}}
                                    </td>
                                    <td class="px-6 py-2 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                        {{$list->created_at}}
                                    </td>
                                    <td class="flex gap-x-2 items-center justify-center px-6 py-2 whitespace-nowrap text-center text-sm font-medium">
                                        <button type="button" data-hs-overlay="#hs-edit-{{$list->id}}" class="size-7 flex items-center justify-center gap-x-2 text-xs font-medium rounded-full border border-transparent bg-gray-200 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
                                            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil lucide-icon customizable">
                                                <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                                                <path d="m15 5 4 4"></path>
                                            </svg>
                                        </button>
                                        <button type="button" data-hs-overlay="#hs-delete-{{$list->id}}" class="size-7 flex items-center justify-center gap-x-2 text-xs font-medium rounded-full border border-transparent bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:bg-red-600 disabled:opacity-50 disabled:pointer-events-none">
                                            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash-2 lucide-icon customizable">
                                                <path d="M3 6h18"></path>
                                                <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                <line x1="10" x2="10" y1="11" y2="17"></line>
                                                <line x1="14" x2="14" y1="11" y2="17"></line>
                                            </svg>
                                        </button>
                                        @if($user->workspace_id!=$list->id)
                                        <form action="{{Route('workspace.swipe')}}" method="POST">
                                            @csrf
                                            <input type="text" name="id" id="id_sw" class="hidden" value="{{$list->id}}">
                                            <button type="submit" class="py-1 px-1.5 inline-flex items-center gap-x-2 text-xs font-medium rounded-full border border-transparent bg-blue-800 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                                Basculer
                                            </button>
                                        </form>
                                        @endif
                                    </td>
                                </tr>

                                <!-- Modal -->
                                <div id="hs-edit-{{$list->id}}" class="hs-overlay hs-overlay-backdrop-open:bg-blue-950/90 hidden size-full fixed top-0 start-0 z-[81] overflow-x-hidden overflow-y-auto" role="dialog" tabindex="-1" aria-labelledby="hs-workspace-add-label">
                                    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                        <div class="bg-white border border-gray-200 rounded-xl shadow-sm pointer-events-auto dark:bg-neutral-900 dark:border-neutral-800">
                                            <div class="p-4 sm:p-7">
                                                <div class="text-center">
                                                    <h3 id="hs-workspace-add-label" class="block text-xl sm:text-2xl font-semibold text-gray-800 dark:text-neutral-200">
                                                        Modifier le Workspace
                                                    </h3>
                                                    <div class="max-w-sm mx-auto">
                                                        <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
                                                            Mettre à jour le nom de votre espace de Travail "Workspace"
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="mt-8 sm:mt-10">
                                                    <form action="{{Route('workspace-edit')}}" method="POST">
                                                        @csrf
                                                        <div class="mb-2">
                                                            <div>
                                                                <label for="name_ed" class="block text-sm font-medium mb-2 dark:text-white">Nom du Workspace</label>
                                                                <div class="relative">
                                                                    <input type="text" id="name_ed" name="name" value="{{$list->name}}" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="">
                                                                </div>
                                                            </div>

                                                            <input type="hidden" name="id" value="{{$list->id}}">
                                                        </div>
                                                        <button type="submit" id="sb_btn2" class="hidden focus:outline-none bg-primary-500 text-white hover:bg-transparent hover:text-primary-500 border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-sm font-medium py-1 px-3 rounded mb-1">Submit</button>
                                                    </form>
                                                </div>
                                            </div>

                                            <!-- Footer -->
                                            <div class="flex justify-end items-center dark:bg-neutral-800 rounded-b-xl gap-x-2 p-4 sm:px-7 border-t dark:border-neutral-800">
                                                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" data-hs-overlay="#hs-edit-{{$list->id}}">
                                                    Quitter
                                                </button>
                                                <button type="button" onclick="$('#sb_btn2').click();" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-blue-800 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-500 disabled:opacity-50 disabled:pointer-events-none" href="#">
                                                    Enregistré
                                                </button>
                                            </div>
                                            <!-- End Footer -->
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal -->
                                <div id="hs-delete-{{$list->id}}" class="hs-overlay hs-overlay-backdrop-open:bg-blue-950/90 hidden size-full fixed top-0 start-0 z-[81] overflow-x-hidden overflow-y-auto" role="dialog" tabindex="-1" aria-labelledby="hs-workspace-add-label">
                                    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-sm sm:w-full m-3 sm:mx-auto">
                                        <div class="bg-white border border-gray-200 rounded-xl shadow-sm pointer-events-auto dark:bg-neutral-900 dark:border-neutral-800">
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
                                                        En supprimant ce <strong>Workspace</strong> toutes les informations et opérations affiliés seront définitivement supprimé.
                                                    </p>

                                                    <form action="{{Route('workspace-delete')}}" method="POST">
                                                        @csrf
                                                        <div class="mb-2">
                                                            <input type="hidden" name="id" value="{{$list->id}}">
                                                        </div>
                                                        <div class="mt-6 grid gap-y-2">
                                                            <div type="button" class="py-2.5 px-4 mb-5 w-full inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-100 bg-blue-100 dark:bg-neutral-700 dark:border-neutral-700 text-gray-800 dark:text-neutral-100 shadow-sm disabled:opacity-50 disabled:pointer-events-none ">
                                                                {{$list->name}}
                                                            </div>
                                                            <button type="submit" class="py-2.5 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:bg-red-600 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#hs-sign-out-alert-small-window">
                                                                Supprimer
                                                            </button>
                                                            <button type="button" class="py-2 px-3 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full text-center border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" data-hs-overlay="#hs-delete-{{$list->id}}">
                                                                Quitter
                                                            </button>
                                                        </div>
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
    @endif
</div>

<!-- Modal -->
<div id="hs-workspace-add" class="hs-overlay hs-overlay-backdrop-open:bg-blue-950/90 hidden size-full fixed top-0 start-0 z-[81] overflow-x-hidden overflow-y-auto" role="dialog" tabindex="-1" aria-labelledby="hs-workspace-add-label">
    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm pointer-events-auto dark:bg-neutral-900 dark:border-neutral-800">
            <div class="p-4 sm:p-7">
                <div class="text-center">
                    <h3 id="hs-workspace-add-label" class="block text-xl sm:text-2xl font-semibold text-gray-800 dark:text-neutral-200">
                        Ajouter un Workspace
                    </h3>
                    <div class="max-w-sm mx-auto">
                        <p class="mt-2 text-sm text-gray-600 dark:text-neutral-400">
                            Ajouter et gérer distinctement toutes vos communications
                        </p>
                    </div>
                </div>

                <div class="mt-8 sm:mt-10 divide-y divide-gray-200 dark:divide-neutral-700">
                    <form action="{{Route('workspace-add')}}" method="POST">
                        @csrf

                        <div>
                            <label for="name" class="block text-sm font-medium mb-2 dark:text-white">Nom du Workspace</label>
                            <div class="relative">
                                <input type="text" id="name" name="name" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="">
                            </div>
                        </div>
                        <button type="submit" id="sb_btn" class="hidden focus:outline-none bg-primary-500 text-white hover:bg-transparent hover:text-primary-500 border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-sm font-medium py-1 px-3 rounded mb-1">Submit</button>
                    </form>
                </div>
            </div>

            <!-- Footer -->
            <div class="flex justify-end items-center bg-gray-100 dark:bg-neutral-800 rounded-b-xl gap-x-2 p-4 sm:px-7 border-t dark:border-neutral-800">
                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" data-hs-overlay="#hs-workspace-add">
                    Quitter
                </button>
                <button type="button" onclick="$('#sb_btn').click();" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-blue-800 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-500 disabled:opacity-50 disabled:pointer-events-none" href="#">
                    Ajouter maintenant
                </button>
            </div>
            <!-- End Footer -->
        </div>
    </div>
</div>
<!-- End Modal -->
@endsection