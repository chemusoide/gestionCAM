<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($dojos as $dojo)
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-4">
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('storage/dojos/' . $dojo->img) }}" alt="{{ $dojo->nombre }}" class="h-16 w-16 rounded-full">
                            <h3 class="text-lg font-bold mt-2">{{ $dojo->nombre }}</h3>
                            <p class="text-gray-600 dark:text-gray-400">Shihan: {{ $dojo->shihans->first()->name ?? 'N/A' }}</p>
                            <p class="text-gray-600 dark:text-gray-400">Dojo-Cho: {{ $dojo->dojoChos->first()->name ?? 'N/A' }}</p>
                            <p class="text-gray-600 dark:text-gray-400">Alumnos: {{ $dojo->alumnos->count() }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
