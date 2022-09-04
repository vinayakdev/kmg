<div>
    <div class="max-w-screen-xl px-2 py-16 sm:px-6 lg:px-4">
        <div class="grid grid-cols-1 break-words lg:grid-cols-2 gap-y-8 lg:gap-x-8 lg:items-center">

            <div class="relative block p-8 bg-white border border-gray-100 shadow-xl rounded-xl">
                <span
                    class="absolute right-4 top-4 rounded-full px-3 py-1.5 bg-green-100 text-green-600 font-medium text-xs">
                    Sensitive Information
                </span>

                <div class="mt-4 text-gray-500 sm:pr-8">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>

                    <h5 class="mt-4 text-xl font-bold text-gray-900">Get in Touch</h5>

                    <p class="mt-2 text-md ">
                        Contact
                        @if (isset($user))
                            {{ $user->profile->phone }}
                        @else
                            {{ Auth::user()->profile->phone }}
                        @endif



                    </p>
                    <p class="mt-2 text-md ">
                        Email
                        @if (isset($user))
                            {{ $user->email }}
                        @else
                            {{ Auth::user()->email }}
                        @endif
                    </p>
                </div>


            </div>


            <div class="grid grid-cols-2 gap-4 sm:grid-cols-3">
                <div class="col-span-2 info-box">

                    <div class="flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4">
                            <span class="emoji-description">
                                🏠

                            </span>

                            <div class="font-bold ">Home Town</div>
                        </div>



                    </div>
                    <p class="pt-3 ">


                        @if (isset($user))
                            {{ $user->profile->area }}, {{ $user->profile->city }},
                            {{ $user->profile->district }}
                        @else
                            {{ Auth::user()->profile->area }}, {{ Auth::user()->profile->city }},
                            {{ Auth::user()->profile->district }}
                        @endif




                    </p>

                </div>

                <div class="info-box">

                    <div class="flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4">



                            <span class="emoji-description">


                                @if (isset($user))
                                    @if ($user->profile->foodpreference == 'Non-Vegetarian')
                                        🔴
                                    @else
                                        🟢
                                    @endif
                                @else
                                    @if (Auth::user()->profile->foodpreference == 'Non-Vegetarian')
                                        🔴
                                    @else
                                        🟢
                                    @endif
                                @endif
                            </span>


                            <div class="font-bold ">Food Habit</div>
                        </div>



                    </div>
                    <p class="pt-3 ">



                        @if (isset($user))
                            {{ $user->profile->foodpreference }}
                        @else
                            {{ Auth::user()->profile->foodpreference }}.
                        @endif




                    </p>

                </div>

                <div class="info-box">

                    <div class="flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4">
                            <span class="emoji-description">
                                🎓

                            </span>

                            <div class="font-bold break-words lg:hidden ">Education</div>
                            <div class="hidden font-bold break-words lg:flex">Education</div>

                        </div>



                    </div>
                    <p class="pt-3 ">

                        @if (isset($user))
                            {{ $user->profile->education }}
                        @else
                            {{ Auth::user()->profile->education }}
                        @endif




                    </p>

                </div>

                <div class="col-span-2 info-box">


                    <div class="flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4">
                            <span class="emoji-description">
                                💼

                            </span>

                            <div class="font-bold ">Work, Profession</div>
                        </div>



                    </div>
                    <div class="w-full pt-3 ">
                        <div>

                            @if (isset($user))
                                {{ $user->profile->job }}
                            @else
                                {{ Auth::user()->profile->job }}
                            @endif




                        </div>

                    </div>

                </div>
                <div class="info-box">

                    <div class="flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4">
                            <span class="emoji-description">
                                🎂

                            </span>

                            <div class="font-bold ">Date Of Birth</div>
                        </div>



                    </div>
                    <p class="pt-3 ">
                        {{-- {{ Carbon\Carbon::parse(Auth::user()->dob->isoFormat('MMM Do YY')) }} --}}


                        @if (isset($user))
                            {{ Carbon\Carbon::parse($user->dob)->isoFormat('Do MMM YY') }}
                        @else
                            {{ Carbon\Carbon::parse(Auth::user()->dob)->isoFormat('Do MMM YY') }}
                        @endif




                    </p>

                </div>
                <div class="info-box">

                    <div class="flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4">
                            <span class="emoji-description">

                                @if (isset($user))
                                    @if ($user->religion == 'Hindu')
                                        🕉️
                                    @elseif ($user->religion == 'Muslim')
                                        🕋
                                    @else
                                        ⛪
                                    @endif
                                @else
                                    @if (Auth::user()->religion == 'Hindu')
                                        🕉️
                                    @elseif (Auth::user()->religion == 'Muslim')
                                        🕋
                                    @else
                                        ⛪
                                    @endif
                                @endif
                            </span>

                            <div class="font-bold ">Relegion, Caste</div>
                        </div>



                    </div>
                    <p class="pt-3 ">

                        @if (isset($user))
                            {{ $user->religion }} , {{ $user->profile->caste }}
                        @else
                            {{ Auth::user()->religion }} , {{ Auth::user()->profile->caste }}
                        @endif


                    </p>

                </div>
                <div class="info-box">


                    <div class="flex items-center justify-between gap-4">
                        <div class="flex items-center gap-4">
                            <span class="emoji-description">
                                💪

                            </span>

                            <div class="font-bold ">Height, Weight</div>
                        </div>



                    </div>
                    <p class="pt-3 ">

                        @if (isset($user))
                            {{ $user->profile->height }} m, {{ $user->profile->weight }} Kg
                        @else
                            {{ Auth::user()->profile->height }} m, {{ Auth::user()->profile->weight }} Kg
                        @endif

                    </p>



                </div>



            </div>
        </div>
    </div>
</div>
