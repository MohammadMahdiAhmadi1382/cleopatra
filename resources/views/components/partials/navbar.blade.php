<nav class="bg-gray-800 z-[9999] relative">
    <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                {{-- <!-- Mobile menu button--> --}}
                <button type="button"
                    class="relative inline-flex items-center justify-center p-2 text-gray-400 rounded-md show-menu-main hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    {{-- <!-- Icon when menu is open. Menu open: "block", Menu closed: "hidden" --> --}}
                    <svg class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start">
                <div class="flex items-center shrink-0">
                    <img class="w-auto h-8" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500"
                        alt="Your Company">
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        {{-- item menu dashboard --}}
                        <div class="relative px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-md cursor-pointer"
                            aria-current="page" data-dropdown-container>
                            {{-- title menu --}}
                            <span data-dropdown-toggle>user</span>
                            {{-- more menu --}}
                            <div data-dropdown-menu
                                class="absolute left-0 z-50 flex-wrap content-start justify-center hidden w-auto h-auto overflow-hidden text-black bg-white rounded-sm cursor-pointer top-full min-w-36">
                                {{-- nav items --}}
                                <ul class="relative w-full">
                                    {{-- item list --}}
                                    <li class="relative w-full h-auto px-2 py-3 hover:bg-blue-200">
                                        <a href="" class="relative inline w-full h-full">
                                            list users
                                        </a>
                                    </li>
                                    {{-- item list --}}
                                    <li class="relative w-full h-auto px-2 py-3 hover:bg-blue-200">
                                        <a href="" class="relative inline w-full h-full">
                                            Access level
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        {{-- item menu --}}
                        <a href="#"
                            class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Team</a>
                        <a href="#"
                            class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Projects</a>
                        <a href="#"
                            class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Calendar</a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                {{-- <!-- notifation dropdown --> --}}
                <div class="relative ml-3 dropdown-container">
                    <div>
                        <button type="button"
                            class="relative p-1 mt-2 text-gray-400 bg-gray-800 rounded-full dropdown-toggle hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">View notifications</span>
                            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                            </svg>
                        </button>
                    </div>
                    <div class="absolute right-0 z-10 hidden w-64 px-5 py-5 mt-2 origin-top-right bg-white rounded-md shadow-lg dropdown-menu ring-1 ring-black/5 focus:outline-none"
                        role="menu" aria-orientation="vertical">
                        <div class="w-full text-center">
                            <h6> No message found. </h6>
                        </div>
                    </div>
                </div>
                {{-- <!-- Profile dropdown --> --}}
                <div class="relative ml-3 dropdown-container">
                    <div>
                        <button type="button"
                            class="relative flex text-sm bg-gray-800 rounded-full dropdown-toggle focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                            aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <img class="rounded-full size-8"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="User avatar">
                        </button>
                    </div>
                    <div class="absolute right-0 z-10 hidden w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg dropdown-menu ring-1 ring-black/5 focus:outline-none"
                        role="menu" aria-orientation="vertical">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem">Your Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem">Settings</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem">Sign out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <!-- Mobile menu, show/hide based on menu state. --> --}}
    <div class="hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            {{-- <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" --> --}}
            <a href="#" class="block px-3 py-2 text-base font-medium text-white bg-gray-900 rounded-md"
                aria-current="page">Dashboard</a>
            <a href="#"
                class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Team</a>
            <a href="#"
                class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Projects</a>
            <a href="#"
                class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Calendar</a>
        </div>
    </div>
</nav>
