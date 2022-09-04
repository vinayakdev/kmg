@props(['value'])
@props(['id'])
@props(['type'])

{{-- <div
    class="relative z-0 inline-block h-12 w-full  border-blue-600 rounded-lg bg-gray-200 py-1.5 outline-none focus:bg-black">
    <input name="{{ $id }}" id="{{ $id }}" type="{{$type}}"
        class="peer absolute block h-12 w-full bg-transparent px-4 py-2.5 text-sm text-gray-900 focus:border-blue-600 border-0 outline-0 focus:ring-0 "
        placeholder=" " required :value="old('{{$id}}')" />
    <label for="floating_email"
        class="absolute top-8 -z-10 -m-4 mx-4 origin-[0] -translate-y-4 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">
        {{ $value }}
    </label>
</div> --}}
{{--
<div class="relative z-0 inline-block w-full h-14 ">
    <input name="{{ $id }}" id="{{ $id }}" type="{{$type}}"
        class="peer absolute inset-x-0 top-0 block h-14 w-full rounded-lg border-0 bg-gray-300/70 px-4 py-2.5 text-sm text-gray-900 focus:border-blue-600 focus:outline-0 focus:ring-0"
        placeholder=" " required />
    <label for="floating_email"
        class="absolute top-8 -z-10 -m-4 mx-4 origin-[0] -translate-y-4 scale-75 transform text-sm text-gray-500 duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">{{
        $value }}</label>
</div> --}}

@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => ' focus:border-indigo-300
focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm']) !!}>