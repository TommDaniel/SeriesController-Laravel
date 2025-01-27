<x-layout title="Episodios ">
    <form method="POST">
        @csrf
        <div class="max-w-md mx-auto my-8">
            <ul class="list-none space-y-2 bg-white shadow-lg rounded-lg p-4">
                @foreach ($episodes as $episode)
                    <li class="flex justify-between items-center gap-3 p-3 border border-gray-200 rounded-md hover:bg-gray-50">
                        <span class="text-gray-800 font-medium">Episódio {{ $episode->number }}</span>
                        <div class="flex gap-2">
                            <input type="checkbox" name="episodes[]"
                                   value="{{ $episode->id }}"
                                   @if($episode->watched) checked @endif>
                        </div>

                    </li>
                @endforeach
            </ul>
        </div>
        <div class="flex justify-center mb-6 w-full">
            <button
               class="px-6 py-3 text-xl font-bold text-white bg-blue-600 hover:bg-blue-700 rounded-lg shadow-md transition-transform transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300">
                Salvar
            </button>
        </div>
    </form>
</x-layout>
