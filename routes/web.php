<?php

use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;

// Hanya sisakan dua rute ini.
Route::get('/', [PokemonController::class, 'index'])->name('pokemon.index');
Route::get('/pokemon/{name}', [PokemonController::class, 'show'])->name('pokemon.show');

// HAPUS SEMUA YANG ADA DI BAWAH INI (termasuk "require __DIR__.'/auth.php';")
