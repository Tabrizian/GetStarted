<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use Illuminate\Http\Request;

use App\Http\Requests;

class NotesController extends Controller
{
    public function store(Request $request, Card $card) {
        $note = new Note();
        $note->body = $request->body;
        $card->notes()->save($note);

        return back();
    }

    public function edit(Note $note){
        return view('notes.edit', compact('note'));
    }

    public function update(Note $note, Request $request) {
        $note->update(['body' => $request->body]);

        return back();
    }
}
