<nav x-data="{ open: false }" class="sticky-top shadow" style="background-color: #D9D9D9;">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="nav-link active text-dark">
                        <img loading="lazy" src="{{ asset('images\Remove-bg.ai_1728055522545.png') }}" alt="" width="100">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex pl-6">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-dark">
                        {{ __('HOME') }}
                    </x-nav-link>
                    <x-nav-link :href="route('courses')" :active="request()->routeIs('courses')" class="text-dark">
                        {{ __('COURSES') }}
                    </x-nav-link>
                    <x-nav-link :href="route('teachers')" :active="request()->routeIs('teachers')" class="text-dark">
                        {{ __('TEACHERS') }}
                    </x-nav-link>
                    <x-nav-link :href="route('myclasses')" :active="request()->routeIs('myclasses')" class="text-dark">
                        {{ __('MY CLASSES') }}
                    </x-nav-link>
                </div>
                
            </div>

            @guest
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('login')" class="text-dark">
                        {{ __('LOGIN') }}
                    </x-nav-link>
                    <x-nav-link :href="route('register')" class="text-dark">
                        {{ __('REGISTER') }}
                    </x-nav-link>
                </div>
            @endguest

            <!-- Settings Dropdown -->
            @auth
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')" class="text-dark">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();" class="text-dark">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            
                <!-- Hamburger -->
                <div class="-me-2 flex items-center sm:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            @endauth
            @guest
                <div class="-me-2 flex items-center sm:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>   
                </div>
            @endguest
        </div>
    </div>

    @guest
        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-2 pb-2 space-y-1">
                <div class="alert alert-danger text-decoration-none m-2 text-gray-700 fw-bold">
                    {{ __("Please login/register your account!") }}
                </div>
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-4 border-t border-b border-gray-200 bg-gray-700">
                <div class="mt-none space-y-1">
                    <x-responsive-nav-link :href="route('login')">
                        {{ __('Login') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('register')">
                        {{ __('Register') }}
                    </x-responsive-nav-link>
                </div>
                <div class="mt-4 space-y-1">
                    <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('HOME') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('courses')" :active="request()->routeIs('courses')">
                        {{ __('COURSES') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('teachers')" :active="request()->routeIs('teachers')">
                        {{ __('TEACHERS') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('myclasses')" :active="request()->routeIs('myclasses')">
                        {{ __('MY CLASSES') }}
                    </x-responsive-nav-link>
                </div>
            </div>
        </div>
    @endguest

    @auth
        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1 bg-gray-700">
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('HOME') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('courses')" :active="request()->routeIs('courses')">
                    {{ __('COURSES') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('teachers')" :active="request()->routeIs('teachers')">
                    {{ __('TEACHERS') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('myclasses')" :active="request()->routeIs('myclasses')">
                    {{ __('MY CLASSES') }}
                </x-responsive-nav-link>
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-4 border-t border-b border-gray-200 bg-gray-700">
                <div class="px-4">
                    <div class="font-medium text-base text-white">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-dark">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        </div>
    @endauth
</nav>
