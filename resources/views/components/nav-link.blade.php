@props(['active' => false])

@php
$classes = $active ? 'bg-black text-white px-3 py-2 rounded-md' : 'text-gray-700 hover:bg-gray-300 hover:text-white px-3 py-2 rounded-md';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
