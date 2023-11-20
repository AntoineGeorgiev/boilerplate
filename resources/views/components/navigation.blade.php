<div>
    <aside
            :class="menuOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
            class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 bg-secondary lg:translate-x-0 lg:inset-0 custom-scrollbar"
        >
            <!-- start::Logo -->
            <div class="flex items-center justify-center h-16 bg-black bg-opacity-30">
                <h1 class="text-lg font-bold tracking-widest text-gray-100 uppercase">
                    {{ __('Template') }}
                </h1>
            </div>
            <!-- end::Logo -->

            <!-- start::Navigation -->
            <nav class="py-10 custom-scrollbar">
                <!-- start::Menu link -->
                <x-menu.nav-link
                    href=""
                    :leadingIcon=true
                    @class([ 'bg-black bg-opacity-30' => request()->is('dashboard')])
                >
                    <x-slot name="leadingIcon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class="linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </x-slot>

                    {{ __('Dashboard') }}
                </x-menu.nav-link>
                <!-- end::Menu link -->

                <x-menu.caption>
                    {{ __('Apps') }}
                </x-menu.caption>

                <x-menu.nav-link-down>
                    <x-slot name="leadingIcon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                        </svg>
                    </x-slot>

                    <!-- start::Submenu link -->
                    <x-menu.nav-link-sub
                        href="./../email/inbox.html"
                    >
                        {{ __('Inbox') }}
                    </x-menu.nav-link-sub>
                    <!-- end::Submenu link -->

                    <!-- start::Submenu link -->
                    <x-menu.nav-link-sub
                        href="./../email/viewMessage.html"
                    >
                        {{ __('View Message') }}
                    </x-menu.nav-link-sub>
                    <!-- end::Submenu link -->

                    <!-- start::Submenu link -->
                    <x-menu.nav-link-sub
                        href="./../email/newMessage.html"
                    >
                        {{ __('Compose') }}
                    </x-menu.nav-link-sub>
                    <!-- end::Submenu link -->
                </x-menu.nav-link-down>

                <!-- start::Menu link -->
                <x-menu.nav-link
                    href="./../messages.html"
                    :leadingIcon=true
                >
                    <x-slot name="leadingIcon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class="linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                        </svg>
                    </x-slot>

                    {{ __('Messages') }}
                </x-menu.nav-link>
                <!-- end::Menu link -->

                <x-menu.nav-link
                    href="./../calendar.html"
                    :leadingIcon=true
                >
                    <x-slot name="leadingIcon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class="linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </x-slot>

                    {{ __('Calendar') }}
                </x-menu.nav-link>
                <!-- end::Menu link -->

                <x-menu.caption>
                    {{ __('Components') }}
                </x-menu.caption>

                <!-- start::Menu link -->
                <div
                    x-data="{ linkHover: false, linkActive: false }"
                >
                    <div
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        @click = "linkActive = !linkActive"
                        class="flex items-center justify-between px-6 py-3 text-gray-400 transition duration-200 cursor-pointer hover:text-gray-100 hover:bg-black hover:bg-opacity-30"
                        :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
                    >
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span class="ml-3">{{ __('User Interface') }}e</span>
                        </div>
                        <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                    <!-- start::Submenu -->
                    <ul
                        x-show="linkActive"
                        x-cloak
                        x-collapse.duration.300ms
                        class="text-gray-400"
                    >
                        <!-- start::Submenu link -->
                        <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../ui/accordions.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Accordions') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../ui/alerts.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Alerts') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../ui/badges.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Badges') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../ui/breadcrumbs.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Breadcrumbs') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../ui/buttons.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Buttons') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../ui/cards.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Cards') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../ui/count_up.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Count Up') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../ui/dropdowns.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Dropdowns') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../ui/pagination.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Pagination ') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../ui/tabs.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Tabs') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../ui/tooltips.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Tooltips') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->
                    </ul>
                    <!-- end::Submenu -->
                </div>
                <!-- end::Menu link -->

                <!-- start::Menu link -->
                <div
                    x-data="{ linkHover: false, linkActive: false }"
                >
                    <div
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        @click = "linkActive = !linkActive"
                        class="flex items-center justify-between px-6 py-3 text-gray-400 transition duration-200 cursor-pointer hover:text-gray-100 hover:bg-black hover:bg-opacity-30"
                        :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
                    >
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                            <span class="ml-3">{{ __('Forms') }}</span>
                        </div>
                        <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                    <!-- start::Submenu -->
                    <ul
                        x-show="linkActive"
                        x-cloak
                        x-collapse.duration.300ms
                        class="text-gray-400"
                    >
                        <!-- start::Submenu link -->
                        <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../forms/layout.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Layout') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../forms/input.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Input') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../forms/checkbox.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Checkbox') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../forms/radio.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Radio') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../forms/textarea.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Textarea') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../forms/switch.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Switch') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../forms/select.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Select') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->
                    </ul>
                    <!-- end::Submenu -->
                </div>
                <!-- end::Menu link -->

                <!-- start::Menu link -->
                <div
                    x-data="{ linkHover: false, linkActive: false }"
                >
                    <div
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        @click = "linkActive = !linkActive"
                        class="flex items-center justify-between px-6 py-3 text-gray-400 transition duration-200 cursor-pointer hover:text-gray-100 hover:bg-black hover:bg-opacity-30"
                        :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
                    >
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                            </svg>
                            <span class="ml-3">{{ __('Charts') }}</span>
                        </div>
                        <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                    <!-- start::Submenu -->
                    <ul
                        x-show="linkActive"
                        x-cloak
                        x-collapse.duration.300ms
                        class="text-gray-400"
                    >
                        <!-- start::Submenu link -->
                        <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../charts/bar_charts.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Bar Charts') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../charts/line_charts.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Line Charts') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../charts/other_charts.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Other Charts') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->
                    </ul>
                    <!-- end::Submenu -->
                </div>
                <!-- end::Menu link -->

                <!-- start::Menu link -->
                <x-menu.nav-link
                    href="./../colors.html"
                    :leadingIcon=true
                    @class([ 'bg-black bg-opacity-30' => request()->is('colors')])
                >
                    <x-slot name="leadingIcon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                        </svg>
                    </x-slot>

                    {{ __('Colors') }}
                </x-menu.nav-link>
                <!-- end::Menu link -->

                <!-- start::Menu link -->
                <x-menu.nav-link
                    href="./../maps.html"
                    :leadingIcon=true
                    @class([ 'bg-black bg-opacity-30' => request()->is('maps')])
                >
                    <x-slot name="leadingIcon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </x-slot>

                    {{ __('Maps') }}
                </x-menu.nav-link>
                <!-- end::Menu link -->

                <!-- start::Menu link -->
                <div
                    x-data="{ linkHover: false, linkActive: false }"
                >
                    <div
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        @click = "linkActive = !linkActive"
                        class="flex items-center justify-between px-6 py-3 text-gray-400 transition duration-200 cursor-pointer hover:text-gray-100 hover:bg-black hover:bg-opacity-30"
                        :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
                    >
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                            </svg>
                            <span class="ml-3">{{ __('Modals') }}</span>
                        </div>
                        <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                    <!-- start::Submenu -->
                    <ul
                        x-show="linkActive"
                        x-cloak
                        x-collapse.duration.300ms
                        class="text-gray-400"
                    >
                        <!-- start::Submenu link -->
                        <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../modals/info.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Info') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../modals/confirmation.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Confirmation') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../modals/authentication.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Authentication') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->
                    </ul>
                    <!-- end::Submenu -->
                </div>
                <!-- end::Menu link -->

                <!-- start::Menu link -->
                <x-menu.nav-link
                    href="./../tables.html"
                    :leadingIcon=true
                    @class([ 'bg-black bg-opacity-30' => request()->is('tables')])
                >
                    <x-slot name="leadingIcon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </x-slot>

                    {{ __('Tables') }}
                </x-menu.nav-link>
                <!-- end::Menu link -->

                <x-menu.caption>
                    {{ __('Pages') }}
                </x-menu.caption>

                <!-- start::Menu link -->
                <div
                    x-data="{ linkHover: false, linkActive: false }"
                >
                    <div
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        @click = "linkActive = !linkActive"
                        class="flex items-center justify-between px-6 py-3 text-gray-400 transition duration-200 cursor-pointer hover:text-gray-100 hover:bg-black hover:bg-opacity-30"
                        :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
                    >
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                            </svg>
                            <span class="ml-3">{{ __('Generic') }}</span>
                        </div>
                        <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                    <!-- start::Submenu -->
                    <ul
                        x-show="linkActive"
                        x-cloak
                        x-collapse.duration.300ms
                        class="text-gray-400"
                    >
                        <!-- start::Submenu link -->
                        <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../generic/emptyPage.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Empty Page') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->
                    </ul>
                    <!-- end::Submenu -->
                </div>
                <!-- end::Menu link -->

                <!-- start::Menu link -->
                <div
                    x-data="{ linkHover: false, linkActive: false }"
                >
                    <div
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        @click = "linkActive = !linkActive"
                        class="flex items-center justify-between px-6 py-3 text-gray-400 transition duration-200 cursor-pointer hover:text-gray-100 hover:bg-black hover:bg-opacity-30"
                        :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
                    >
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            <span class="ml-3">{{ __('Authentication') }}</span>
                        </div>
                        <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                    <!-- start::Submenu -->
                    <ul
                        x-show="linkActive"
                        x-cloak
                        x-collapse.duration.300ms
                        class="text-gray-400"
                    >
                        <p class="my-2 ml-10 text-xs text-gray-600 uppercase">{{ __('Basic') }}</p>

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-16 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../authentication/basic/signIn.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Sign In') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-16 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../authentication/basic/signUp.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Sign Up') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-16 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../authentication/basic/forgotPassword.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Forgot Password') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-16 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../authentication/basic/resetPassword.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Reset Password') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-16 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../authentication/basic/emailVerification.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Email Verification') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <p class="my-2 ml-10 text-xs text-gray-600 uppercase">{{ __('Illustration') }}</p>

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-16 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../authentication/illustration/signIn.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Sign In') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-16 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../authentication/illustration/signUp.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Sign Up') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-16 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../authentication/illustration/forgotPassword.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Forgot Password') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-16 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../authentication/illustration/resetPassword.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Reset Password') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-16 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../authentication/illustration/emailVerification.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Email Verification') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <p class="my-2 ml-10 text-xs text-gray-600 uppercase">{{ __('Cover') }}</p>

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-16 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../authentication/cover/signIn.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Sign In') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-16 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../authentication/cover/signUp.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Sign Up') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-16 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../authentication/cover/forgotPassword.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Forgot Password') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-16 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../authentication/cover/resetPassword.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Reset Password') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-16 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../authentication/cover/emailVerification.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Email Verification') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->
                    </ul>
                    <!-- end::Submenu -->
                </div>
                <!-- end::Menu link -->

                <!-- start::Menu link -->
                <x-menu.nav-link
                    href="./../profile.html"
                    :leadingIcon=true
                    @class([ 'bg-black bg-opacity-30' => request()->is('profile')])
                >
                    <x-slot name="leadingIcon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </x-slot>

                    {{ __('Profile') }}
                </x-menu.nav-link>
                <!-- end::Menu link -->

                <!-- start::Menu link -->
                <a
                    x-data="{ linkHover: false }"
                    @mouseover = "linkHover = true"
                    @mouseleave = "linkHover = false"
                    href="./../invoices.html"
                    class="flex items-center px-6 py-3 text-gray-400 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <span
                        class="ml-3 transition duration-200"
                        :class="linkHover ? 'text-gray-100' : ''"
                    >
                        {{ __('Invoices') }}
                    </span>
                </a>

                <x-menu.nav-link
                    href="./../invoices.html"
                    :leadingIcon=true
                    @class([ 'bg-black bg-opacity-30' => request()->is('invoices')])
                >
                    <x-slot name="leadingIcon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </x-slot>

                    {{ __('Invoices') }}
                </x-menu.nav-link>
                <!-- end::Menu link -->

                <!-- start::Menu link -->
                <div
                    x-data="{ linkHover: false, linkActive: false }"
                >
                    <div
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        @click = "linkActive = !linkActive"
                        class="flex items-center justify-between px-6 py-3 text-gray-400 transition duration-200 cursor-pointer hover:text-gray-100 hover:bg-black hover:bg-opacity-30"
                        :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
                    >
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="ml-3">{{ __('Errors') }}</span>
                        </div>
                        <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                    <!-- start::Submenu -->
                    <ul
                        x-show="linkActive"
                        x-cloak
                        x-collapse.duration.300ms
                        class="text-gray-400"
                    >
                        <p class="my-2 ml-10 text-xs text-gray-600 uppercase">{{ __('404') }}</p>

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-16 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../error/404/basic.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Basic') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-16 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../error/404/illustration.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Illustration') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-16 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../error/404/illustration_cover.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Illustration Cover') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <p class="my-2 ml-10 text-xs text-gray-600 uppercase">{{ __('500') }}</p>

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-16 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../error/500/basic.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Basic') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-16 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../error/500/illustration.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Illustration') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-16 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../error/500/illustration_cover.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Illustration Cover') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->
                    </ul>
                    <!-- end::Submenu -->
                </div>
                <!-- end::Menu link -->

                <!-- start::Menu link -->
                <x-menu.nav-link
                    href="./../maintenance.html"
                    :leadingIcon=true
                    @class([ 'bg-black bg-opacity-30' => request()->is('maintenance')])
                >
                    <x-slot name="leadingIcon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </x-slot>

                    {{ __('Maintenance') }}
                </x-menu.nav-link>
                <!-- end::Menu link -->

                <!-- start::Menu link -->
                <div
                    x-data="{ linkHover: false, linkActive: false }"
                >
                    <div
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        @click = "linkActive = !linkActive"
                        class="flex items-center justify-between px-6 py-3 text-gray-400 transition duration-200 cursor-pointer hover:text-gray-100 hover:bg-black hover:bg-opacity-30"
                        :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
                    >
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="ml-3">{{ __('FAQ') }}</span>
                        </div>
                        <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                    <!-- start::Submenu -->
                    <ul
                        x-show="linkActive"
                        x-cloak
                        x-collapse.duration.300ms
                        class="text-gray-400"
                    >
                        <!-- start::Submenu link -->
                        <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../faq/basic.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Basic') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../faq/qa.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Q & A') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../faq/accordion.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Accordion') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->
                    </ul>
                    <!-- end::Submenu -->
                </div>
                <!-- end::Menu link -->

                <!-- start::Menu link -->
                <div
                    x-data="{ linkHover: false, linkActive: false }"
                >
                    <div
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        @click = "linkActive = !linkActive"
                        class="flex items-center justify-between px-6 py-3 text-gray-400 transition duration-200 cursor-pointer hover:text-gray-100 hover:bg-black hover:bg-opacity-30"
                        :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
                    >
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                            </svg>
                            <span class="ml-3">{{ __('Coming Soon') }}</span>
                        </div>
                        <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </div>
                    <!-- start::Submenu -->
                    <ul
                        x-show="linkActive"
                        x-cloak
                        x-collapse.duration.300ms
                        class="text-gray-400"
                    >
                        <!-- start::Submenu link -->
                        <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../coming_soon/basic.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Basic') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->

                        <!-- start::Submenu link -->
                        <li class="py-2 pl-10 pr-6 transition duration-200 cursor-pointer hover:bg-black hover:bg-opacity-30 hover:text-gray-100">
                            <a
                                href="./../coming_soon/timer.html"
                                class="flex items-center"
                            >
                                <span class="mr-2 text-sm">&bull;</span>
                                <span class="overflow-ellipsis">{{ __('Timer') }}</span>
                            </a>
                        </li>
                        <!-- end::Submenu link -->
                    </ul>
                    <!-- end::Submenu -->
                </div>
                <!-- end::Menu link -->

                <!-- start::Menu link -->
                <x-menu.nav-link
                    href="./../pricing.html"
                    :leadingIcon=true
                    @class([ 'bg-black bg-opacity-30' => request()->is('pricing')])
                >
                    <x-slot name="leadingIcon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </x-slot>

                    {{ __('Pricing') }}
                </x-menu.nav-link>
                <!-- end::Menu link -->
            </nav>
            <!-- end::Navigation -->
        </aside>
</div>
