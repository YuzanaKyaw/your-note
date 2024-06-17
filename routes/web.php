<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/note',[NoteController::class,'index'])->named('note.index');
// Route::get('/note/create',[NoteController::class,'create'])->named('note.create');
// Route::post('/note',[NoteController::class,'store'])->named('note.store');
// Route::get('/note/{id}',[NoteController::class,'show'])->named('note.show');
// Route::get('/note/{id}/edit',[NoteController::class,'edit'])->named('note.edit');
// Route::put('/note/{id}',[NoteController::class,'update'])->named('note.update');
// Route::delete('/note/{id}',[NoteController::class,'delete'])->named('note.delete');

Route::resource('note',NoteController::class);



