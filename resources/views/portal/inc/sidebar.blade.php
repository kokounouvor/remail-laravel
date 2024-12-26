<div id="hs-application-sidebar" class="hs-overlay [--auto-close:lg] hs-overlay-open:translate-x-0 -translate-x-full duration-300 transform hidden fixed top-0 start-0 bottom-0 z-[60] w-64 bg-gray-100 border-e border-gray-200 overflow-y-auto lg:block lg:translate-x-0 lg:end-auto lg:bottom-0 [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700" role="dialog" tabindex="-1" aria-label="Sidebar">
  <nav class="size-full flex flex-col">
    <div class="flex items-center justify-between pt-4 pe-4 ps-7">
      <!-- Logo -->
      <a class="flex-none focus:outline-none focus:opacity-80" href="../../examples/html/ai-with-sidebar.html" aria-label="Preline">
        <img src="/assets/img/logo/blue.png" class="size-8 w-full" alt="">
      </a>
      <!-- End Logo -->
    </div>

    <div class="h-full mt-6">
      <!-- List -->
      <ul class="space-y-1.5 p-4">
        <li>
          <a href="{{Route('dashboard')}}" class="flex items-center gap-x-2 py-2 px-3 @if(Route::currentRouteName() == 'dashboard') bg-white @endif text-sm text-gray-700 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-900 dark:hover:text-neutral-300 dark:focus:bg-neutral-900 dark:focus:text-neutral-300">
            <svg class="shrink-0 size-6" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M3.35929 19.2401C3.59929 20.6601 4.95928 21.8101 6.39928 21.8101H17.5993C19.0293 21.8101 20.3993 20.6501 20.6393 19.2401L21.9693 11.2801C22.1293 10.3001 21.6293 8.99008 20.8593 8.37008L13.9293 2.8301C12.8593 1.9701 11.1293 1.97009 10.0693 2.82009L3.13929 8.37008C2.35929 8.99008 1.85929 10.3001 2.02929 11.2801L2.7093 15.3701" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M12 10.5C10.62 10.5 9.5 11.62 9.5 13C9.5 14.38 10.62 15.5 12 15.5C13.38 15.5 14.5 14.38 14.5 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

            Tableau de bord
          </a>
        </li>
        <li>
          <a href="{{Route('workspace')}}" class="flex items-center gap-x-2 py-2 px-3 @if(Route::currentRouteName() == 'workspace') bg-white @endif rounded-xl text-sm text-gray-700 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-900 dark:hover:text-neutral-300 dark:focus:bg-neutral-900 dark:focus:text-neutral-300">
            <svg class="shrink-0 size-6" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1.9707 5.95035V5.09035C1.9707 2.47035 3.9207 1.28035 6.3107 2.45035L10.7507 4.63035C11.7107 5.10035 12.5007 6.35035 12.5007 7.41035V22.0003H4.0807C2.9207 22.0003 1.9707 21.0703 1.9707 19.9303V10.0203" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M21.97 15.0619V18.8419C21.97 21.0019 20.97 22.0019 18.81 22.0019H12.5V10.4219L12.97 10.5219L17.47 11.5319L19.5 11.9819C20.82 12.2719 21.9 12.9519 21.96 14.8719C21.97 14.9319 21.97 14.9919 21.97 15.0619Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M5.5 9H8.97" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M5.5 13H8.97" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M17.4707 11.5295V14.7495C17.4707 15.9895 16.4607 16.9995 15.2207 16.9995C13.9807 16.9995 12.9707 15.9895 12.9707 14.7495V10.5195L17.4707 11.5295Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M21.9607 14.8713C21.9007 16.0513 20.9207 17.0013 19.7207 17.0013C18.4807 17.0013 17.4707 15.9913 17.4707 14.7513V11.5312L19.5007 11.9812C20.8207 12.2712 21.9007 12.9513 21.9607 14.8713Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

            Workspace
          </a>
        </li>
        <li>
          <a href="{{Route('templates')}}" class="flex items-center gap-x-2 py-2 px-3 text-sm @if(Route::currentRouteName() == 'templates') bg-white @endif text-gray-700 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-900 dark:hover:text-neutral-300 dark:focus:bg-neutral-900 dark:focus:text-neutral-300">
            <svg class="shrink-0 size-6" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7 12C3 12 3 13.79 3 16V17C3 19.76 3 22 8 22H16C20 22 21 19.76 21 17V16C21 13.79 21 12 17 12C16 12 15.72 12.21 15.2 12.6L14.18 13.68C13 14.94 11 14.94 9.81 13.68L8.8 12.6C8.28 12.21 8 12 7 12Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M5 9.96094V12.0009" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M19 12V6C19 3.79 19 2 15 2H9C5 2 5 3.79 5 6" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M10.3281 9.19922H13.6581" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M13.6602 6.19922H14.5002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M9.5 6.19922H11.08" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

            Templates Email
          </a>
        </li>
        <li>
          <a href="{{Route('subscribers')}}" class="flex items-center gap-x-2 py-2 px-3 text-sm @if(Route::currentRouteName() == 'subscribers') bg-white @endif text-gray-700 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-900 dark:hover:text-neutral-300 dark:focus:bg-neutral-900 dark:focus:text-neutral-300">
            <svg class="shrink-0 size-6" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.4299 2.42C11.3999 1.86 12.5999 1.86 13.5799 2.42L19.5199 5.84999C20.4899 6.40999 21.0899 7.45003 21.0899 8.58003V15.42C21.0899 16.54 20.4899 17.58 19.5199 18.15L13.5799 21.58C12.6099 22.14 11.4099 22.14 10.4299 21.58L4.48992 18.15C3.51992 17.59 2.91992 16.55 2.91992 15.42V8.58003C2.91992 7.46003 3.51992 6.41999 4.48992 5.84999L6.38992 4.75002" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M11.9999 11.0001C13.2867 11.0001 14.3299 9.95687 14.3299 8.67004C14.3299 7.38322 13.2867 6.34009 11.9999 6.34009C10.7131 6.34009 9.66992 7.38322 9.66992 8.67004C9.66992 9.95687 10.7131 11.0001 11.9999 11.0001Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M16 16.6601C16 14.8601 14.21 13.4001 12 13.4001C9.79 13.4001 8 14.8601 8 16.6601" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

            Contacts & Segments
          </a>
        </li>
        <li>
          <a href="{{Route('campaigns')}}" class="flex items-center gap-x-2 py-2 px-3 text-sm @if(Route::currentRouteName() == 'campaigns') bg-white @endif text-gray-700 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-900 dark:hover:text-neutral-300 dark:focus:bg-neutral-900 dark:focus:text-neutral-300">
            <svg class="shrink-0 size-6 text-blue-600" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M15.8897 3.48991C19.6997 2.21991 21.7697 4.29991 20.5097 8.10991L17.6797 16.5999C15.7797 22.3099 12.6597 22.3099 10.7597 16.5999L9.91969 14.0799L7.39969 13.2399C1.68969 11.3399 1.68969 8.22991 7.39969 6.31991L11.9997 4.78991" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M10.1094 13.6501L13.6894 10.0601" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

            <span class="bg-clip-text bg-gradient-to-tl from-blue-600 to-violet-600 text-transparent">Mes campagnes</span>
          </a>
        </li>
      </ul>
      <!-- End List -->
    </div>

    <!-- Footer -->
    <div class="mt-auto">
      <div class="py-2.5 px-7 space-y-1">
        @if($swipers->isEmpty())
        <p class="text-xs text-gray-600">Cet action est primordiale.</p>
        <a href="{{Route('workspace')}}" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
          Ajouter un Workspace
        </a>
        @else
        <form action="{{Route('workspace.swipe')}}" method="POST">
          @csrf
          <input type="text" name="id" id="id_sw" class="hidden">
          <div class="relative">
            <select onchange="$('#id_sw').val($('#swipe_id').val());$('#btn_swipe').click();" id="swipe_id" class="peer p-4 pe-9 block w-full border-gray-200 rounded-xl text-blue-600 font-semibold shadow-sm text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:ring-neutral-600focus:pt-6 focus:pb-2 [&:not(:placeholder-shown)]:pt-6 [&:not(:placeholder-shown)]:pb-2 autofill:pt-6 autofill:pb-2">
              @foreach($swipers as $ac)
              <option value="{{$ac->id}}" @if($ac->id==$user->workspace_id) selected="" @endif> {{$ac->name}} </option>
              @endforeach
            </select>
            <label class="absolute top-0 start-0 p-4 h-full truncate pointer-events-none transition ease-in-out duration-100 border border-transparent dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none peer-focus:text-xs peer-focus:-translate-y-1.5 peer-focus:text-gray-500 dark:peer-focus:text-neutral-500 peer-[:not(:placeholder-shown)]:text-xs peer-[:not(:placeholder-shown)]:-translate-y-1.5 peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-neutral-500 dark:text-neutral-500">Workspace Actuel</label>
          </div>
          <button type="submit" id="btn_swipe" class="hidden"></button>
        </form>
        @endif
        <!-- End Floating Select -->
      </div>

      <div class="py-3 px-7 border-t border-gray-200 dark:border-neutral-700">
        <!-- Dropdown -->
        <div class="hs-dropdown [--placement:bottom-right] relative">
          <div class="shrink-0 group block cursor-pointer">
            <div class="flex items-center">
              <img class="inline-block shrink-0 size-[38px] rounded-full" src="/assets/img/160x160/img1.jpg" alt="Avatar">
              <div class="ms-3">
                <h3 class="font-semibold text-sm text-gray-800 dark:text-white">{{$user->name}}</h3>
                <p class="text-xs font-medium text-gray-400 dark:text-neutral-500">{{$user->email}}</p>
              </div>
            </div>
          </div>
          <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-xl border border-gray-200 rounded-lg mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full" role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-account">
            <div class="py-3 px-5 bg-gray-100 rounded-t-lg dark:bg-neutral-700">
              <p class="text-sm text-gray-500 dark:text-neutral-500">Signed in as</p>
              <p class="text-sm font-medium text-gray-800 dark:text-neutral-200">james@site.com</p>
            </div>
            <div class="p-1.5 space-y-0.5">
              <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z" />
                  <path d="M3 6h18" />
                  <path d="M16 10a4 4 0 0 1-8 0" />
                </svg>
                Parametres
              </a>
              <a href="{{Route('/emails/services')}}" class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242" />
                  <path d="M12 12v9" />
                  <path d="m8 17 4 4 4-4" />
                </svg>
                Services Email
              </a>
              <a href="{{Route('logout')}}" class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                  <circle cx="9" cy="7" r="4" />
                  <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                  <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                </svg>
                Déconnexion
              </a>
            </div>
          </div>
        </div>
        <!-- End Dropdown -->
      </div>
    </div>
    <!-- End Footer -->
  </nav>
</div>