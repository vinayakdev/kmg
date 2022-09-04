<div>
    <button wire:click="createShowModal"
        class="z-20 block p-4 text-blue-700 transition-all bg-blue-100 border-2 border-white rounded-full active:bg-blue-50 hover:scale-110 focus:outline-none focus:ring"
        type="button">
        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
        </svg>
    </button>

    <x-jet-dialog-modal wire:model="modalFormVisible">
        <x-slot name="title">
            <nav class="flex" aria-label="Breadcrumb" x-data='{active: "bg-gray-200",inactive:""}'>
                <ol role="list" class="flex overflow-hidden text-gray-700  border b-2 rounded-lg gap-2">
                    <li class="flex items-center">
                        <button :class="$wire.tab === 1 ? active : inactive"
                            class="px-4 py-2 hover:bg-gray-100 rounded-lg" x-on:click="$wire.tab = 1">
                            Personal
                        </button>
                    </li>

                    <li class="flex items-center">

                        <button :class="$wire.tab === 2 ? active : inactive"
                            class="px-4 py-2 hover:bg-gray-100 rounded-lg" x-on:click="$wire.tab = 2">
                            About
                        </button>
                    </li>

                    <li class="flex items-center">

                        <button :class="$wire.tab === 3 ? active : inactive"
                            class="px-4 py-2 hover:bg-gray-100 rounded-lg" x-on:click="$wire.tab = 3">
                            Photo
                        </button>
                    </li>
                </ol>
            </nav>




        </x-slot>

        <x-slot name="content">

            {{-- Personal --}}
            <div class=" grid sm:grid-cols-2  gap-2 p-1 md:p-4  " x-show="$wire.tab === 1">
                {{-- Phone pin --}}
                <div class="col-span-2 md:col-span-1">
                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <x-jet-label value="{{ __('Phone') }}" />
                            <x-jet-input class=" w-full block mt-1 col-xs-2" x-mask="9999999999" type="tel"
                                placeholder="9847 851 384" wire:model.defer="phone" required />
                        </div>
                        <div>
                            <x-jet-label value="{{ __('PIN Code') }}" />
                            <x-jet-input id="pincode" class=" w-full block mt-1 col-xs-2" type="number" required
                                autofocus wire:model.defer="pincode" />
                        </div>
                    </div>
                </div>
                {{-- height weight --}}
                <div class="col-span-2 md:col-span-1">
                    <div class="grid grid-cols-2 gap-2">

                        <div>
                            <x-jet-label value="{{ __('Height (Meters)') }}" />
                            <x-jet-input class="block mt-1 w-full " type="number" wire:model.defer="height" required
                                autofocus autocomplete="height" />
                        </div>
                        <div>
                            <x-jet-label value="{{ __('Weight (Kilogram)') }}" />
                            <x-jet-input class="block mt-1 w-full" type="number" wire:model.defer="weight" required
                                autofocus autocomplete="weight" />
                        </div>

                    </div>
                </div>
                {{-- caste status --}}
                <div class="col-span-2 md:col-span-1">
                    <div class="grid grid-cols-2 gap-2">

                        <div>


                            <x-jet-label value="{{ __('Food habits') }}" />
                            <select wire:model.defer="foodpreference"
                                class="block mt-1 w-full rounded-md shadow-sm border-gray-300 ">
                                <option value="Non-Vegetarian">Non-Vegetarian</option>
                                <option value="Vegetarian">Vegetarian</option>
                                <option value="Eggetarian">Eggetarian</option>
                            </select>


                        </div>
                        <div>
                            <x-jet-label value="{{ __('Marital Status') }}" />
                            <select wire:model.defer="marital_status"
                                class="block mt-1 w-full rounded-md shadow-sm border-gray-300">

                                <option value="Single">Single</option>
                                <option value="Divorced">Divorced</option>
                                <option value="widowed">Widowed</option>

                            </select>
                        </div>

                    </div>
                </div>
                <div class="col-span-2 md:col-span-1">
                    <div>
                        <x-jet-label value="{{ __('Area') }}" />
                        <x-jet-input class="block mt-1 w-full rounded-md shadow-sm border-gray-300" maxlength="20"
                            :value="old('area')" type="text" id="area" wire:model.defer="area" name="area"
                            required placeholder="Area" />
                    </div>
                </div>
                <div class=" col-span-2 md:col-span-1">
                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <x-jet-label value="{{ __('City') }}" />
                            <x-jet-input class="block mt-1 w-full rounded-md shadow-sm border-gray-300" maxlength="20"
                                type="text" wire:model.defer="city" required placeholder="City" />
                        </div>
                        <div>
                            <x-jet-label value="{{ __('District') }}" />
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
                <div class="col-span-2 md:col-span-1">
                    <div>
                        @if (\Auth::user()->religion == 'Muslim')
                            <div>
                                <x-jet-label value="{{ __('Caste') }}" />
                                <select wire:model.defer="caste"
                                    class="block mt-1 w-full rounded-md shadow-sm border-gray-300">

                                    <option value="Ansari">Ansari</option>
                                    <option value="Arain">Arain</option>
                                    <option value="Awan">Awan</option>
                                    <option value="Bohra">Bohra</option>
                                    <option value="Dekkani">Dekkani</option>
                                    <option value="Dudekula">Dudekula</option>
                                    <option value="Hanafi">Hanafi</option>
                                    <option value="Jat">Jat</option>
                                    <option value="Khoja">Khoja</option>
                                    <option value="Lebbai">Lebbai</option>
                                    <option value="Malik">Malik</option>
                                    <option value="Mapila">Mapila</option>
                                    <option value="Maraicar">Maraicar</option>
                                    <option value="Memon">Memon</option>
                                    <option value="Mughal">Mughal</option>
                                    <option value="Others">Others</option>
                                    <option value="Pathan">Pathan</option>
                                    <option value="Qureshi">Qureshi</option>
                                    <option value="Rajput">Rajput</option>
                                    <option value="Rowther">Rowther</option>
                                    <option value="Shafi">Shafi</option>
                                    <option value="Sheikh">Sheikh</option>
                                    <option value="Siddiqui">Siddiqui</option>
                                    <option value="Syed">Syed</option>
                                    <option value="UnSpecified">UnSpecified</option>

                                </select>
                            </div>
                        @endif
                        @if (\Auth::user()->religion == 'Hindu')
                            <div>
                                <x-jet-label value="{{ __('Caste') }}" />
                                <select wire:model.defer="caste"
                                    class="block mt-1 w-full rounded-md shadow-sm border-gray-300">

                                    <option value="Adhi Dravida">Adhi Dravida</option>
                                    <option value="Adiyan">Adiyan</option>
                                    <option value="Adiyodi">Adiyodi</option>
                                    <option value="Aiyyer">Aiyyer</option>
                                    <option value="Ambalavasi">Ambalavasi</option>
                                    <option value="Araya">Araya</option>
                                    <option value="Arunthadiyar">Arunthadiyar</option>
                                    <option value="Arya Vysya">Arya Vysya</option>
                                    <option value="Ayyanavar">Ayyanavar</option>
                                    <option value="Bharathar">Bharathar</option>
                                    <option value="Bhattathiri">Bhattathiri</option>
                                    <option value="Blacksmith">Blacksmith</option>
                                    <option value="Brahmin">Brahmin</option>
                                    <option value="Brahmin - Tamil">Brahmin - Tamil</option>
                                    <option value="Carpenter">Carpenter</option>
                                    <option value="Chakkala Nair">Chakkala Nair</option>
                                    <option value="Chakliyan">Chakliyan</option>
                                    <option value="Chavalakaran">Chavalakaran</option>
                                    <option value="Cheramar">Cheramar</option>
                                    <option value="Cheruman">Cheruman</option>
                                    <option value="Chettiyar">Chettiyar</option>
                                    <option value="Chetty">Chetty</option>
                                    <option value="Chetty - Tamil">Chetty - Tamil</option>
                                    <option value="Devender">Devender</option>
                                    <option value="Dheevara">Dheevara</option>
                                    <option value="Elayathu">Elayathu</option>
                                    <option value="Embrandiri">Embrandiri</option>
                                    <option value="Ezhava">Ezhava</option>
                                    <option value="Ezhavathy">Ezhavathy</option>
                                    <option value="Ezhuthachan">Ezhuthachan</option>
                                    <option value="Ganaka">Ganaka</option>
                                    <option value="Gauda Sar. Brahmin">Gauda Sar. Brahmin</option>
                                    <option value="Goldsmith">Goldsmith</option>
                                    <option value="Gupthan">Gupthan</option>
                                    <option value="Guruckal">Guruckal</option>
                                    <option value="Haveega Brahmin">Haveega Brahmin</option>
                                    <option value="Ilayath">Ilayath</option>
                                    <option value="Iyengar">Iyengar</option>
                                    <option value="Iyer">Iyer</option>
                                    <option value="Jain">Jain</option>
                                    <option value="Kadaiyan">Kadaiyan</option>
                                    <option value="Kaimal">Kaimal</option>
                                    <option value="Kakkalan">Kakkalan</option>
                                    <option value="Kalari Kuruppu">Kalari Kuruppu</option>
                                    <option value="Kalari Panicker">Kalari Panicker</option>
                                    <option value="Kammalar">Kammalar</option>
                                    <option value="Kanakkan">Kanakkan</option>
                                    <option value="Kani">Kani</option>
                                    <option value="Kanisan">Kanisan</option>
                                    <option value="Kaniyan">Kaniyan</option>
                                    <option value="Kartha">Kartha</option>
                                    <option value="Karuvan">Karuvan</option>
                                    <option value="Kavadia">Kavadia</option>
                                    <option value="Kavuthiyya">Kavuthiyya</option>
                                    <option value="Kitaran">Kitaran</option>
                                    <option value="Koodan">Koodan</option>
                                    <option value="Kshathriya">Kshathriya</option>
                                    <option value="Kudumbi">Kudumbi</option>
                                    <option value="Kulala">Kulala</option>
                                    <option value="Kumbaran">Kumbaran</option>
                                    <option value="Kunbi">Kunbi</option>
                                    <option value="Kurava">Kurava</option>
                                    <option value="Kurmi">Kurmi</option>
                                    <option value="Kuruba">Kuruba</option>
                                    <option value="Kurukkal">Kurukkal</option>
                                    <option value="Kuruppu">Kuruppu</option>
                                    <option value="Kusava">Kusava</option>
                                    <option value="Malayan">Malayan</option>
                                    <option value="Malayarayan">Malayarayan</option>
                                    <option value="Maniyani Nair">Maniyani Nair</option>
                                    <option value="Mannadiar">Mannadiar</option>
                                    <option value="Mannan">Mannan</option>
                                    <option value="Marar">Marar</option>
                                    <option value="Maruthuvar">Maruthuvar</option>
                                    <option value="Mason">Mason</option>
                                    <option value="Menon">Menon</option>
                                    <option value="Moger">Moger</option>
                                    <option value="Mooppanar">Mooppanar</option>
                                    <option value="Moosari">Moosari</option>
                                    <option value="Moosath">Moosath</option>
                                    <option value="Moothan">Moothan</option>
                                    <option value="Mukaya">Mukaya</option>
                                    <option value="Mukkuva">Mukkuva</option>
                                    <option value="Muthaliyar">Muthaliyar</option>
                                    <option value="Muthuvan">Muthuvan</option>
                                    <option value="Nadar">Nadar</option>
                                    <option value="Naidu">Naidu</option>
                                    <option value="Naiker">Naiker</option>
                                    <option value="Nair">Nair</option>
                                    <option value="Nambeesan">Nambeesan</option>
                                    <option value="Nambiar">Nambiar</option>
                                    <option value="Nambidi">Nambidi</option>
                                    <option value="Namboothiri">Namboothiri</option>
                                    <option value="Odan">Odan</option>
                                    <option value="Oorali">Oorali</option>
                                    <option value="Others">Others</option>
                                    <option value="Padanna">Padanna</option>
                                    <option value="Panan">Panan</option>
                                    <option value="Pandithar">Pandithar</option>
                                    <option value="Panicker">Panicker</option>
                                    <option value="Paravar">Paravar</option>
                                    <option value="Paraya">Paraya</option>
                                    <option value="Pathiyan">Pathiyan</option>
                                    <option value="Pattarya">Pattarya</option>
                                    <option value="Perumannan">Perumannan</option>
                                    <option value="Peruvannan">Peruvannan</option>
                                    <option value="Pillai">Pillai</option>
                                    <option value="Pisharody">Pisharody</option>
                                    <option value="Poduval">Poduval</option>
                                    <option value="Potti">Potti</option>
                                    <option value="Prajapati">Prajapati</option>
                                    <option value="Pulaya">Pulaya</option>
                                    <option value="Pushpakaunni">Pushpakaunni</option>
                                    <option value="Reddy">Reddy</option>
                                    <option value="S/C-S/T">S/C-S/T</option>
                                    <option value="Saliya">Saliya</option>
                                    <option value="Salva Pillai">Salva Pillai</option>
                                    <option value="Samantha">Samantha</option>
                                    <option value="Sambava">Sambava</option>
                                    <option value="Scheduled Caste">Scheduled Caste</option>
                                    <option value="Shetty">Shetty</option>
                                    <option value="Sidhanar">Sidhanar</option>
                                    <option value="Tamil Yadava">Tamil Yadava</option>
                                    <option value="Telugu Brahmin">Telugu Brahmin</option>
                                    <option value="Thakur">Thakur</option>
                                    <option value="Thandan">Thandan</option>
                                    <option value="Tharakan">Tharakan</option>
                                    <option value="Thevar">Thevar</option>
                                    <option value="Thiyya">Thiyya</option>
                                    <option value="Tulu Brahmin">Tulu Brahmin</option>
                                    <option value="Udayar">Udayar</option>
                                    <option value="Ullada">Ullada</option>
                                    <option value="Unknown">Unknown</option>
                                    <option value="Unnithan">Unnithan</option>
                                    <option value="V-Nair">V-Nair</option>
                                    <option value="Vaduka">Vaduka</option>
                                    <option value="Vaishnav">Vaishnav</option>
                                    <option value="Vala">Vala</option>
                                    <option value="Valluvan">Valluvan</option>
                                    <option value="Vania">Vania</option>
                                    <option value="Vaniar">Vaniar</option>
                                    <option value="Vannan">Vannan</option>
                                    <option value="Vanniyar">Vanniyar</option>
                                    <option value="Varma">Varma</option>
                                    <option value="Vedan">Vedan</option>
                                    <option value="Veerashaiva">Veerashaiva</option>
                                    <option value="Velaan">Velaan</option>
                                    <option value="Velan">Velan</option>
                                    <option value="Velar">Velar</option>
                                    <option value="Vellala Pillai">Vellala Pillai</option>
                                    <option value="Vellalar">Vellalar</option>
                                    <option value="Vellama">Vellama</option>
                                    <option value="Veluthedathu Nair">Veluthedathu Nair</option>
                                    <option value="Venniar">Venniar</option>
                                    <option value="Vettuva">Vettuva</option>
                                    <option value="Vilakkithala Nair">Vilakkithala Nair</option>
                                    <option value="Vill Kurup">Vill Kurup</option>
                                    <option value="Viswabrahmin">Viswabrahmin</option>
                                    <option value="Viswakarma">Viswakarma</option>
                                    <option value="Viswakarma (C)">Viswakarma (C)</option>
                                    <option value="Vysya">Vysya</option>
                                    <option value="Warrier">Warrier</option>
                                    <option value="Yadava">Yadava</option>
                                    <option value="Yogi Gurukkal">Yogi Gurukkal</option>

                                </select>
                            </div>
                        @endif



                        @if (\Auth::user()->religion == 'Christian')
                            <div>
                                <x-jet-label value="{{ __('Caste') }}" />
                                <select wire:model.defer="caste"
                                    class="block mt-1 w-full rounded-md shadow-sm border-gray-300">

                                    <option value="Adventist">Adventist</option>
                                    <option value="Anglican/Episcopal">Anglican/Episcopal</option>
                                    <option value="Anglo-Indian">Anglo-Indian</option>
                                    <option value="Apostolic">Apostolic</option>
                                    <option value="AssemblyofGod(AG)">AssemblyofGod(AG)</option>
                                    <option value="Baptist">Baptist</option>
                                    <option value="BornAgain">BornAgain</option>
                                    <option value="Brethren">Brethren</option>
                                    <option value="Calvinist">Calvinist</option>
                                    <option value="ChaldeanSyrian(Assyrian)">ChaldeanSyrian(Assyrian)
                                    </option>
                                    <option value="ChurchofChrist">ChurchofChrist</option>
                                    <option value="ChurchofGod">ChurchofGod</option>
                                    <option value="ChurchofNorthIndia">ChurchofNorthIndia</option>
                                    <option value="ChurchofSouthIndia">ChurchofSouthIndia</option>
                                    <option value="Congregational">Congregational</option>
                                    <option value="Evangelist">Evangelist</option>
                                    <option value="Jacobite">Jacobite</option>
                                    <option value="Jehovah'sWitnesses">Jehovah'sWitnesses</option>
                                    <option value="Knanaya">Knanaya</option>
                                    <option value="KnanayaCatholic">KnanayaCatholic</option>
                                    <option value="KnanayaJacobite">KnanayaJacobite</option>
                                    <option value="LatinCatholic">LatinCatholic</option>
                                    <option value="Latterdaysaints">Latterdaysaints</option>
                                    <option value="Lutheran">Lutheran</option>
                                    <option value="MalabarIndependentSyrianChurch">
                                        MalabarIndependentSyrianChurch</option>
                                    <option value="MalankaraCatholic">MalankaraCatholic</option>
                                    <option value="Marthoma">Marthoma</option>
                                    <option value="Melkite">Melkite</option>
                                    <option value="Mennonite">Mennonite</option>
                                    <option value="Methodist">Methodist</option>
                                    <option value="Moravian">Moravian</option>
                                    <option value="Orthodox">Orthodox</option>
                                    <option value="Pentecost">Pentecost</option>
                                    <option value="Presbyterian">Presbyterian</option>
                                    <option value="Protestant">Protestant</option>
                                    <option value="ReformedBaptist">ReformedBaptist</option>
                                    <option value="ReformedPresbyterian">ReformedPresbyterian</option>
                                    <option value="RomanCatholic">RomanCatholic</option>
                                    <option value="Seventh-dayAdventist">Seventh-dayAdventist</option>
                                    <option value="St.ThomasEvangelical">St.ThomasEvangelical</option>
                                    <option value="SyrianCatholic">SyrianCatholic</option>
                                    <option value="SyrianJacobite">SyrianJacobite</option>
                                    <option value="SyrianOrthodox">SyrianOrthodox</option>
                                    <option value="SyroMalabar">SyroMalabar</option>
                                    <option value="Christian-Others">Christian-Others</option>
                                    <option value="Don't wish to specify">Don't wish to specify</option>
                                </select>


                            </div>
                        @endif
                    </div>
                </div>
            </div>
            {{-- About --}}
            <div class=" grid sm:grid-cols-2  gap-2  md:p-4 mb-2 p-1 " x-show="$wire.tab === 2">
                <div class="col-span-2 ">
                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <x-jet-label value="{{ __('Job') }}" />
                            <x-jet-input class=" w-full block mt-1 col-xs-2" type="text" wire:model.defer="job"
                                required />
                        </div>
                        <div>
                            <x-jet-label value="{{ __('Highest Education') }}" />
                            <x-jet-input class=" w-full block mt-1 col-xs-2" type="text" required autofocus
                                wire:model.defer="education" />
                        </div>
                    </div>
                </div>
                {{-- Desc --}}
                <div class="col-span-2 ">
                    <div class="">
                        <div>
                            <x-jet-label value="{{ __('Description') }}" />
                            <textarea rows="5" id="pincode" class=" w-full block mt-1 col-xs-2 rounded-md shadow-sm" type="text"
                                required autofocus wire:model.defer="desc"></textarea>
                        </div>

                    </div>
                </div>
                {{-- hobbies --}}
                <div class="col-span-2">
                    <div>
                        <x-jet-label value="{{ __('Hobbies') }}" />
                        <x-jet-input class="block mt-1 w-full rounded-md shadow-sm border-gray-300" maxlength="30"
                            type="text" wire:model.defer="hobbies" required />
                    </div>
                </div>
            </div>
            <div x-show="$wire.tab === 3">
                {{-- <a href="/filepupload">click here to change profile pictures</a> --}}
                <div class="p-1">
                    <div class="text-center mt-6">
                        <a href="/filepupload"
                            class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full"
                            type="submit" style="transition: all 0.15s ease 0s;">
                            Click here to change profile picture
                        </a>
                    </div>

                </div>

            </div>
        </x-slot>

        <x-slot name="footer">
            <div x-show="$wire.tab !== 3">
                <x-jet-secondary-button wire:click="boot" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-jet-secondary-button>

                <x-jet-danger-button
                    class="ml-3 bg-green-700 hover:bg-green-900 focus:ring-green-200 active:bg-green-600"
                    wire:loading.attr="disabled" wire:click='save'>
                    {{ __('Save') }}
                </x-jet-danger-button>

            </div>
        </x-slot>

    </x-jet-dialog-modal>
    </form>


</div>
