<!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
<a
    {{ $attributes->merge([
        'class' => 'flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform rounded-xl mx-2
                                dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white',
    ]) }}>{{ $slot }}</a>
