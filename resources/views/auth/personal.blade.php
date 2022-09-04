<x-guest-layout>

    <div class="min-h-screen flex flex-col shadow-2xl justify-center items-center sm:pt-0 bg-gray-100">
        <div class="w-full max-w-md mx-auto overflow-hidden  bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="px-6 py-4">

                <div class="flex flex-col justify-center items-center pt-2 sm:pt-0">
                    <div>
                        <x-jet-authentication-card-logo />
                    </div>
                </div>

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <h3 class="mt-1 text-xl font-medium text-center text-gray-600 dark:text-gray-200">Lets Get Personal</h3>



                <form method="POST" action="{{ route('personal.post') }}">
                    @csrf
                    <x-jet-validation-errors class="mb-4" />

                    <div class="p-1">
                        <div class="p-1">
                            <div class="mt-2">
                                <x-jet-label for="pincode" value="{{ __('PIN Code') }}" />
                                <x-jet-input id="pincode" class=" w-full block mt-1 col-xs-2" type="number"
                                    name="pincode" :value="old('pincode')" required autofocus placeholder="Enter PIN code" />
                            </div>
                        </div>

                        <div class="mt-2 grid grid-cols-1 md:grid-cols-2">

                            <div class="p-1">
                                <div class="items-center">
                                    <x-jet-label for="area" value="{{ __('Area') }}" />
                                    <x-jet-input id="area"
                                        class="block mt-1 w-full rounded-md shadow-sm border-gray-300" maxlength="20"
                                        :value="old('area')" type="text" id="area" name="area" required
                                        placeholder="Area" />

                                </div>
                            </div>

                            <div class="p-1">
                                <x-jet-label for="city" value="{{ __('City') }}" />
                                <x-jet-input id="city"
                                    class="block mt-1 w-full rounded-md shadow-sm border-gray-300" maxlength="20"
                                    :value="old('city')" type="text" id="city" name="city" required
                                    placeholder="City" />


                            </div>
                        </div>

                        <div class="p-1 mt-2">
                            <div class="items-center">
                                <x-jet-label for="District" value="{{ __('District') }}" />
                                <select name="district"
                                    class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">

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

                        <div class="p-1 mt-2">


                            <x-jet-label for="phone" value="{{ __('Phone') }}" />



                            {{-- <div x-data="{ phone: ('{{ old('phone', '') }}') }">
                                <x-jet-input x-mask="9999 9999 99" type="tel" id="phone"
                                    class="block mt-1 w-full rounded-md shadow-sm border-gray-300"
                                    placeholder="9847 851 384" x-model.phone="phone" required autocomplete="phone"
                                    name="phone" />
                            </div> --}}


                            <div class="flex mt-1">

                                <div id="dropdown-button-2" data-dropdown-toggle="dropdown-search-city"
                                    class="flex-shrink-0 z-10 inline-flex items-center py-1.5 px-4 text-sm font-medium text-center text-gray-500 bg-gray-50 border border-gray-300 rounded-l-lg  focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
                                    type="button">
                                    + 91
                                </div>
                                <div class="relative w-full" x-data="{ phone: ('{{ old('phone', '') }}') }">
                                    <x-phone-input x-mask="9999999999" type="tel" id="phone"
                                        placeholder="9847 851 384" x-model.phone="phone" required autocomplete="phone"
                                        name="phone"
                                        class="block p-2.5 w-full z-20 text-sm text-gray-900   rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 " />

                                </div>
                            </div>



                        </div>

                        <div class="mt-1 grid grid-cols-2">
                            <div class="pr-2">
                                <div class="items-center">

                                    @if (\Auth::user()->religion == 'Muslim')
                                        <div class="p-1 mt-2">
                                            <x-jet-label for="caste" value="{{ __('Caste') }}" />
                                            <select name="caste" :value="old('caste')"
                                                class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">

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
                                        <div class="p-1 mt-2">
                                            <x-jet-label for="caste" value="{{ __('Caste') }}" />
                                            <select name="caste" :value="old('caste')"
                                                class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">

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
                                                <option value="other">other</option>

                                            </select>
                                        </div>
                                    @endif



                                    @if (\Auth::user()->religion == 'Christian')
                                        <div class="p-1 mt-2">
                                            <x-jet-label for="caste" value="{{ __('Caste') }}" />
                                            <select name="caste" :value="old('caste')"
                                                class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">

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
                            <div class="pl-2">
                                <div class="mt-2">
                                    <div class="p-1">
                                        <x-jet-label for="star" value="{{ __('Zodiac Sign') }}" />
                                        <select name="star" id="star" :value="old('star')"
                                            class=" block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                            <option value="{{ $value }}">{{ $value }}</option>
                                            <option value="Aries">♈ Aries (March 21-April 19)</option>
                                            <option value="Taurus">♉ Taurus (April 20-May 20)</option>
                                            <option value="Gemini">♊ Gemini (May 21-June 20)</option>
                                            <option value="Cancer">♋ Cancer (June 21-July 22)</option>
                                            <option value="Leo">♌ Leo (July 23-August 22)</option>
                                            <option value="Virgo">♍ Virgo (August 23-September 22)</option>
                                            <option value="Libra">♎ Libra (September 23-October 22)</option>
                                            <option value="Scorpio">♏ Scorpio (October 23-November 21)</option>
                                            <option value="Sagittarius">♐ Sagittarius (November 22-December 21)
                                            </option>
                                            <option value="Capricorn">♑ Capricorn (December 22-January 19)</option>
                                            <option value="Aquarius">♒ Aquarius (January 20-February 18)</option>
                                            <option value="Pisces">♓ Pisces (February 19-March 20)</option>
                                        </select>

                                    </div>
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

                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2"
                                        viewBox="0 0 24 24">
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
