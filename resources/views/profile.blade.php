<x-app-layout>

    <section class="flex items-center justify-center h-full">
        <div class="relative max-w-screen-xl py-8 mx-auto h-1/4 overflow-x-clip md:overflow-x-visible ">
            <div class="grid items-center justify-center grid-cols-1 gap-8 px-5 md:grid-cols-2 ">
                <div class="flex flex-col">
                    <div class="flex flex-row justify-center aspect-w-1 aspect-h-1 shrink-0 ">
                        <div class="relative ">

                            <div
                                class="absolute rounded-full animate-pulse animation-delay-100 bg-indigo-500/25 -bottom-24 right-20 w-72 h-72 mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000">
                            </div>
                            <div
                                class="absolute rounded-full animate-pulse animation-delay-100 bg-purple-500/15 -top-14 right-10 w-72 h-72 mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000">
                            </div>

                            <img class="absolute w-full h-full scale-50 rounded-b-full rounded-l-full -top-28 left-28 mix-blend-multiply filter blur-2xl opacity-70 animate-pulse animation-delay-100"
                                alt="hero"
                                src="@if (isset($user)) {{ $user->profile_photo_url }}
                                @else
                                {{ Auth::user()->profile_photo_url }} @endif">


                            <img class="absolute w-full h-full -bottom-8 right-4 scale-70 mix-blend-multiply filter blur-xl opacity-70 animate-pulse animation-delay-100"
                                alt="hero"
                                src="@if (isset($user)) {{ $user->profile_photo_url }}
                                @else
                                {{ Auth::user()->profile_photo_url }} @endif">

                            <div class="relative overflow-hidden rounded-xl ">
                                <div class="relative ">
                                    <img class="  items-center object-cover object-center  aspect-[1/1] shadow-2xl h-[33rem] border-slate-100/30 "
                                        alt="hero"
                                        src="@if (isset($user)) {{ $user->profile_photo_url }}
                                        @else
                                        {{ Auth::user()->profile_photo_url }} @endif">
                                    {{-- <div
                                        class="absolute bottom-0 w-full px-6 py-4 overflow-hidden bg-gradient-to-t from-zinc-700/80 to-zinc-500/5 backdrop-blur-md rounded-t-2xl ">
                                        <h4 class="mb-3 text-3xl font-bold tracking-tight text-white">

                                            {{ Auth::user()->name }} {{ Auth::user()->lname }},
                                            ({{ Carbon\Carbon::parse(Auth::user()->dob)->age }})

                                        </h4>
                                        <p class="leading-normal text-gray-100">{{ Auth::user()->profile->job }}
                                        </p>
                                    </div> --}}

                                    <div class="absolute top-0 w-full px-4 py-4 overflow-hidden">
                                        @if (isset($user))
                                        @else
                                            <livewire:edit />
                                        @endif





                                    </div>

                                </div>



                            </div>

                        </div>

                    </div>
                    <div class="z-0 flex flex-row justify-center w-full">

                    </div>

                </div>
                <section>
                    @if (isset($user))
                        <x-profile.descriptionone :user=$user />
                    @else
                        <x-profile.descriptionone />
                    @endif



                </section>

            </div>
            <section>
                @if (isset($user))
                    <x-profile.infoone :user=$user />
                @else
                    <x-profile.infoone />
                @endif


            </section>
        </div>
    </section>




</x-app-layout>
