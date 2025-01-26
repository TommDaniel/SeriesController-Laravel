<x-layout title="Séries">
    <div class="max-w-md mx-auto my-8">
        <ul class="list-none space-y-2 bg-white shadow-lg rounded-lg p-4">
            @foreach ($series as $serie)
                <li class="flex items-center gap-3 p-3 border border-gray-200 rounded-md hover:bg-gray-50">
                    <div class="bg-blue-500 text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold">
                        {{ $loop->index + 1 }}
                    </div>
                    <span class="text-gray-800 font-medium">{{ $serie->name }}</span>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="flex justify-center mb-6 w-full">
        <a href="/series/criar"
           class="px-6 py-3 text-xl font-bold text-white bg-blue-600 hover:bg-blue-700 rounded-lg shadow-md transition-transform transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300">
            Adicionar
        </a>
    </div>
</x-layout>
