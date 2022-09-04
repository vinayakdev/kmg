@props(['active'])

@php
$classes =
    $active ?? false
        ? 'inline-flex items-center text-indigo-500 text-gray-900 md:bg-zinc-100
transition rounded-lg '
        : 'inline-flex items-center text-gray-500
hover:text-gray-700 hover:border-gray-500 transition   ';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
