<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index(){
        $notes=Note::all();
        return view('note.index', compact('notes'));
    }

    public function create(){
        return view('note.create');
    }

    public function store(){
        $data=request()->validate([
            'my_date'=>'required|date',
            'my_time'=>'required|date_format:H:i',
            'event'=>'string',
            'description'=>'string'
        ]);
        Note::create($data);
        return redirect()->route('notes.index');
    }

    public function show(Note $note){
        return view('note.show', compact('note'));
    }

    public function edit(Note $note){
        return view('note.edit', compact('note'));
    }

    public function update(Note $note){
        $data=request()->validate([
            'my_date'=>'required|date',
            'my_time'=>'required|date_format:H:i:s',
            'event'=>'string',
            'description'=>'string'
        ]);
        $note->update($data);
        return redirect()->route('notes.show', $note->id);
    }

    public function destroy(Note $note){
        $note->delete();
        return redirect()->route('notes.index');
    }

}
