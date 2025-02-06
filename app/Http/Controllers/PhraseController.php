<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phrase;

class PhraseController extends Controller
{
    public function getRandomPhrase()
    {
        $phrase = Phrase::inRandomOrder()->first(); // Fetch a random phrase

        if (!$phrase) {
            return response()->json(['error' => 'No phrases found'], 404);
        }

        return response()->json($phrase);
    }
}
