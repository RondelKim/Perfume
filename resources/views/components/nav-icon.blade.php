@props(['href' => '#', 'title' => '', 'icon' => ''])

<a href="{{ $href }}" title="{{ $title }}" class="p-2 rounded-md hover:bg-gray-300 transition flex items-center space-x-2">
    <img src="{{ $icon }}" alt="{{ $title }}" class="w-6 h-6">
    <span class="hidden md:inline text-gray-700">{{ $slot }}</span>
</a>
