<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg grid grid-cols-2 md:grid-cols-4 p-5 gap-5">
                <x-dashboard-card class="flex flex-col justify-between">
                    <div class="flex gap-2">
                        <i class="ph ph-sneaker-move text-2xl"></i>
                        <p class="text-xl">Teilnahme Training</p>
                    </div>
                    <p class="text-gray-400 mb-5">für nächstes Training</p>

                    <div class="mt-2 ">
                        <div class="flex flex-col gap-5">
                            <div>
                                <p class="bg-green-500 text-white max-w-16 rounded text-center text-sm font-bold">
                                    Present</p>
                                <div class="grid grid-cols-2 mt-2">
                                    @php
                                        $present = collect(['Liviu', 'Kerim', 'Eddy', 'Furkan']);
                                        $absent = collect(['Kerim C.', 'Halil', 'Yusoufe']);
                                    @endphp
                                    @foreach ($present as $p)
                                        <div class="flex">
                                            <svg class="me-1 h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span>{{ $p }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div>
                                <p class="bg-red-500 text-white max-w-16 rounded text-center text-sm font-bold">
                                    Absent
                                </p>
                                <div class="grid grid-cols-2 mt-2">
                                    @foreach ($absent as $a)
                                        <div>
                                            <i class="ph ph-x-circle text-red-500 h-5 w-5 text-xl mt-5"></i>
                                            <span>{{ $a }}</span>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="flex gap-5 justify-end">
                        <x-button class="flex">
                            <span>Nehme teil</span>
                            <i class="ph ph-check-circle text-xl"></i>
                        </x-button>
                        <x-button class="bg-red-500 hover:bg-red-400 flex ">
                            <span>Nehme nicht teil</span>
                            <i class="ph ph-x-circle text-xl"></i>
                        </x-button>
                    </div>
                </x-dashboard-card>

                <x-dashboard-card class="flex flex-col justify-between">
                    <div class="flex gap-2 ">
                        <i class="ph ph-sneaker-move text-2xl"></i>
                        <p class="text-xl">Teilname Training</p>
                    </div>
                    <p class="text-gray-400 mb-5">für ubernächstes Training</p>

                    <div class="mt-2">
                        <div class="flex flex-col gap-5">
                            <div>
                                <p class="bg-green-500 text-white max-w-16 rounded text-center text-sm font-bold">
                                    Present</p>
                                <div class="grid grid-cols-2 mt-2">
                                    @php
                                        $present->push('Semih');
                                    @endphp
                                    @foreach ($present as $p)
                                        <div class="flex">
                                            <svg class="me-1 h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                            <span>{{ $p }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div>
                                <p class="bg-red-500 text-white max-w-16 rounded text-center text-sm font-bold">Absent
                                </p>
                                <div class="grid grid-cols-2 mt-2">
                                    @foreach (collect(['Denis', 'Emre']) as $a)
                                        <div>
                                            <i class="ph ph-x-circle text-red-500 h-5 w-5 text-xl mt-5"></i>
                                            <span>{{ $a }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 flex justify-end gap-5">
                        <x-button class="flex">
                            <span>Nehme teil</span>
                            <i class="ph ph-check-circle text-xl"></i>
                        </x-button>
                        <x-button class="bg-red-500 hover:bg-red-400 flex ">
                            <span>Nehme nicht teil</span>
                            <i class="ph ph-x-circle text-xl"></i>
                        </x-button>
                    </div>
                </x-dashboard-card>


                <x-dashboard-card class="col-span-2">
                    <div class="flex gap-2 mb-5">
                        <i class="ph ph-first-aid-kit text-2xl"></i>
                        <p class="text-xl">Injured Players</p>
                        <p class="text-gray-400 mt-1">at the moment</p>
                    </div>

                    <div class="w-full flex justify-between p-5">
                        <p>Spieler</p>
                        <p>Verletzung</p>
                        <p>Dauer</p>
                    </div>
                    <div class="mt-5 flex flex-col gap-5">
                        <x-injured-player-avatar initials='LG' injury='Kreuzbandriss' term='2 Monate'
                            name="Liviu Ghita" />
                        <x-injured-player-avatar initials='KO' injury='Sprunggelenk' term='2 Wochen'
                            name="Kerim Olgün" />
                    </div>
                </x-dashboard-card>

                <x-dashboard-card class="col-span-2">
                    <p class="text-xl">Kader</p>
                    <p class="text-gray-400">für nächstes Spiel</p>

                    <div class="mt-2">
                        <table class="min-w-full divide-y divide-gray-300">
                            <tbody class="bg-white divide-y divide-gray-300">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">1</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Liviu</td>
                                    <td class="px-6 py-4 whitespace-nowrap">TW</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">20</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Ersin</td>
                                    <td class="px-6 py-4 whitespace-nowrap">TW</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">3</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Furkan</td>
                                    <td class="px-6 py-4 whitespace-nowrap">IV</td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">4</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Kerem</td>
                                    <td class="px-6 py-4 whitespace-nowrap">LV</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </x-dashboard-card>

                <x-dashboard-card class="col-span-2">
                    <p class="text-xl">Teamrollen</p>
                    <p class="text-gray-400">Key Rollen</p>

                    <div class="grid grid-cols-2 gap-5 justify-center">
                        <x-team-role spieler="Liviu Ghita" role="Trikodienst" icon="ph ph-t-shirt" />
                        <x-team-role spieler="Kerim Olgun" role="Pre Matcher" icon="ph ph-airplane-takeoff" />
                        <x-team-role spieler="Furkan Özgun" role="Kapitän" icon="ph ph-copyright" />
                        <x-team-role spieler="Can" role="Trainer" icon="ph ph-brain" />
                    </div>
                </x-dashboard-card>

            </div>
        </div>
    </div>
</x-app-layout>
