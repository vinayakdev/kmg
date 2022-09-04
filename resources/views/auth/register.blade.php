<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Name -->
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <x-jet-label for="name" value="{{ __('First Name') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                        required autofocus autocomplete="name" />
                </div>
                <div>
                    <x-jet-label for="lname" value="{{ __('Last Name') }}" />
                    <x-jet-input id="lname" class="block mt-1 w-full" type="text" name="lname"
                        :value="old('lname')" required autofocus autocomplete="lname" />
                </div>
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>
            <!-- DOB -->
            <div class="mt-4">
                <x-jet-label for="dob" class="font-bold" value="{{ __('Date Of Birth') }}" />
                <x-jet-input id="dob" type="date" name="dob" :value="old('dob')" required autocomplete="dob"
                    placeholder="YYYY/MM/DD" class="block mt-1 w-full" />
            </div>
            <!-- Gender/Religion -->
            <div class="grid grid-cols-2 gap-4">

                <div>
                    <x-jet-label for="gender" class="mt-1 font-bold" value="{{ __('Gender') }}" />
                    <select name="gender"
                        class="transition duration-500 ease-in-out flex-grow w-full rounded-lg bg-white border-2 border-gray-300 py-2 px-3 placeholder-gray-600 focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div>
                    <x-jet-label for="religion" class="mt-1 font-bold" value="{{ __('Religion') }}" />
                    <select name="religion"
                        class="transition duration-500 ease-in-out flex-grow w-full rounded-lg bg-white border-2 border-gray-300 py-2 px-3 placeholder-gray-600 focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none">
                        <option value="Hindu">Hindu</option>
                        <option value="Christian">Christian</option>
                        <option value="Muslim">Muslim</option>
                    </select>

                </div>


            </div>




            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' =>
                                        '<a target="_blank" href="' .
                                        route('terms.show') .
                                        '" class="underline text-sm text-gray-600 hover:text-gray-900">' .
                                        __('Terms of Service') .
                                        '</a>',
                                    'privacy_policy' =>
                                        '<a target="_blank" href="' .
                                        route('policy.show') .
                                        '" class="underline text-sm text-gray-600 hover:text-gray-900">' .
                                        __('Privacy Policy') .
                                        '</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
