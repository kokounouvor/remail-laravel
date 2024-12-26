@extends('layouts.app')

@section('content')
<div>
    @include('layouts.alert')

    @if($workspaces->isEmpty())
    <div class="max-w-2xl mx-auto min-h-60 flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
        <div class="flex flex-auto flex-col justify-center items-center p-4 md:p-5">
            <svg class="size-20 text-gray-500 dark:text-neutral-500" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.4" d="M6.70001 18H4.15002C2.72002 18 2 17.28 2 15.85V4.15002C2 2.72002 2.72002 2 4.15002 2H8.45001C9.88001 2 10.6 2.72002 10.6 4.15002V6" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M17.3692 8.41998V19.58C17.3692 21.19 16.5692 22 14.9592 22H9.1192C7.5092 22 6.69922 21.19 6.69922 19.58V8.41998C6.69922 6.80998 7.5092 6 9.1192 6H14.9592C16.5692 6 17.3692 6.80998 17.3692 8.41998Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                <path opacity="0.4" d="M13.4004 6V4.15002C13.4004 2.72002 14.1204 2 15.5504 2H19.8503C21.2803 2 22.0004 2.72002 22.0004 4.15002V15.85C22.0004 17.28 21.2803 18 19.8503 18H17.3704" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                <path opacity="0.4" d="M10 11H14" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                <path opacity="0.4" d="M10 14H14" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M12 22V19" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

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
        <div class="mb-5 pb-5 flex justify-between items-center border-b border-gray-200 dark:border-neutral-700">
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-neutral-200">Workspaces</h2>
            </div>
            <!-- Col -->

            <div class="inline-flex gap-x-2">
                <a data-hs-overlay="#hs-workspace-add" class="cursor-pointer py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                <svg class="size-5" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 16V8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M14.9902 12H16.0002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8 12H11.81" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M12 16V8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M4 6C2.75 7.67 2 9.75 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2C10.57 2 9.2 2.3 7.97 2.85" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                   Ajouter
                </a>
            </div>
            <!-- Col -->
        </div>
        <!-- End Grid -->

        <div class="max-w-2xl mx-auto flex flex-col">
            <div class="-m-1.5 overflow-x-auto bg-white shadow-sm rounded-xl">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="border rounded-xl overflow-hidden dark:border-neutral-700">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">ID</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Nom</th>
                                    <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Date</th>
                                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                @foreach($workspaces as $list)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">
                                        {{$list->id}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                        {{$list->name}}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">
                                        {{$list->created_at}}
                                    </td>
                                    <td class="flex gap-x-2 items-center px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a href="#" data-hs-overlay="#hs-edit-{{$list->id}}">
                                            <svg class="size-6" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.4" d="M11 2H9C4 2 2 4 2 9V15C2 20 4 22 9 22H15C20 22 22 20 22 15V13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M16.0399 3.01976L8.15988 10.8998C7.85988 11.1998 7.55988 11.7898 7.49988 12.2198L7.06988 15.2298C6.90988 16.3198 7.67988 17.0798 8.76988 16.9298L11.7799 16.4998C12.1999 16.4398 12.7899 16.1398 13.0999 15.8398L20.9799 7.95976C22.3399 6.59976 22.9799 5.01976 20.9799 3.01976C18.9799 1.01976 17.3999 1.65976 16.0399 3.01976Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                <path opacity="0.4" d="M14.9102 4.1499C15.5802 6.5399 17.4502 8.4099 19.8502 9.0899" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                        <a href="#" data-hs-overlay="#hs-delete-{{$list->id}}">
                                            <svg class="size-6 text-red-500" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.65">
                                                    <path d="M9.17 4a3.001 3.001 0 0 1 5.66 0" opacity="0.5" />
                                                    <path d="M20.5 6h-17m15.333 2.5l-.46 6.9c-.177 2.654-.265 3.981-1.13 4.79s-2.195.81-4.856.81h-.774c-2.66 0-3.99 0-4.856-.81c-.865-.809-.953-2.136-1.13-4.79l-.46-6.9" />
                                                    <path d="m9.5 11l.5 5m4.5-5l-.5 5" opacity="0.5" />
                                                </g>
                                            </svg>
                                        </a>
                                        @if($user->workspace_id!=$list->id)
                                        <form action="{{Route('workspace.swipe')}}" method="POST">
                                            @csrf
                                            <input type="text" name="id" id="id_sw" class="hidden" value="{{$list->id}}">
                                            <button type="submit" class="py-1 px-1.5 inline-flex items-center gap-x-2 text-xs font-medium rounded-full border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                                Basculer
                                            </button>
                                        </form>
                                        @endif
                                    </td>
                                </tr>

                                <!-- Modal -->
                                <div id="hs-edit-{{$list->id}}" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto" role="dialog" tabindex="-1" aria-labelledby="hs-workspace-add-label">
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
                                            <div class="flex justify-end items-center gap-x-2 p-4 sm:px-7 border-t dark:border-neutral-800">
                                                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" data-hs-overlay="#hs-edit-{{$list->id}}">
                                                    Quitter
                                                </button>
                                                <button type="button" onclick="$('#sb_btn2').click();" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-500 text-white hover:bg-blue-500 focus:outline-none focus:bg-blue-500 disabled:opacity-50 disabled:pointer-events-none" href="#">
                                                    Enregistré
                                                </button>
                                            </div>
                                            <!-- End Footer -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End Modal -->

                                <!-- Modal -->
                                <div id="hs-delete-{{$list->id}}" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto" role="dialog" tabindex="-1" aria-labelledby="hs-workspace-add-label">
                                    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-sm sm:w-full m-3 sm:mx-auto">
                                        <div class="bg-white border border-gray-200 rounded-xl shadow-sm pointer-events-auto dark:bg-neutral-900 dark:border-neutral-800">
                                            <div class="p-4 sm:p-7">

                                                <div class="p-4 sm:p-10 text-center overflow-y-auto">
                                                    <!-- Icon -->
                                                    <span class="mb-4 inline-flex justify-center items-center size-[62px] rounded-full border-4 border-blue-50 bg-blue-100 text-blue-500 dark:bg-blue-700 dark:border-blue-600 dark:text-blue-100">
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
                                                            <div type="button" class="py-2.5 px-4 mb-5 w-full inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-100 bg-gray-100 text-gray-800 shadow-sm disabled:opacity-50 disabled:pointer-events-none ">
                                                                {{$list->name}}
                                                            </div>
                                                            <button type="submit" class="py-2.5 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:bg-blue-600 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#hs-sign-out-alert-small-window">
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
                                <!-- End Modal -->

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
<div id="hs-workspace-add" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto" role="dialog" tabindex="-1" aria-labelledby="hs-workspace-add-label">
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
            <div class="flex justify-end items-center bg-gray-100 rounded-b-xl gap-x-2 p-4 sm:px-7 border-t dark:border-neutral-800">
                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" data-hs-overlay="#hs-workspace-add">
                    Quitter
                </button>
                <button type="button" onclick="$('#sb_btn').click();" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-blue-500 text-white hover:bg-blue-500 focus:outline-none focus:bg-blue-500 disabled:opacity-50 disabled:pointer-events-none" href="#">
                    Ajouter maintenant
                </button>
            </div>
            <!-- End Footer -->
        </div>
    </div>
</div>
<!-- End Modal -->


<div class="modal animate-ModalSlide hidden" id="importContact">
    <div class="relative w-auto pointer-events-none sm:max-w-lg sm:my-0 sm:mx-auto z-[99] flex items-center h-[calc(100%-3.5rem)]">
        <div class="relative flex flex-col w-full pointer-events-auto bg-white dark:bg-slate-800 bg-clip-padding rounded">
            <div class="flex shrink-0 items-center justify-between py-2 px-4 rounded-t border-b border-solid dark:border-gray-700 bg-slate-800">
                <h6 class="mb-0 leading-4 text-base font-semibold text-slate-300 mt-0" id="staticBackdropLabel1">Import via CSV file</h6>
                <button type="button" class="box-content w-4 h-4 p-1 bg-slate-700/60 rounded-full text-slate-300 leading-4 text-xl close" aria-label="Close" data-fc-dismiss>&times;</button>
            </div>
            <div class="relative flex-auto p-4 text-slate-600 dark:text-gray-300 leading-relaxed">
                <p>
                    <strong>CSV format:</strong> Format your CSV the same way as the example below (with the first title row). Use the ID or email columns if you want to update a Subscriber instead of creating it.
                </p>

                <form action="{{Route('import-csv')}}" method="POST" id="form_login" class="" enctype="multipart/form-data">
                    @csrf
                    <div class="py-5">
                        <input type="file" name="file" accept=".csv, .txt" />
                    </div>
                    <div class="py-5">
                        <select name="tag" class="w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                            <option value="un">United States</option>
                        </select>
                    </div>
                    <button type="submit" class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-sm font-medium py-1 px-3 rounded mb-1">Submit</button>
                    <button type="text" class="inline-block focus:outline-none text-blue-500 hover:bg-blue-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-blue-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-blue-500  text-sm font-medium py-1 px-3 rounded mb-1">Cancel</button>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection