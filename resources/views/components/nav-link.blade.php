@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'flex items-center mt-4 py-2 px-6 bg-gray-700 bg-opacity-25 text-white'
                : 'flex items-center mt-4 py-2 px-6 text-white';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $icon ?? '' }}
    <span class="mx-3">{{ $slot }}</span>
</a>