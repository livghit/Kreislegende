@props(['spieler', 'role', 'icon'])

<div class="flex flex-col text-center">
    <i class="{{ $icon }} text-4xl font-bold text-red-500"></i>
    <p class="font-bold">{{ $role }}</p>
    <p class="text-gray-400">{{ $spieler }}</p>
</div>
