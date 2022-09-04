<div>
    <div class="grid grid-cols-1 gap-4 lg:grid-cols-4 lg:items-start">
        <div class="lg:sticky lg:top-4">
            <details open class="overflow-hidden border border-gray-200 rounded">
                <summary class="flex items-center justify-between px-5 py-3 bg-gray-100 lg:hidden">
                    <span class="text-sm font-medium">
                        Toggle Filters
                    </span>

                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </summary>

                <div class="border-t border-gray-200 lg:border-t-0">
                    <fieldset>
                        <legend class="block w-full px-5 py-3 text-xs font-medium bg-gray-50">
                            Search by Name
                        </legend>
                        {{-- brilliance of alpine --}}
                        {{-- <div class="px-5 py-6 space-y-2">

                            <div x-data @keyup="window.scrollTo({top: 0, behavior: 'smooth'})">
                                <input type="search" wire:model="name"
                                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" />
                            </div>

                        </div> --}}

                        <div class="flex items-center px-5 py-6 space-y-2">
                            <label for="voice-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="search" x-data @keydown="window.scrollTo({top: 0, behavior: 'smooth'})"
                                    autofocus wire:model="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 block w-full pl-10 p-2.5 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">

                            </div>

                        </div>


                    </fieldset>
                    <fieldset>
                        <legend class="block w-full px-5 py-3 text-xs font-medium bg-gray-50">
                            Sort
                        </legend>


                        {{-- <div class="w-full px-3">
                            <label class="mb-2 text-xs font-bold tracking-wide uppercase text-grey-darker"
                                for="grid-zip">
                                Marital Status
                            </label>
                            <select
                                class="w-full px-4 pr-8 border rounded appearance-none bg-grey-lighter border-grey-lighter text-grey-darker"
                                class="form-control" placeholder="maritalmodel" wire:model="maritalmodel"
                                wire:click="gotoPage(1)" id="grid-state">
                                <option value="">All</option>
                                @foreach ($marital_statuscontroller as $marital_status)
                                    <option value="{{ $marital_status->marital_status }}">
                                        {{ $marital_status->marital_status }}</option>
                                @endforeach
                            </select>
                        </div> --}}


                        <div class="px-5 py-6 space-y-2">
                            <div>
                                <label class="text-xs text-grey-darker">
                                    Marital Status
                                </label>

                                <div class="flex items-center ">

                                    <select wire:model="marital_status_model"
                                        class="w-full text-sm border-gray-100 rounded">
                                        <option value="">All</option>
                                        @foreach ($marital_statuscontroller as $marital_status)
                                            <option value="{{ $marital_status->marital_status }}">
                                                {{ $marital_status->marital_status }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div>
                                <label class="text-xs text-grey-darker">
                                    Religion
                                </label>

                                <div class="flex items-center ">

                                    <select wire:model="religion_model" class="w-full text-sm border-gray-100 rounded">
                                        <option value="">All</option>
                                        @foreach ($religioncontroller as $religion)
                                            <option value="{{ $religion->religion }}">
                                                {{ $religion->religion }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>

                    </fieldset>

                    <div>
                        <fieldset>
                            <legend class="block w-full px-5 py-3 text-xs font-medium bg-gray-50">
                                Age
                            </legend>

                            <div class="grid grid-cols-2 px-5 py-6 space-y-2">
                                <div class="flex items-center">
                                    <input type="radio" name="list-radio" wire:model="agemodel" value=""
                                        class="w-5 h-5 border-gray-300 rounded" />

                                    <label for="3+" class="ml-3 text-sm font-medium">
                                        All
                                    </label>
                                </div>
                                <div class="flex items-center">
                                    <input type="radio" name="list-radio" wire:model="agemodel" value="2029"
                                        class="w-5 h-5 border-gray-300 rounded" />

                                    <label for="3+" class="ml-3 text-sm font-medium">
                                        20 - 29
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input type="radio" name="list-radio" wire:model="agemodel" value="3039"
                                        class="w-5 h-5 border-gray-300 rounded" />

                                    <label for="8+" class="ml-3 text-sm font-medium">
                                        30 - 39
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input type="radio" name="list-radio" wire:model="agemodel" value="4049"
                                        class="w-5 h-5 border-gray-300 rounded" />

                                    <label for="12+" class="ml-3 text-sm font-medium">
                                        40 - 49
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input type="radio" name="list-radio" wire:model="agemodel" value="50"
                                        class="w-5 h-5 border-gray-300 rounded" />

                                    <label for="12+" class="ml-3 text-sm font-medium">
                                        50 +
                                    </label>
                                </div>


                            </div>
                        </fieldset>
                    </div>

                    <div class="flex justify-between px-5 py-3 border-t border-gray-200">
                        {{-- <button name="reset" type="button"
                            class="text-xs font-medium text-gray-600 underline rounded">
                            Reset All
                        </button>

                        <button name="commit" type="button"
                            class="px-5 py-3 text-xs font-medium text-white bg-green-600 rounded">
                            Apply Filters
                        </button> --}}
                        <button type="button " wire:click="resetFilters" x-data
                            @click="window.scrollTo({top: 0, behavior: 'smooth'})"
                            class=" w-full flex  justify-between text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Clear Filters
                            {{-- <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z">
                                </path>
                            </svg> --}}
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-2 -mr-1"
                                fill="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                        </button>
                    </div>
                </div>
            </details>
        </div>

        <div class="lg:col-span-3">
            <div
                class="sticky z-10 flex items-center justify-between p-4 rounded-lg top-4 bg-white/25 backdrop-blur-md ">
                <p class="p-2 text-sm text-gray-500 border-gray-100 rounded bg-white/50">
                    <span class="inline">
                        Showing {{ $userss->firstItem() }} to {{ $userss->lastItem() }} of
                    </span>
                    {{ $userss->total() }} Users
                </p>

                <div class="ml-4">
                    <label for="SortBy" class="sr-only">
                        Sort
                    </label>

                    <select wire:model="order" class="text-sm border-gray-100 rounded">
                        <option value="rand">Random</option>
                        <option value="name-asc">Name, A-Z</option>
                        <option value="name-desc">Name, Z-A</option>
                        <option value="age-desc">Age, Low-High</option>
                        <option value="age-asc">Age, High-Low</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 gap-4 mt-4 rounded-lg sm:grid-cols-2 lg:grid-cols-3">
                {{-- search results --}}
                @foreach ($userss as $user)
                    <div class="my-2 overflow-hidden text-black duration-300 ease-in-out transform border-indigo-500 rounded shadow-lg hover:scale-105"
                        onclick="window.open('/user/{{ $user->id }}', '_blank')  ;">
                        <div
                            class="max-w-lg rounded-lg shadow-lg hover:bg-white hover:shadow-lg hover:border-transparent bg-gray-50">
                            <div class="w-full overflow-hidden duration-75 ease-in rounded">


                                <div class="aspect-[4/3] relative">

                                    <img class="items-center object-cover object-center w-full h-full bg-white rounded-t-lg shadow-2xl "
                                        alt="hero" src="{{ $user->profile_photo_url }}">


                                </div>


                                <div class="flex items-center justify-between px-6 py-3 text-white bg-gray-900">
                                    <h1 class="text-xl font-semibold truncate fill-current ">
                                        {{ $user->name }} {{ $user->lname }}
                                    </h1>
                                    <div class="text-xl fill-current font- ">
                                        {{ Carbon\Carbon::parse($user->dob)->age }}</div>
                                </div>

                            </div>

                            <div class="px-6 py-4">
                                <p class="py-2 text-gray-700 truncate text-grey-100 group-hover:text-gray-500">
                                    {{ $user->profile->description }} <br>
                                </p>

                                <div class="flex items-center mt-4 text-gray-700 dark:text-gray-200">
                                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 11H10V13H14V11Z" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7 5V4C7 2.89545 7.89539 2 9 2H15C16.1046 2 17 2.89545 17 4V5H20C21.6569 5 23 6.34314 23 8V18C23 19.6569 21.6569 21 20 21H4C2.34314 21 1 19.6569 1 18V8C1 6.34314 2.34314 5 4 5H7ZM9 4H15V5H9V4ZM4 7C3.44775 7 3 7.44769 3 8V14H21V8C21 7.44769 20.5522 7 20 7H4ZM3 18V16H21V18C21 18.5523 20.5522 19 20 19H4C3.44775 19 3 18.5523 3 18Z" />
                                    </svg>

                                    <h1 class="px-2 overflow-hidden text-sm truncate">
                                        {{ $user->profile->job }}</h1>
                                </div>

                                <div class="flex items-center mt-4 text-gray-700 dark:text-gray-200">
                                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M16.2721 10.2721C16.2721 12.4813 14.4813 14.2721 12.2721 14.2721C10.063 14.2721 8.27214 12.4813 8.27214 10.2721C8.27214 8.063 10.063 6.27214 12.2721 6.27214C14.4813 6.27214 16.2721 8.063 16.2721 10.2721ZM14.2721 10.2721C14.2721 11.3767 13.3767 12.2721 12.2721 12.2721C11.1676 12.2721 10.2721 11.3767 10.2721 10.2721C10.2721 9.16757 11.1676 8.27214 12.2721 8.27214C13.3767 8.27214 14.2721 9.16757 14.2721 10.2721Z" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M5.79417 16.5183C2.19424 13.0909 2.05438 7.3941 5.48178 3.79418C8.90918 0.194258 14.6059 0.0543983 18.2059 3.48179C21.8058 6.90919 21.9457 12.606 18.5183 16.2059L12.3124 22.7241L5.79417 16.5183ZM17.0698 14.8268L12.243 19.8965L7.17324 15.0698C4.3733 12.404 4.26452 7.9732 6.93028 5.17326C9.59603 2.37332 14.0268 2.26454 16.8268 4.93029C19.6267 7.59604 19.7355 12.0269 17.0698 14.8268Z" />
                                    </svg>

                                    <h1 class="px-2 text-sm">{{ $user->profile->district }}</h1>
                                </div>

                                {{-- <div class="flex items-center mt-4 text-gray-700 dark:text-gray-200">
                                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M3.00977 5.83789C3.00977 5.28561 3.45748 4.83789 4.00977 4.83789H20C20.5523 4.83789 21 5.28561 21 5.83789V17.1621C21 18.2667 20.1046 19.1621 19 19.1621H5C3.89543 19.1621 3 18.2667 3 17.1621V6.16211C3 6.11449 3.00333 6.06765 3.00977 6.0218V5.83789ZM5 8.06165V17.1621H19V8.06199L14.1215 12.9405C12.9499 14.1121 11.0504 14.1121 9.87885 12.9405L5 8.06165ZM6.57232 6.80554H17.428L12.7073 11.5263C12.3168 11.9168 11.6836 11.9168 11.2931 11.5263L6.57232 6.80554Z" />
                                    </svg>

                                    <h1 class="px-2 text-sm">{{ $user->email }}</h1>
                                </div> --}}
                                <div class="flex gap-2 py-4 text-xs truncate ">
                                    <span
                                        class="z-0 px-2 py-2 text-sm font-bold text-blue-500 rounded-lg bg-blue-200/40">{{ $user->profile->marital_status }}</span>
                                    <span
                                        class="z-0 px-2 py-2 text-sm font-bold text-blue-500 rounded-lg bg-blue-200/40">{{ $user->profile->caste }}</span>
                                    <span
                                        class="z-0 px-2 py-2 text-sm font-bold text-blue-500 rounded-lg bg-blue-200/40">{{ $user->profile->star }}</span>
                                    {{-- <span
                                        class="inline-block px-2 py-1 font-semibold text-red-600 bg-red-100 rounded-full bg-grey-lighter text-grey-darker">#{{ $user->gender }}</span> --}}
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="flex flex-col items-center my-12">
                <div class="p-3 ">
                    {{-- <div class="pagination">
                        {!! $userss->render() !!}
                    </div> --}}

                    @if ($userss->hasMorePages())
                        {{-- <button wire:click.prevent="loadMore">Load more</button> --}}

                        {{-- <button wire:click.prevent="loadMore"
                            class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-gray-600 whitespace-no-wrap bg-white border border-gray-200 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:shadow-none">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            <span class="relative">Load more </span>
                        </button> --}}

                        <div x-data="{
                            observe() {
                                const observer = new IntersectionObserver((users) => {
                                    users.forEach(users => {
                                        if (users.isIntersecting) {
                                            @this.loadMore()
                                        }
                                    })
                                })
                                observer.observe(this.$el)
                            }
                        }" x-init="observe"></div>
                        <div wire:loading>
                            <div disabled type="button"
                                class="text-white bg-blue-700  focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 inline-flex items-center">
                                <svg role="status" class="inline w-4 h-4 mr-3 text-white animate-spin"
                                    viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                        fill="#E5E7EB" />
                                    <path
                                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                        fill="currentColor" />
                                </svg>
                                Loading...
                            </div>
                        </div>
                    @endif

                </div>
            </div>

        </div>
    </div>
    {{-- {{ dd($userss) }} --}}


</div>
