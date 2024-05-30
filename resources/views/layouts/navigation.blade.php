<nav x-data="{ open: false }" class="bgc-primary border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Trang Chủ') }}
                    </x-nav-link>

                    <!-- Introduction Dropdown -->
                    <div class="hidden sm:flex sm:items-center sm:ms-6">
                        <x-dropdown align="left" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2 text-xm leading-5 font-medium rounded-md text-white bgc-primary hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    <div>{{'Giới thiệu'}}</div>

                                    <div class="ms-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('introduction')">
                                    {{ __('Giới thiệu chung') }}
                                </x-dropdown-link>

                                <x-dropdown-link :href="route('contact')">
                                    {{ __('Liên hệ') }}
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </div>

                    <x-nav-link :href="route('teaching')" :active="request()->routeIs('teaching')">
                        {{ __('Giảng dạy') }}
                    </x-nav-link>

                    <x-nav-link :href="route('result')" :active="request()->routeIs('result')">
                        {{ __('Chấm thi, nhập điểm') }}
                    </x-nav-link>

                    <x-nav-link :href="route('category')" :active="request()->routeIs('category')">
                        {{ __('Danh mục') }}
                    </x-nav-link>

                </div>
            </div>

            <!-- Settings Dropdown: User-->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 text-sm leading-4 font-medium rounded-md text-white bgc-primary hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->HoDem . ' ' . Auth::user()->Ten }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.index')">
                            {{ __('Đổi mật khẩu') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Đăng xuất') }}
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
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Trang chủ') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('introduction')" :active="request()->routeIs('introduction')">
                {{ __('Giới Thiệu') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('teaching')" :active="request()->routeIs('teaching')">
                {{ __('Giảng dạy') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('result')" :active="request()->routeIs('result')">
                {{ __('Chấm thi, nhập điểm') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('category')" :active="request()->routeIs('category')">
                {{ __('Danh mục') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base ">{{ Auth::user()->HoDem . ' ' . Auth::user()->Ten }}</div>
                <div class="font-medium text-sm text-gray-700">{{ Auth::user()->Email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-dropdown-link :href="route('profile.index')">
                    {{ __('Đổi mật khẩu') }}
                </x-dropdown-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Đăng xuất') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
