<x-layout title="Séries">
    @isset($mensagemSucesso)
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded" role="alert">
            <strong class="font-bold"> {{ $mensagemSucesso }} </strong>
        </div>
    @endisset

    <div class="max-w-md mx-auto my-8">
        <ul class="list-none space-y-2 bg-white shadow-lg rounded-lg p-4">
            @foreach ($series as $serie)
                <li class="flex justify-between items-center gap-3 p-3 border border-gray-200 rounded-md hover:bg-gray-50">
                    <a href="{{ route('seasons.index', $serie->id) }}" class="flex items-center gap-2">
                    <div
                        class="bg-blue-500 text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold">
                        {{ $serie->seasons->count() }}
                    </div>
                    </a>
                    <span class="text-gray-800 font-medium">{{ $serie->name }}</span>
                    <div class="flex gap-2">

                        <form action="{{ route(('series.destroy'), $serie->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button
                                class="bg-red-500 text-white text-sm px-4 py-2 rounded-full shadow-md transition hover:bg-red-600 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-offset-2">
                                x
                            </button>
                        </form>
                        <a href="{{ route('series.edit', $serie->id) }}"
                           class="bg-yellow-500 text-white text-sm px-4 py-2 rounded-full shadow-md transition hover:bg-yellow-600 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2">
                            Editar
                        </a>
                    </div>

                </li>
            @endforeach
        </ul>
    </div>
    <div class="flex justify-center mb-6 w-full">
        <a href="{{ route('series.create') }}"
           class="px-6 py-3 text-xl font-bold text-white bg-blue-600 hover:bg-blue-700 rounded-lg shadow-md transition-transform transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300">
            Adicionar
        </a>
    </div>
</x-layout>
