<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // <-- Penting untuk memanggil API
use Illuminate\View\View; // <-- Penting untuk tipe data

class PokemonController extends Controller
{
    /**
     * Menampilkan daftar Pokemon (halaman utama).
     */
    public function index(): View
    {
        // Panggil API untuk 20 Pokemon pertama
        $response = Http::get('https://pokeapi.co/api/v2/pokemon?limit=24');
        $data = $response->json();
        $pokemonList = $data['results'];

        // Kirim data ke view
        return view('pokemon.index', [
            'pokemonList' => $pokemonList
        ]);
    }

    /**
     * Menampilkan detail satu Pokemon.
     */
    public function show($name): View
    {
        // Panggil API untuk detail berdasarkan nama
        $response = Http::get("https://pokeapi.co/api/v2/pokemon/{$name}");
        $pokemon = $response->json();

        // Kirim data ke view
        return view('pokemon.show', [
            'pokemon' => $pokemon
        ]);
    }
}
