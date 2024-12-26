@extends('layouts.app')

@section('sidebar')
@include('portal.inc.sidebar')
@endsection

@section('navbar')
@include('portal.inc.navbar')
@endsection

@section('content')

<div>
    @if($notifications->isEmpty())
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
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-neutral-200">Notifications</h2>
            </div>
            <!-- Col -->
        </div>
        <!-- End Grid -->

        <div class="max-w-2xl mx-auto flex flex-col bg-white rounded-2xl p-4">
            <div class="h-screen overflow-y-auto">
                @foreach($notifications as $notif)
                <!-- Item -->
                <div class="flex gap-x-3">
                    <!-- Icon -->
                    <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-neutral-700">
                        <div class="relative z-10 size-7 flex justify-center items-center">
                            <div class="size-2 rounded-full bg-gray-400 dark:bg-neutral-600"></div>
                        </div>
                    </div>
                    <!-- End Icon -->

                    <!-- Right Content -->
                    <div class="grow pt-0.5 pb-8">
                        <h3 class="flex gap-x-1.5 font-semibold text-gray-800 dark:text-white">
                            {{$notif->title}}
                        </h3>
                        <p class="mt-1 text-sm text-gray-600 dark:text-neutral-400">
                            {{$notif->message}}
                        </p>
                        <p type="button" class="mt-1 -ms-1 p-1 inline-flex items-center gap-x-2 text-xs rounded-lg border border-transparent text-gray-400 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                            {{$notif->created_at}}
                        </p>
                    </div>
                    <!-- End Right Content -->
                </div>
                <!-- End Item -->
                @endforeach
            </div>
        </div>
    </div>
    @endif
</div>
@endsection