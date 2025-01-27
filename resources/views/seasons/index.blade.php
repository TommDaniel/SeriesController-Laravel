<x-layout title="Temporadas de {!! $series->name !!}">
    <div class="max-w-md mx-auto my-8">
        <ul class="list-none space-y-2 bg-white shadow-lg rounded-lg p-4">
            @foreach ($seasons as $season)
                <li class="flex justify-between items-center gap-3 p-3 border border-gray-200 rounded-md hover:bg-gray-50">
{{--                    <a href="{{ route('episode.index', $season->id) }}" class="flex items-center gap-2">--}}
{{--                        <div--}}
{{--                            class="bg-blue-500 text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold">--}}
{{--                            {{ $season->episodes->count() }}--}}
{{--                        </div>--}}
{{--                    </a>--}}
                    <div
                        class="bg-blue-500 text-white rounded-full w-8 h-8 flex items-center justify-center text-sm font-bold">
                        {{ $season->episodes->count() }}
                    </div>
                    <span class="text-gray-800 font-medium">Temporada {{ $season->number }}</span>
                    <div class="flex gap-2">
                        <input type="checkbox" name="watched" value="1">
                    </div>

                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
