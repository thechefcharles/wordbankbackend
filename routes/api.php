<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhraseController;

// This route is protected by sanctum for user details.
Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

// Use the controller to fetch a random phrase.
Route::get('/random-phrase', [PhraseController::class, 'getRandomPhrase']);
