<x-layout title="Editar Série '{!! $series->name !!}'">
    <form action="{{ route('series.update', $series->id) }}" method="post" class=" max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md space-y-4">
        @csrf
        @method('PUT')


        <!-- Nome -->
        <div class="mb-10">
            <label for="name" class="block text-lg font-medium text-gray-700 mb-2">
                Nome:
            </label>
            <input type="text" id="name" name="name"
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-500"
                   placeholder="Digite o nome" required value="{{ $series->name }}">
        </div>
        <div class="mb-10">
            <label for="seasonsQty" class="block text-lg font-medium text-gray-700 mb-2">
                Temporadas:
            </label>
            <input type="number" id="seasonsQty" name="seasonsQty"
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-500"
                   placeholder="Digite o numero de temporadas" required value="{{ $series->seasonsQty }}">
        </div>
        <div class="mb-10">
            <label for="episodesPerSeason" class="block text-lg font-medium text-gray-700 mb-2">
                Episodios:
            </label>
            <input type="number" id="episodesPerSeason" name="episodesPerSeason"
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-500"
                   placeholder="Digite o numero de episodios" required value="{{ $series->episodesPerSeason }}">
        </div>
        <!-- Botão -->
        <button type="submit"
                class="w-full bg-blue-600 text-white text-lg font-semibold py-3 rounded-lg shadow-md hover:bg-blue-700 transition-transform transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300">
            Adicionar
        </button>
    </form>

</x-layout>
