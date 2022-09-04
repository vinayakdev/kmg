<div>

    <div class="flex flex-wrap justify-between gap-4 pb-2 capitalize">

        <div class="w-full overflow-hidden rounded-t-2xl">
            <h4 class="mb-3 text-3xl font-bold tracking-tight text-black md:text-5xl">
                @if (isset($user))
                    {{ $user->name }} {{ $user->lname }} ({{ Carbon\Carbon::parse($user->dob)->age }})
                @else
                    {{ Auth::user()->name }} {{ Auth::user()->lname }}
                    ({{ Carbon\Carbon::parse(Auth::user()->dob)->age }})
                @endif



            </h4>
            <p class="leading-normal text-gray-900">
                @if (isset($user))
                    {{ $user->profile->job }}
                @else
                    {{ Auth::user()->profile->job }}
                @endif

            </p>
        </div>

        <div class="flex items-center justify-start gap-4 md:flex-wrap ">
            <div class="z-0 px-2 py-2 text-sm font-bold text-blue-500 rounded-lg bg-blue-200/40">
                @if (isset($user))
                    {{ $user->gender }}
                @else
                    {{ Auth::user()->gender }}
                @endif


            </div>
            <div class="z-0 px-2 py-2 text-sm font-bold text-blue-500 rounded-lg bg-blue-200/40">


                @if (isset($user))
                    {{ $user->profile->marital_status }}
                @else
                    {{ Auth::user()->profile->marital_status }}
                @endif


            </div>
            <div class="z-0 px-2 py-2 text-sm font-bold text-blue-500 rounded-lg bg-blue-200/40">

                @if (isset($user))
                    {{ $user->profile->star }}
                @else
                    {{ Auth::user()->profile->star }}
                @endif


            </div>
        </div>
        <div>
            <div class="inline-flex overflow-hidden text-white bg-gray-900 rounded-2xl group">
                <span class="flex items-center justify-center px-2 py-2 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </span>
                <span class="py-2 pl-1 pr-2">

                    @if (isset($user))
                        {{ $user->profile->district }}
                    @else
                        {{ Auth::user()->profile->district }}
                    @endif


                </span>
            </div>
        </div>





    </div>



    <div class="pt-6">
        <span class="text-xl font-light leading-relaxed text-gray-800 ">

            @if (isset($user))
                {{ $user->profile->description }}
            @else
                {{ Auth::user()->profile->description }}
            @endif

        </span>
    </div>


    <div class="mt-4">


        {{-- <span
            class="bg-green-100 text-black ring text-md font-medium inline-flex items-center px-2.5 py-2 rounded dark:bg-green-200 dark:text-blue-800">
            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                    clip-rule="evenodd"></path>
            </svg>
            last online, 2 minutes ago
        </span> --}}

        <p class="mt-6 mb-4 text-xl font-light leading-relaxed text-gray-800">Intrests/hobbies:

            @if (isset($user))
                {{ $user->profile->hobbies }}
            @else
                {{ Auth::user()->profile->hobbies }}
            @endif

        </p>

        <strong
            class="inline-flex items-center border border-gray-200 rounded relative px-2.5 py-2 text-md font-medium bg-green-100 text-black">
            <span class="animate-ping w-2.5 h-2.5 bg-green-600/75 rounded-full absolute -top-1 -left-1"></span>
            <span class="w-2.5 h-2.5 bg-green-600 rounded-full absolute -top-1 -left-1"></span>

            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                    clip-rule="evenodd"></path>
            </svg>

            <span class=" ml-1.5">
                last online, 2 minutes ago
            </span>
        </strong>


    </div>


</div>
