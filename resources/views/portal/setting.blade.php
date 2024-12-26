@extends('layouts.app')

@section('content')
@include('layouts.alert')
<div class="max-w-3xl px-4 py-5 sm:px-6 lg:px-8 mx-auto">
    <!-- Card -->
    <div class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-neutral-900">
        <form action="{{Route('setting_password_change')}}" method="post">
            @csrf
            <!-- Section -->
            <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
                <div class="sm:col-span-12">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
                        Modifier votre mot de passe
                    </h2>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                    <label for="old_password" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                        Ancien Mot de passe
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                    <input name="old_password" id="old_password" type="password" class="py-2 px-3 pe-11 block w-full border-gray-200 text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                    <label for="new_password" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                        Nouveau mot de passe
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                    <input name="new_password" id="new_password" type="password" class="py-2 px-3 pe-11 block w-full border-gray-200 text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                </div>
                <!-- End Col -->
            </div>
            <!-- End Section -->
            <button type="submit" class="py-2 mb-5 px-5 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                Soumettre
            </button>
        </form>

        <form action="{{Route('setting_personal_data')}}" method="POST">
            @csrf
            <!-- Section -->
            <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
                <div class="sm:col-span-12">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-neutral-200">
                        informations personnelles
                    </h2>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                    <label for="name" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                        Nom complet
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                    <input name="name" id="name" type="text" value="{{$user->name}}" class="py-2 px-3 pe-11 block w-full border-gray-200 text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                    <label for="email" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                        Email
                    </label>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                    <input name="email" id="email" type="email" value="{{$user->email}}" class="py-2 px-3 pe-11 block w-full border-gray-200 text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                </div>
                <!-- End Col -->

                <div class="sm:col-span-3">
                    <div class="inline-block">
                        <label for="company" class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                            Entreprise
                        </label>
                    </div>
                </div>
                <!-- End Col -->

                <div class="sm:col-span-9">
                    <input name="company" type="text" value="{{$user->company}}" class="py-2 px-3 pe-11 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                </div>
                <!-- End Col -->
            </div>
            <!-- End Section -->
            <button type="submit" class="py-2 mb-5 px-5 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                Soumettre
            </button>
        </form>
    </div>
    <!-- End Card -->
</div>
@endsection