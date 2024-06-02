<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="drawer lg:drawer-open overflow-x-hidden">
            <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content flex flex-col">
                <!-- Navbar -->
                <div class="navbar bg-base-300 w-full justify-between p-0">
                    <div class="flex lg:hidden">
                        <label class="btn btn-square btn-ghost lg:hidden" for="my-drawer-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </label>
                    </div>
                        <!-- Title -->
                        @if (isset($header))
                            <header >
                                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                    {{ $header }}
                                </div>
                            </header>
                        @endif

                        <div class="dropdown dropdown-end mr-5">
                            <div class="flex flex-row-reverse items-center">
                                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                        <div class="w-10 rounded-full">
                                            <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                        </div>
                                    @else
                                    <div class="w-10 rounded-full bg-slate-600">
                                            <span class="text-4xl text-white">A</span>
                                    </div>
                                    @endif
                                </div>
                            <div>
                                <div class="font-medium text-base text-gray-800 text-right">{{ Auth::user()->name }}</div>
                                <div class="font-medium text-sm text-gray-500 text-right">{{ Auth::user()->email }}</div>
                            </div>
                            </div>
                            
                            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                                <!-- Teams Dropdown -->
                                <li>    
                                    <a href="{{ route('profile.show') }}" class="{{ request()->routeIs('profile.show') ? 'active' : '' }}">
                                        {{ __('Profile') }}
                                    </a>
                                </li>
                                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                                    <li>
                                        <a href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" class="{{ request()->routeIs('teams.show') ? 'active' : '' }}">
                                            {{ __('Team Settings') }}
                                        </a>
                                    </li>
                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <li>
                                            <a href="{{ route('teams.create') }}" class="{{ request()->routeIs('teams.create') ? 'active' : '' }}">
                                                {{ __('Create New Team') }}
                                            </a>
                                        </li>
                                    @endcan
                                    @if (Auth::user()->allTeams()->count() > 1)
                                        <li class="menu-title">
                                            <span>{{ __('Switch Teams') }}</span>
                                        </li>
                                        @foreach (Auth::user()->allTeams() as $team)
                                            <li>
                                                <a href="#" class="{{ $team->id === Auth::user()->currentTeam->id ? 'active' : '' }}">
                                                    {{ $team->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    @endif
                                @endif

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <li>
                                        <a href="{{ route('api-tokens.index') }}" class="{{ request()->routeIs('api-tokens.index') ? 'active' : '' }}">
                                            {{ __('API Tokens') }}
                                        </a>
                                    </li>
                                @endif
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="hover:bg-transparent">
                                            {{ __('Log Out') }}
                                        </a>
                                    </form>
                                </li>
                            </ul>
                            </div>
                        </div>

                <!-- endNavbar -->

                
                <main class="w-full">
                    {{$slot}}
                </main>

                <!-- Page content here -->
            </div>
            <div class="drawer-side min-h-full ">
                <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
                <ul class="menu p-4 w-72 min-h-full bg-base-200 text-base-content">
                    <!-- Sidebar content here -->

                    <h1 class="text-3xl font-extrabold mb-5 flex justify-center">DB WARUNG</h1>
    
                    <li>
                        <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                            {{ __('Dashboard') }}
                        </a>
                    </li>
                    <li>
                        <details open>
                            <summary>Keanggotaan</summary>
                            <ul>
                              <li>
                                <a href="{{ route('keanggotaan/group') }}" class="{{ request()->routeIs('keanggotaan/group') ? 'active' : '' }}">
                                    {{ __('Group') }}
                                </a>
                              </li>
                              <li>
                                <a href="{{ route('keanggotaan/member') }}" class="{{ request()->routeIs('keanggotaan/member') ? 'active' : '' }}">
                                {{ __('Data Anggota') }}
                                </a>
                              </li>
                            </ul>
                          </details>
                    </li>
                    <li>
                        <a href="{{ route('barang') }}" class="{{ request()->routeIs('barang') ? 'active' : '' }}">
                            {{ __('Barang') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('paket') }}" class="{{ request()->routeIs('paket') ? 'active' : '' }}">
                            {{ __('Paket') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('faktur') }}" class="{{ request()->routeIs('faktur') ? 'active' : '' }}">
                            {{ __('Faktur') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('iuran') }}" class="{{ request()->routeIs('iuran') ? 'active' : '' }}">
                            {{ __('Iuran') }}
                        </a>
                    </li>


        @stack('modals')

        @livewireScripts

        
    </body>
</html>



{{-- ModalMessageStatus --}}
@if(session('success'))
<dialog id="success" class="modal">
    <label class="modal-box" for="">
        <div class="flex justify-center">
            <svg class="text-green-500 w-28 h-28 animate-fade-in-down" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>
        <h1 class="flex justify-center font-bold text-2xl">{{session('success')}}</h1>
    </label>
    <form method="dialog" class="modal-backdrop">
      <button>close</button>
    </form>
</dialog>
<script>
    document.getElementById("success").showModal();
</script>

@elseif(session('error'))
<dialog id="success" class="modal">
    <label class="modal-box" for="">
        <div class="flex justify-center">
            <svg class="text-red-500 w-28 h-28 animate-fade-in-down" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>
        <h1 class="flex justify-center font-bold text-2xl">{{session('error')}}</h1>
    </label>
    <form method="dialog" class="modal-backdrop">
      <button>close</button>
    </form>
</dialog>
<script>
    document.getElementById("error").showModal();
</script>
@endif
{{-- endModalMessageStatus --}}

