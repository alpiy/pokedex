@extends('layouts.layout')

@section('content')

    <h1 class="text-4xl font-bold mb-8 text-yellow-300">Daftar Pokedex</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($pokemonList as $pokemon)
            <a href="{{ route('pokemon.show', ['name' => $pokemon['name']]) }}"
               class="block p-6 bg-gray-800 rounded-lg shadow-md transition-transform transform hover:scale-105 hover:bg-gray-700">

                <h2 class="text-2xl font-semibold capitalize text-white">
                    {{ $pokemon['name'] }}
                </h2>
            </a>
        @endforeach
    </div>

@endsection
