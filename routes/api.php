<?php

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
use App\Http\Controllers\PhraseController;

Route::get('/random-phrase', [PhraseController::class, 'getRandomPhrase']);
use App\Models\Phrase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/random-phrase', function () {
    return Phrase::inRandomOrder()->first(); // Fetches a random phrase
});
