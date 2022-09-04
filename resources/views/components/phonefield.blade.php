<!-- @props(['disabled' => false])
<input id="phone" name="phone" type="tel" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'transition duration-500 ease-in-out mt-1 text-md block rounded-lg bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 py-3 px-3 placeholder-gray-600 shadow-md focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none']) !!}> -->


<div>

    <div class="mt-1 relative rounded-md shadow-sm">
        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <span class="text-gray-500  text-md">
                +91
            </span>
        </div>
        <input x-mask="9999999999" type="tel" pattern="[0-9]{10}" id="phone" type="tel" name="phone"
            :value="old('phone')" required autocomplete="phone"
            class="py-2 px-3 transition duration-500 ease-in-out w-full focus:ring-indigo-500 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 block  pl-12 pr-12 sm:text-sm placeholder-gray-300 focus:placeholder-gray-500"
            placeholder="9847851384">

    </div>
</div>
