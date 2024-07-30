@props(['initials', 'injury', 'term', 'name'])

<div class="flex justify-between w-full hover:bg-gray-200 transition ease-in-out duration-500 p-5 rounded-lg"
    data-twe-toggle="tooltip" data-twe-placement="right" data-twe-ripple-init data-twe-ripple-color="light"
    title="{{ $name }}">
    <div
        class="relative inline-flex items-center justify-center w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
        <span class="font-medium text-gray-600 dark:text-gray-300">{{ $initials }}</span>
    </div>
    <p class="font-bold mt-2">Fällt wegen {{ $injury }} </p>
    <p class="font-bold mt-2 text-red-700">{{ $term }}</p>
</div>
