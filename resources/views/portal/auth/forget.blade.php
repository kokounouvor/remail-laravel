@extends('layouts.auth')

@section('content')
<div class="max-w-sm mx-auto mt-7 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-neutral-900 dark:border-neutral-700">
    <div class="p-4 sm:p-7">
        <div class="text-center">
            <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Mot de passe oublié</h1>
        </div>
        <div class="py-1">
            @include('layouts.alert')
        </div>
        <div class="mt-8">
            <!-- Form -->
            <form action="{{Route('auth.forget-demand')}}" method="POST" id="form_login">
                @csrf
                <div class="grid gap-y-4">
                    <!-- Form Group -->
                    <div>
                        <label for="email" class="block text-sm mb-2 dark:text-white">Adresse Email</label>
                        <div class="relative">
                            <input type="email" id="email" name="email" class="py-2 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-800 focus:ring-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" requiblue aria-describedby="email-error">
                            <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                <svg class="size-5 text-blue-800" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <!-- End Form Group -->
                    <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-blue-800 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Soumettre</button>
                </div>
            </form>
            <!-- End Form -->
        </div>
    </div>
</div>
<p class="mt-2 text-sm text-white text-center py-5 dark:text-neutral-400">
    Retourner à la page de 
    <a href="{{Route('auth.login')}}" class="text-blue-500 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-800" href="../examples/html/signup.html">
       connexion
    </a>
</p>
@endsection