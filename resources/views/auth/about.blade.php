<x-guest-layout>

    <div class="min-h-screen flex flex-col shadow-2xl justify-center items-center sm:pt-0 bg-gray-100">
        <div class="w-full max-w-md mx-auto overflow-hidden  bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="px-6 py-4">

                <div class="flex flex-col justify-center items-center pt-2 sm:pt-0">
                    <div>
                        <x-jet-authentication-card-logo />
                    </div>
                </div>


                <h3 class="mt-1 text-xl font-medium text-center text-gray-600 dark:text-gray-200">Almost Finished</h3>

                <form method="POST" action="{{ route('about.post') }}">
                    @csrf
                    <x-jet-validation-errors class="mb-4" />
                    <div class="p-1">
                        <div class="p-1 mt-2">
                            <x-jet-label for="description" value="{{ __('Tell Us Something About You') }}" />
                            <x-jet-input id="description" class="block mt-1 w-full" type="text" name="description"
                                :value="old('description')" required autofocus autocomplete="description" />
                        </div>

                        <div class="mt-2">
                            <div class="p-1">
                                <x-jet-label for="job" value="{{ __('Current Job') }}" />
                                <x-jet-input id="job" class="block mt-1 w-full" type="text" name="job"
                                    :value="old('job')" required autofocus autocomplete="job" />
                            </div>
                        </div>
                        <div class="mt-2 grid grid-cols-1 md:grid-cols-2">

                            <div class="mt-1">
                                <div class="p-1">
                                    <x-jet-label for="height" value="{{ __('Height (Meters)') }}" />
                                    <x-jet-input id="height" class="block mt-1 w-full" type="number" step="0.01"
                                        name="height" :value="old('height')" required autofocus autocomplete="height" />
                                </div>
                            </div>

                            <div class="mt-1">
                                <div class="p-1">
                                    <x-jet-label for="weight" value="{{ __('Weight (Kilogram)') }}" />
                                    <x-jet-input id="weight" class="block mt-1 w-full" type="number" step="0.01"
                                        name="weight" :value="old('weight')" required autofocus autocomplete="weight" />
                                </div>
                            </div>
                        </div>



                        <div class="mt-2">
                            <div class="p-1">
                                <x-jet-label for="education" value="{{ __('Highest Education') }}" />
                                <x-jet-input id="education" class="block mt-1 w-full" type="text" name="education"
                                    :value="old('education')" required autofocus autocomplete="education" />
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="p-1">
                                <x-jet-label for="hobbies" value="{{ __('Hobbies') }}" />
                                <x-jet-input id="hobbies" class="block mt-1 w-full" type="text" name="hobbies"
                                    :value="old('hobbies')" required autofocus autocomplete="hobbies" />
                            </div>
                        </div>

                        <div class="mt-2 grid grid-cols-1 md:grid-cols-2">

                            <div class="p-1">
                                <x-jet-label for="marital_status" value="{{ __('Marital Status') }}" />
                                <select name="marital_status" id="marital_status"
                                    class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">

                                    <option value="Single">Single</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Widowed">Widowed</option>
                                </select>

                            </div>

                            <div class="p-1">
                                <x-jet-label value="{{ __('Food habits') }}" />
                                <select name="foodpreference" id="foodpreference"
                                    class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    <option value="Non-Vegetarian">Non-Vegetarian</option>
                                    <option value="Vegetarian">Vegetarian</option>
                                    <option value="Eggetarian">Eggetarian</option>
                                </select>

                            </div>
                        </div>


                    </div>

                    <div class="text-center mt-6">




                        <button
                            class="bg-gray-900 flex flex-row justify-center text-center items-center text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full"
                            type="submit" style="transition: all 0.15s ease 0s;">
                            <div>

                                Continue Registration
                            </div>
                            <div>

                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </div>

                        </button>
                    </div>


                </form>

            </div>


        </div>

    </div>
</x-guest-layout>
