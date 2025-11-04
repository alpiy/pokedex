@extends('layouts.layout')

@section('content')

    <div class="mb-6">
        <a href="{{ route('pokemon.index') }}"
           class="inline-block bg-yellow-500 text-gray-900 font-bold py-2 px-4 rounded hover:bg-yellow-400 transition-colors">
            &larr; Kembali ke Daftar
        </a>
    </div>

    <div class="bg-gray-800 rounded-lg shadow-xl overflow-hidden">

        <div class="bg-gray-700 p-8 flex justify-center items-center" style="min-height: 250px;">
            @if($pokemon['sprites']['front_default'])
                <img src="{{ $pokemon['sprites']['front_default'] }}" alt="{{ $pokemon['name'] }}" class="w-48 h-48 object-contain">
            @else
                <span class="text-gray-500">Gambar tidak tersedia</span>
            @endif
        </div>

        <div class="p-8">
            <h1 class="text-5xl font-bold capitalize text-yellow-300 mb-6">
                {{ $pokemon['name'] }}
            </h1>

            <h2 class="text-2xl font-semibold mb-3 text-white">Tipe:</h2>
            <div class="flex flex-wrap gap-2">
                @foreach ($pokemon['types'] as $typeInfo)
                    <span class="text-lg capitalize bg-blue-500 text-white font-semibold px-4 py-1 rounded-full">
                        {{ $typeInfo['type']['name'] }}
                    </span>
                @endforeach
            </div>

            <div class="mt-6 grid grid-cols-2 gap-4 text-lg">
                <div class="font-semibold">Berat:</div>
                <div>{{ $pokemon['weight'] / 10 }} kg</div>

                <div class="font-semibold">Tinggi:</div>
                <div>{{ $pokemon['height'] / 10 }} m</div>
            </div>
        </div>
    </div>

@endsection
