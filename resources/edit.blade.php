<div x-data="{ 'showModal': false }" @keydown.escape="showModal = false" wire:keydown.escape="boot">
    <button x-on:click="showModal = true"
        class="z-20 block p-4 text-blue-700 transition-all bg-blue-100 border-2 border-white rounded-full active:bg-blue-50 hover:scale-110 focus:outline-none focus:ring"
        type="button">
        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
        </svg>
    </button>
    <div x-show="showModal" x-cloak x-transition
        class="fixed inset-0 z-30  overflow-hidden bg-white/30 backdrop-blur-xl ">
        {{-- editpage --}}
        <div class="overflow-hidden">




            <div class="relative h-screen flex items-center justify-center 	">
                {{-- editpage --}}


                <form wire:submit.prevent="save"
                    class="bg-zinc-100	 relative w-full max-w-3xl rounded-xl overflow-hidden ">
                    <div class=" grid sm:grid-cols-2  gap-2 p-4  ">
                        {{-- Phone pin --}}
                        <div class=" col-span-2 md:col-span-1 w-full">
                            <div class=" w-full grid grid-cols-2 gap-2">
                                <div class=" w-full p-1 ">
                                    <div class="mt-2  w-full">
                                        <x-jet-label for="phone" value="{{ __('Phone') }}" />
                                        <x-jet-input class=" w-full block mt-1 col-xs-2" x-mask="9999999999"
                                            type="tel" id="phone" placeholder="9847 851 384"
                                            wire:model.defer="phone" required autocomplete="phone" name="phone" />
                                    </div>
                                </div>
                                <div class=" w-full p-1 ">
                                    <div class="mt-2  w-full">
                                        <x-jet-label value="{{ __('PIN Code') }}" />
                                        <x-jet-input id="pincode" class=" w-full block mt-1 col-xs-2" type="number"
                                            name="pincode" required autofocus wire:model.defer="pincode"
                                            placeholder="Enter PIN code" />
                                    </div>
                                </div>




                            </div>



                        </div>
                        {{-- height weight --}}
                        <div class=" col-span-2 md:col-span-1 w-full">
                            <div class=" w-full grid grid-cols-2 gap-2">
                                <div class="w-full p-1 ">
                                    <div class="p-1">
                                        <x-jet-label for="height" value="{{ __('Height (Meters)') }}" />
                                        <x-jet-input id="height" class="block mt-1 w-full" type="number"
                                            wire:model.defer="height" required autofocus autocomplete="height" />
                                    </div>
                                </div>

                                <div class="w-full p-1 ">
                                    <div class="p-1">
                                        <x-jet-label for="weight" value="{{ __('Weight (Kilogram)') }}" />
                                        <x-jet-input id="weight" class="block mt-1 w-full" type="number"
                                            wire:model.defer="weight" required autofocus autocomplete="weight" />
                                    </div>
                                </div>




                            </div>



                        </div>



                        <div class="col-span-2 md:col-span-1 w-full">
                            <div class=" w-full p-1 ">
                                <div class="mt-2  w-full">

                                    <x-jet-label for="area" value="{{ __('Area') }}" />
                                    <x-jet-input id="area"
                                        class="block mt-1 w-full rounded-md shadow-sm border-gray-300" maxlength="20"
                                        :value="old('area')" type="text" id="area" wire:model.defer="area"
                                        name="area" required placeholder="Area" />


                                </div>
                            </div>



                        </div>
                        <div class=" col-span-2 md:col-span-1 w-full">
                            <div class=" w-full grid grid-cols-2 gap-2">
                                <div class="mt-2  w-full">
                                    <x-jet-label for="city" value="{{ __('City') }}" />
                                    <x-jet-input id="city"
                                        class="block mt-1 w-full rounded-md shadow-sm border-gray-300" maxlength="20"
                                        :value="old('city')" type="text" id="city" wire:model.defer="city"
                                        name="city" required placeholder="City" />
                                </div>
                                <div class="mt-2  w-full">
                                    <x-jet-label for="District" value="{{ __('District') }}" />
                                    <select wire:model.defer="district"
                                        class="block mt-1 w-full rounded-md shadow-sm border-gray-300">
                                        <option value="Alappuzha">Alappuzha</option>
                                        <option value="Ernakulam">Ernakulam</option>
                                        <option value="Idukki">Idukki</option>
                                        <option value="Kannur">Kannur</option>
                                        <option value="Kasaragod">Kasaragod</option>
                                        <option value="Kollam">Kollam</option>
                                        <option value="Kottayam">Kottayam</option>
                                        <option value="Kozhikode">Kozhikode</option>
                                        <option value="Malappuram">Malappuram</option>
                                        <option value="Palakkad">Palakkad</option>
                                        <option value="Pathanamthitta">Pathanamthitta</option>
                                        <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                                        <option value="Thrissur">Thrissur</option>
                                        <option value="Wayanad">Wayanad</option>

                                    </select>
                                </div>




                            </div>



                        </div>
                    </div>

                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button type="submit" x-on:click="showModal = false"
                            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-green-400 text-base font-medium text-white-500 hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Save</button>
                        <button x-on:click="showModal = false" wire:click="boot"
                            class="w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>


                    </div>
                </form>

            </div>
        </div>



    </div>

</div>
