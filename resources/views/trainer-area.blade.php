<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Trainer Area') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg grid grid-cols-2 md:grid-cols-4 p-5 gap-5">
                Trainer Area where Trainer can see an Overview with the Trainings that happened last months, can edit
                the starting 11 and create training sessions for the season
            </div>
        </div>
    </div>
</x-app-layout>
