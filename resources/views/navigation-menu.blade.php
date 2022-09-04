<nav x-data="{ open: false }" class="shadow-2xl shadow-indigo-100 rounded-b-3xl   ">
    <!-- Primary Navigation Menu -->
    <header class="bg-gray-50 rounded-b-3xl">
        <div class="max-w-screen-xl px-4 py-2 mx-auto  lg:px-8">
            <div class="justify-between items-center flex  md:flex-nowrap px-4 lg:px-0">
                <!-- Welcome -->
                <div class="text-left text-clip truncate">
                    <div class="font-thin text-xl text-gray-800">
                        Hello👋,
                    </div>
                    <h2 class="font-semibold text-3xl text-gray-800 leading-tight  ">
                        {{ Auth::user()->name }}
                    </h2>
                </div>

                <!-- Navigation Links desktop -->
                <nav class=" flex flex-wrap items-center text-base justify-center invisible md:visible">
                    <div class="hidden   md:flex h-14 w-full">
                        <x-nav-button
                            class="mr-2 w-32 h-14 relative md:flex md:flex-row justify-center items-center rounded-lg hover:bg-stone-100"
                            href="{{ route('home') }}" :active="request()->routeIs('home')">
                            <span class="block h-8  text-3xl leading-8">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                    viewBox="0 0 24 24" class="fill-current w-7">
                                    <path
                                        d="M18,21H6c-1.657,0-3-1.343-3-3V8.765c0-1.09,0.591-2.093,1.543-2.622l6-3.333	c0.906-0.503,2.008-0.503,2.914,0l6,3.333C20.409,6.672,21,7.676,21,8.765V18C21,19.657,19.657,21,18,21z"
                                        opacity=".35"></path>
                                    <path d="M15,21H9v-6c0-1.105,0.895-2,2-2h2c1.105,0,2,0.895,2,2V21z"></path>
                                </svg>
                            </span>
                            <span class="block p-2 text-md leading-none">Home</span>

                        </x-nav-button>
                        <x-nav-button
                            class="mr-2 w-32 h-14   relative md:flex md:flex-row justify-center items-center rounded-lg hover:bg-stone-100"
                            href="{{ route('search') }}" :active="request()->routeIs('search')">

                            <span class="block h-8  text-3xl leading-8">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                    viewBox="0 0 24 24" class="fill-current w-7">
                                    <path
                                        d="M21.414,18.586c-0.287-0.287-1.942-1.942-2.801-2.801c-0.719,1.142-1.686,2.109-2.828,2.828	c0.859,0.859,2.514,2.514,2.801,2.801c0.781,0.781,2.047,0.781,2.828,0C22.195,20.633,22.195,19.367,21.414,18.586z">
                                    </path>
                                    <circle cx="11" cy="11" r="9" opacity=".35"></circle>
                                </svg>
                            </span>
                            <span class="block text-md p-2 leading-none">Search</span>

                        </x-nav-button>
                        <x-nav-button
                            class="w-32 h-14   relative md:flex md:flex-row justify-center items-center rounded-lg hover:bg-stone-100"
                            href="{{ route('profile') }}" :active="request()->routeIs('profile')">
                            <span class="block h-8  text-3xl leading-8">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                    viewBox="0 0 24 24" class="fill-current w-7">
                                    <path d="M19,21H5c-1.657,0-3-1.343-3-3V8h20v10C22,19.657,20.657,21,19,21z"
                                        opacity=".35"></path>
                                    <circle cx="17.5" cy="8.5" r="1.5"></circle>
                                    <circle cx="6.5" cy="8.5" r="1.5"></circle>
                                    <path
                                        d="M20,4c-0.221,0-2.357,0-5,0c0-1.105-0.895-2-2-2c-0.366,0-1.634,0-2,0C9.895,2,9,2.895,9,4C6.357,4,4.221,4,4,4	C2.895,4,2,4.895,2,6c0,1.105,0,3,0,3h20c0,0,0-1.895,0-3C22,4.895,21.105,4,20,4z">
                                    </path>
                                </svg>
                            </span>
                            <span class="block text-md p-2 leading-none">Profile</span>

                        </x-nav-button>



                    </div>
                </nav>

                {{-- Navigaion link mobile view --}}
                <div class="md:hidden">
                    <div
                        class="fixed inset-x-0 bottom-0  ring-2	ring-gray-200/20	 w-full z-10 bg-white  flex flex-row justify-center rounded-t-3xl  ">

                        <div class="items-center text-center justify-center p-2 basis-1/3  ">
                            <x-nav-button
                                class=" w-full  relative flex flex-row justify-center items-center rounded-lg "
                                href="{{ route('home') }}" :active="request()->routeIs('home')">

                                <span class="block my-auto  text-3xl leading-8">

                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        viewBox="0 0 24 24" class="fill-current w-7">
                                        <path
                                            d="M18,21H6c-1.657,0-3-1.343-3-3V8.765c0-1.09,0.591-2.093,1.543-2.622l6-3.333	c0.906-0.503,2.008-0.503,2.914,0l6,3.333C20.409,6.672,21,7.676,21,8.765V18C21,19.657,19.657,21,18,21z"
                                            opacity=".35"></path>
                                        <path d="M15,21H9v-6c0-1.105,0.895-2,2-2h2c1.105,0,2,0.895,2,2V21z"></path>
                                    </svg>
                                </span>
                                <span class="block p-2 text-xl leading-none">Home</span>

                            </x-nav-button>
                        </div>
                        <div class="items-center text-center justify-center p-2 basis-1/3 ">
                            <x-nav-button class=" w-full relative flex flex-row justify-center items-center rounded-lg"
                                href="{{ route('search') }}" :active="request()->routeIs('search')">


                                <span class="block my-auto  text-3xl leading-8">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        viewBox="0 0 24 24" class="fill-current w-7">
                                        <path
                                            d="M21.414,18.586c-0.287-0.287-1.942-1.942-2.801-2.801c-0.719,1.142-1.686,2.109-2.828,2.828	c0.859,0.859,2.514,2.514,2.801,2.801c0.781,0.781,2.047,0.781,2.828,0C22.195,20.633,22.195,19.367,21.414,18.586z">
                                        </path>
                                        <circle cx="11" cy="11" r="9" opacity=".35"></circle>
                                    </svg>
                                </span>
                                <span class="block text-xl p-2 leading-none">Search</span>

                            </x-nav-button>
                        </div>
                        <div class="items-center text-center justify-center p-2 basis-1/3 ">
                            <x-nav-button
                                class="w-full   relative flex flex-row justify-center items-center rounded-lg "
                                href="{{ route('profile') }}" :active="request()->routeIs('profile')">

                                <span class="block my-auto  text-3xl leading-8">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        viewBox="0 0 24 24" class="fill-current w-7">
                                        <path d="M19,21H5c-1.657,0-3-1.343-3-3V8h20v10C22,19.657,20.657,21,19,21z"
                                            opacity=".35"></path>
                                        <circle cx="17.5" cy="8.5" r="1.5"></circle>
                                        <circle cx="6.5" cy="8.5" r="1.5"></circle>
                                        <path
                                            d="M20,4c-0.221,0-2.357,0-5,0c0-1.105-0.895-2-2-2c-0.366,0-1.634,0-2,0C9.895,2,9,2.895,9,4C6.357,4,4.221,4,4,4	C2.895,4,2,4.895,2,6c0,1.105,0,3,0,3h20c0,0,0-1.895,0-3C22,4.895,21.105,4,20,4z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="block text-xl p-2 leading-none">Profile</span>

                            </x-nav-button>
                        </div>

                    </div>
                </div>


                <!-- Settings Dropdown -->
                <div class="items-center flex shrink-0">
                    <div class="inline-flex ">
                        <div class="relative shrink-0 ">
                            <x-jet-dropdown align="right" width="48" class="justify-end">
                                <x-slot name="trigger">
                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                        <button
                                            class="flex text-sm border-2 border-transparent rounded-xl focus:border-dashed focus:border-indigo-500  transition">
                                            <img class="h-20 w-20 rounded-xl object-cover"
                                                src="{{ Auth::user()->profile_photo_url }}"
                                                alt="{{ Auth::user()->name }}" />
                                        </button>
                                    @else
                                        <span class="inline-flex rounded-md">
                                            <button type="button"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-xl text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                                {{ Auth::user()->name }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    @endif
                                </x-slot>

                                <x-slot name="content" class="flex ">
                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Account') }}
                                    </div>
                                    <div
                                        class="flex items-center p-3 -mt-2 text-sm text-gray-600 transition-colors duration-200 transform ">
                                        <img class="flex-shrink-0 object-cover mx-1 rounded-xl w-9 h-9"
                                            src="{{ Auth::user()->profile_photo_url }}" alt="jane avatar">
                                        <div class="mx-auto block">
                                            <h1 class="text-sm font-semibold text-gray-700 dark:text-gray-200">
                                                {{ Auth::user()->name }}</h1>
                                            <p class="text-sm text-gray-500 dark:text-gray-400">
                                                {{ Auth::user()->email }}
                                            </p>
                                        </div>
                                    </div>



                                    <x-dropdown-selection class="mb-1" href="{{ route('profile.show') }}">
                                        <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none"
                                            class="hover:animate-spin" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.8199 22H10.1799C9.71003 22 9.30347 21.673 9.20292 21.214L8.79592 19.33C8.25297 19.0921 7.73814 18.7946 7.26092 18.443L5.42392 19.028C4.97592 19.1709 4.48891 18.9823 4.25392 18.575L2.42992 15.424C2.19751 15.0165 2.27758 14.5025 2.62292 14.185L4.04792 12.885C3.98312 12.2961 3.98312 11.7019 4.04792 11.113L2.62292 9.816C2.27707 9.49837 2.19697 8.98372 2.42992 8.576L4.24992 5.423C4.48491 5.0157 4.97192 4.82714 5.41992 4.97L7.25692 5.555C7.50098 5.37416 7.75505 5.20722 8.01792 5.055C8.27026 4.91269 8.52995 4.78385 8.79592 4.669L9.20392 2.787C9.30399 2.32797 9.71011 2.00049 10.1799 2H13.8199C14.2897 2.00049 14.6958 2.32797 14.7959 2.787L15.2079 4.67C15.4887 4.79352 15.7622 4.93308 16.0269 5.088C16.2739 5.23081 16.5126 5.38739 16.7419 5.557L18.5799 4.972C19.0276 4.82967 19.514 5.01816 19.7489 5.425L21.5689 8.578C21.8013 8.98548 21.7213 9.49951 21.3759 9.817L19.9509 11.117C20.0157 11.7059 20.0157 12.3001 19.9509 12.889L21.3759 14.189C21.7213 14.5065 21.8013 15.0205 21.5689 15.428L19.7489 18.581C19.514 18.9878 19.0276 19.1763 18.5799 19.034L16.7419 18.449C16.5093 18.6203 16.2677 18.7789 16.0179 18.924C15.7557 19.0759 15.4853 19.2131 15.2079 19.335L14.7959 21.214C14.6954 21.6726 14.2894 21.9996 13.8199 22ZM7.61992 16.229L8.43992 16.829C8.62477 16.9652 8.81743 17.0904 9.01692 17.204C9.20462 17.3127 9.39788 17.4115 9.59592 17.5L10.5289 17.909L10.9859 20H13.0159L13.4729 17.908L14.4059 17.499C14.8132 17.3194 15.1998 17.0961 15.5589 16.833L16.3799 16.233L18.4209 16.883L19.4359 15.125L17.8529 13.682L17.9649 12.67C18.0141 12.2274 18.0141 11.7806 17.9649 11.338L17.8529 10.326L19.4369 8.88L18.4209 7.121L16.3799 7.771L15.5589 7.171C15.1997 6.90671 14.8132 6.68175 14.4059 6.5L13.4729 6.091L13.0159 4H10.9859L10.5269 6.092L9.59592 6.5C9.39772 6.58704 9.20444 6.68486 9.01692 6.793C8.81866 6.90633 8.62701 7.03086 8.44292 7.166L7.62192 7.766L5.58192 7.116L4.56492 8.88L6.14792 10.321L6.03592 11.334C5.98672 11.7766 5.98672 12.2234 6.03592 12.666L6.14792 13.678L4.56492 15.121L5.57992 16.879L7.61992 16.229ZM11.9959 16C9.78678 16 7.99592 14.2091 7.99592 12C7.99592 9.79086 9.78678 8 11.9959 8C14.2051 8 15.9959 9.79086 15.9959 12C15.9932 14.208 14.2039 15.9972 11.9959 16ZM11.9959 10C10.9033 10.0011 10.0138 10.8788 9.99815 11.9713C9.98249 13.0638 10.8465 13.9667 11.9386 13.9991C13.0307 14.0315 13.9468 13.1815 13.9959 12.09V12.49V12C13.9959 10.8954 13.1005 10 11.9959 10Z"
                                                fill="currentColor"></path>
                                        </svg>

                                        <span class="mx-1 ">
                                            Settings
                                        </span>
                                    </x-dropdown-selection>


                                    <x-dropdown-selection class="mb-1" href="{{ route('profile.show') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-1" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                                        </svg>

                                        <span class="mx-1">
                                            Talk to us
                                        </span>
                                    </x-dropdown-selection>


                                    <x-dropdown-selection class="mb-1" href="{{ route('profile.show') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mx-1" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                        </svg>

                                        <span class="mx-1">
                                            Payment
                                        </span>
                                    </x-dropdown-selection>




                                    {{-- <x-jet-dropdown-link href="{{ route('profile.show') }}"
                                    class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.8199 22H10.1799C9.71003 22 9.30347 21.673 9.20292 21.214L8.79592 19.33C8.25297 19.0921 7.73814 18.7946 7.26092 18.443L5.42392 19.028C4.97592 19.1709 4.48891 18.9823 4.25392 18.575L2.42992 15.424C2.19751 15.0165 2.27758 14.5025 2.62292 14.185L4.04792 12.885C3.98312 12.2961 3.98312 11.7019 4.04792 11.113L2.62292 9.816C2.27707 9.49837 2.19697 8.98372 2.42992 8.576L4.24992 5.423C4.48491 5.0157 4.97192 4.82714 5.41992 4.97L7.25692 5.555C7.50098 5.37416 7.75505 5.20722 8.01792 5.055C8.27026 4.91269 8.52995 4.78385 8.79592 4.669L9.20392 2.787C9.30399 2.32797 9.71011 2.00049 10.1799 2H13.8199C14.2897 2.00049 14.6958 2.32797 14.7959 2.787L15.2079 4.67C15.4887 4.79352 15.7622 4.93308 16.0269 5.088C16.2739 5.23081 16.5126 5.38739 16.7419 5.557L18.5799 4.972C19.0276 4.82967 19.514 5.01816 19.7489 5.425L21.5689 8.578C21.8013 8.98548 21.7213 9.49951 21.3759 9.817L19.9509 11.117C20.0157 11.7059 20.0157 12.3001 19.9509 12.889L21.3759 14.189C21.7213 14.5065 21.8013 15.0205 21.5689 15.428L19.7489 18.581C19.514 18.9878 19.0276 19.1763 18.5799 19.034L16.7419 18.449C16.5093 18.6203 16.2677 18.7789 16.0179 18.924C15.7557 19.0759 15.4853 19.2131 15.2079 19.335L14.7959 21.214C14.6954 21.6726 14.2894 21.9996 13.8199 22ZM7.61992 16.229L8.43992 16.829C8.62477 16.9652 8.81743 17.0904 9.01692 17.204C9.20462 17.3127 9.39788 17.4115 9.59592 17.5L10.5289 17.909L10.9859 20H13.0159L13.4729 17.908L14.4059 17.499C14.8132 17.3194 15.1998 17.0961 15.5589 16.833L16.3799 16.233L18.4209 16.883L19.4359 15.125L17.8529 13.682L17.9649 12.67C18.0141 12.2274 18.0141 11.7806 17.9649 11.338L17.8529 10.326L19.4369 8.88L18.4209 7.121L16.3799 7.771L15.5589 7.171C15.1997 6.90671 14.8132 6.68175 14.4059 6.5L13.4729 6.091L13.0159 4H10.9859L10.5269 6.092L9.59592 6.5C9.39772 6.58704 9.20444 6.68486 9.01692 6.793C8.81866 6.90633 8.62701 7.03086 8.44292 7.166L7.62192 7.766L5.58192 7.116L4.56492 8.88L6.14792 10.321L6.03592 11.334C5.98672 11.7766 5.98672 12.2234 6.03592 12.666L6.14792 13.678L4.56492 15.121L5.57992 16.879L7.61992 16.229ZM11.9959 16C9.78678 16 7.99592 14.2091 7.99592 12C7.99592 9.79086 9.78678 8 11.9959 8C14.2051 8 15.9959 9.79086 15.9959 12C15.9932 14.208 14.2039 15.9972 11.9959 16ZM11.9959 10C10.9033 10.0011 10.0138 10.8788 9.99815 11.9713C9.98249 13.0638 10.8465 13.9667 11.9386 13.9991C13.0307 14.0315 13.9468 13.1815 13.9959 12.09V12.49V12C13.9959 10.8954 13.1005 10 11.9959 10Z"
                                            fill="currentColor"></path>
                                    </svg>

                                    <span class="mx-1">
                                        Settings
                                    </span>
                                </x-jet-dropdown-link> --}}

                                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                        <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                            {{ __('API Tokens') }}
                                        </x-jet-dropdown-link>
                                    @endif



                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf

                                        <x-dropdown-selection href="{{ route('logout') }}"
                                            class="text-red-400 hover:bg-red-100 " @click.prevent="$root.submit();">
                                            <svg class="w-5 h-5 mx-1" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M19 21H10C8.89543 21 8 20.1046 8 19V15H10V19H19V5H10V9H8V5C8 3.89543 8.89543 3 10 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21ZM12 16V13H3V11H12V8L17 12L12 16Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="mx-1 w-5 h-5" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg> --}}
                                            <span class="mx-1 ">
                                                Sign Out
                                            </span>
                                        </x-dropdown-selection>
                                    </form>
                                </x-slot>
                            </x-jet-dropdown>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <aside
            class="fixed z-50 flex items-center justify-center px-5 py-3 text-white bg-black rounded-lg bottom-4 right-4">
            <a href="/new-thing" target="_blank" rel="noopener noreferrer"
                class="text-sm font-medium hover:opacity-75">
                Hey! Come Check This Out 👋
            </a>

            <button class="p-1 ml-3 rounded bg-white/20 hover:bg-white/10" aria-label="Dismiss Popup">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fillRule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clipRule="evenodd" />
                </svg>
            </button>
        </aside> --}}
    </header>
</nav>
