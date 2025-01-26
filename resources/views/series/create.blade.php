<x-layout title="Nova Série">
    <form action="/series/salvar" method="post" class=" max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md space-y-4">
        @csrf
        <!-- Nome -->
        <div class="mb-10">
            <label for="nome" class="block text-lg font-medium text-gray-700 mb-2">
                Nome:
            </label>
            <input type="text" id="nome" name="nome"
                   class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-500"
                   placeholder="Digite o nome" required>
        </div>

        <!-- Botão -->
        <button type="submit"
                class="w-full bg-blue-600 text-white text-lg font-semibold py-3 rounded-lg shadow-md hover:bg-blue-700 transition-transform transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300">
            Adicionar
        </button>
    </form>

</x-layout>
