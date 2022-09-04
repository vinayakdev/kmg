<x-guest-layout>


    <!-- Section 1 -->
    <section class="px-2 pt-32 bg-[#fff6f4] md:px-0 pb-24">
        <div class="container items-center max-w-6xl px-5 mx-auto space-y-6 text-center">
            <h1
                class="text-4xl font-extrabold tracking-tight text-left text-gray-900 sm:text-5xl md:text-6xl md:text-center">
                <span class="block font-bold ">Welcome to <span class="block mt-1 text-blue-500 lg:inline lg:mt-0">Kerala
                        Matrimonial Guide</span></span>
            </h1>
            <p
                class="w-full mx-auto text-base text-left text-gray-500 md:max-w-md sm:text-lg lg:text-2xl  md:text-center">
                It is never too late to fall in love.
            </p>
            @if (Route::has('login'))
                <div class="relative flex flex-col justify-center md:flex-row md:space-x-4">
                    @auth
                        <button onclick="location.href = '/home';"
                            class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-blue-500 md:mb-0 hover:bg-blue-700 md:w-auto rounded-2xl">
                            Home
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </button>
                    @else
                        <button onclick="location.href = '/login';"
                            class="flex  items-center w-full px-6 py-3 mb-3 text-lg text-white bg-blue-500 md:mb-0 hover:bg-blue-700 md:w-auto rounded-2xl ">
                            Log in
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </button>
                        @if (Route::has('register'))
                            <button onclick="location.href = '/register';"
                                class="flex items-center px-6 py-3 text-gray-500 bg-gray-100 hover:bg-gray-200 hover:text-gray-600 rounded-2xl ">
                                Register
                            </button>
                        @endif
                    @endauth
            @endif
        </div>
        </div>
        <div class="container items-center max-w-4xl px-5 mx-auto mt-16 text-center">
            {{-- <img src="{{url('storage/ui/welcome1.svg')}}"> --}}
            <x-ui.welcome1></x-ui.welcome1>
        </div>
    </section>



    <!-- Section 1 -->
    <section class="py-20 bg-gray-50 ">
        <div class="container items-center max-w-6xl px-4 mx-auto sm:px-20 md:px-32 lg:px-16">
            <div class="flex flex-wrap items-center -mx-3">
                <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
                    <div class="w-full lg:max-w-md">
                        <h2 class="mb-4 text-3xl font-bold leading-tight tracking-tight sm:text-4xl font-heading">Simple
                            yet Significant!</h2>
                        <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">Only the required details are
                            to be filled by the user, making it less complicated for others to find you. We provide:</p>
                        <ul>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z">
                                    </path>
                                </svg>
                                <span class="font-medium text-gray-500">Faster, Elegant and Simple</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg class="w-8 h-8 text-yellow-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                                <span class="font-medium text-gray-500">Out of the Box Design and Interface</span>
                            </li>
                            <li class="flex items-center py-2 space-x-4 xl:py-3">
                                <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                    </path>
                                </svg>
                                <span class="font-medium text-gray-500">Data Protection and Secure</span>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img
                        class="mx-auto sm:max-w-sm lg:max-w-full" src="{{url('storage/ui/welcome2.svg')}}"
                        alt="feature image">
                </div> --}}
                <div class=" w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0">
                    <x-ui.welcome2></x-ui.welcome2>
                </div>

            </div>
        </div>
    </section>


    <section class="text-gray-600 body-font">
        <div class="container px-5 py-14 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">BUILD FOR COMMON USERS
                </h2>
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Good bye over priced services.
                </h1>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="p-4 md:w-1/3">
                    <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                                <svg class="h-6 w-6 fill-neutral-50	 " viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17 6V4H6v2h3.5c1.302 0 2.401.838 2.815 2H6v2h6.315A2.994 2.994 0 0 1 9.5 12H6v2.414L11.586 20h2.828l-6-6H9.5a5.007 5.007 0 0 0 4.898-4H17V8h-2.602a4.933 4.933 0 0 0-.924-2H17z" />
                                </svg>
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Budget Friendly Service</h2>
                        </div>
                        <div class="flex-grow">
                            <p class="leading-relaxed text-base">Service offered with reasonable pricing model. We
                                charge you only to view.</p>
                            <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2"
                                    viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/3">
                    <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Unlimited Profile Views</h2>
                        </div>
                        <div class="flex-grow">
                            <p class="leading-relaxed text-base">Your profile is visible by anyone you can view all the
                                profiles with one time fee.</p>
                            <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2"
                                    viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/3">
                    <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">

                                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 fill-neutral-50 " viewBox="0 0 512 512">
                                    <path
                                        d="M242 .6c-20.8 2.7-40.7 10.1-58 21.7-9.6 6.4-27.3 24.1-33.7 33.7-9.2 13.7-15.5 28.2-19.5 45-1.9 7.7-2.1 12.5-2.5 49.7l-.5 41.3h-10.7c-6.4 0-13.1.6-16.6 1.5-17.2 4.5-30.5 17.9-35 35.2-2.2 8.6-2.2 238 0 246.6 4.5 17.3 17.8 30.7 35 35.2 5.2 1.3 24.4 1.5 155.5 1.5s150.3-.2 155.5-1.5c17.2-4.5 30.5-17.9 35-35.2 2.2-8.6 2.2-238 0-246.6-4.5-17.3-17.8-30.7-35-35.2-3.5-.9-10.2-1.5-16.6-1.5h-10.7l-.5-41.3c-.4-37.2-.6-42-2.5-49.7-6.2-25.7-17-45-35.1-63.1-18.5-18.5-38-29.3-63.1-35-8.3-1.9-33.1-3.3-41-2.3zm37.1 34.3c18.2 4.7 32 12.8 45.4 26.5 9.5 9.7 16.2 19.9 20.9 31.7 5.7 14.7 5.9 16.3 6.3 59.1l.4 39.8H159.9l.3-39.8c.4-36.7.6-40.3 2.5-47.3 5.1-18.4 13-31.9 26.2-44.9 15.4-15.3 30.3-22.7 55.1-27.4 5.9-1.1 27.7.3 35.1 2.3zm129.5 191.7c1.5 1.1 3.7 3.3 4.8 4.8 2.1 2.7 2.1 3.3 2.4 119.2.3 128.9.7 120.7-6.4 126l-3.7 2.9H106.3l-3.7-2.9c-7-5.3-6.6 2.6-6.6-124.5 0-79 .3-115.9 1.1-117.8 1.4-3.7 4.7-7.3 8.4-8.9 2.5-1.1 29.3-1.3 151.7-1.1 148.4.2 148.7.2 151.4 2.3z" />
                                    <path
                                        d="M248.7 278c-22.2 3.9-38.3 26.2-34.8 48.1 2.1 13.1 11.6 26.7 21.9 31.3l4.2 1.9v27.4c0 25.3.2 27.7 2 31.2 5.7 11.3 22.3 11.3 28 0 1.8-3.5 2-5.9 2-31.2v-27.4l4.2-1.9c10.3-4.6 19.8-18.2 21.9-31.3 2.4-15.2-5.1-32.6-17.7-41-9.4-6.2-21.5-8.9-31.7-7.1zm11.8 32.6c3.1 1.4 6.5 6.4 6.5 9.4 0 .7-.7 2.7-1.6 4.5-1.9 4.1-7.3 6.9-11.4 6-3.7-.8-7.7-4.8-8.5-8.5-.9-4 1.9-9.5 5.8-11.4 4-2 5.1-2 9.2 0z" />
                                </svg>
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Safe & Private</h2>
                        </div>
                        <div class="flex-grow">
                            <p class="leading-relaxed text-base">Your data wont be sold to anyone whatsover. Personal
                                details wont be shared among clients.</p>
                            <a class="mt-3 text-indigo-500 inline-flex items-center">Learn More
                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2"
                                    viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ststistics --}}

    <section class="text-gray-600 body-font">
        <div class="container px-5 pb-14 mx-auto">
            <div class="flex flex-col text-center w-full mb-14">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">This comunity is in
                    development</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Our statistics are always public, users are
                    signing up as you read this.</p>
            </div>
            <div class="">
                <livewire:welcome />
            </div>
        </div>
    </section>



    <!-- footer -->
    <section class="bg-neutral-100	">
        <div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 ">
            <div class="grid gap-10 row-gap-6 mb-8 sm:grid-cols-2 lg:grid-cols-4">
                <div class="col-span-2">
                    <div aria-label="hey.. ;)" title="hey..   ;)" class="inline-flex items-center">
                        <x-icons.kmglogo class="h-24" />

                    </div>
                    <div class="mt-6 lg:max-w-sm">
                        <p class="text-md text-gray-800">
                            Kerala Matrimonial Guide is a catalog to connect potential bride/groom. We do not intend to
                            sell your personal data nor burn a hole in your pocket. We provide service for everyone and
                            anyone. This service works on word of mouth. We hope you love it😉.
                        </p>
                        <p class="mt-4 text-md text-gray-800">
                            Read the manifesto to understand our goal.
                        </p>
                    </div>
                </div>
                <div class="col-span-2 text-md ">
                    <p class=" font-bold tracking-wide text-gray-900 text-xl mb-3">Contact Us</p>
                    <div class="flex">
                        <p class="mr-1 text-gray-800">Phone:</p>
                        <a href="tel:850-123-5021" aria-label="Our phone" title="Our phone"
                            class="transition-colors duration-300 text-blue-400 hover:text-deep-purple-800">850-123-5021</a>
                    </div>
                    <div class="flex">
                        <p class="mr-1 text-gray-800">Email:</p>
                        <a href="mailto:keralamatrimonialguide.com" aria-label="Our email" title="Our email"
                            class="transition-colors duration-300 text-blue-400 hover:text-deep-purple-800">keralamatrimonialguide.com</a>
                    </div>
                    <div class="flex">
                        <p class="mr-1 text-gray-800">Address:</p>
                        <a href="https://www.google.com/maps" target="_blank" rel="noopener noreferrer"
                            aria-label="Our address" title="Our address"
                            class="transition-colors duration-300 text-blue-400 hover:text-deep-purple-800">
                            Andaloor, Thalassey, Kannur
                        </a>
                    </div>
                </div>

            </div>
            <div class="flex flex-col-reverse justify-between pt-5 pb-10 border-t lg:flex-row">
                <p class="text-sm text-gray-600">
                    © Copyright 2021 KMG Inc. No rights reserved.
                </p>
                <ul class="flex flex-col mb-3 space-y-2 lg:mb-0 sm:space-y-0 sm:space-x-5 sm:flex-row">
                    <li>
                        <a href="/"
                            class="text-sm text-gray-600 transition-colors duration-300 hover:text-blue-400">F.A.Q</a>
                    </li>
                    <li>
                        <a href="/"
                            class="text-sm text-gray-600 transition-colors duration-300 hover:text-blue-400">Privacy
                            Policy</a>
                    </li>
                    <li>
                        <a href="/"
                            class="text-sm text-gray-600 transition-colors duration-300 hover:text-blue-400">Terms
                            &amp;
                            Conditions</a>
                    </li>
                </ul>
            </div>
        </div>

    </section>

</x-guest-layout>
