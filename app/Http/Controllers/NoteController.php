<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::query()->orderBy('created_at','desc')->paginate(6);
        // dd($notes);

        return view('note.index',['notes'=>$notes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('note.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'note' => 'required'
        ]);
        $data['userId'] = 1;

        $note = Note::create($data);

        return to_route('note.show',$note)->with(["message" => "Your note was created successfully!"]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $note = Note::where('id',$id)->first();
        // dd($note->toArray());
        return view('note.show',['note'=>$note]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $note = Note::where('id',$id)->first();
        // dd($note);
        return view('note.edit',['note'=>$note]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        $data = $request->validate([
            'note' => 'required'
        ]);

        $note->query()->update($data);

        return to_route('note.show',$note)->with(["message" => "Your note was updated successfully!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {

        $note->query()->where('id',$note->id)->delete();

        return to_route('note.index')->with(['message' => "Your note is delete successfully!"]);
    }

    // private function dataValidation($request){
    //     return $request->validate([
    //         'note' => 'required'
    //     ]);
    // }
}
