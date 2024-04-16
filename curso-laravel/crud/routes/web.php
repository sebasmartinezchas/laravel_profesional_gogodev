<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/note', [NoteController::class, 'index'])->name('note.index');
Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
Route::post('/note/store', [NoteController::class, 'store'])->name('note.store');
Route::get('/note/edit/{note}', [NoteController::class, 'edit'])->name('note.edit');
Route::put('/note/update/{note}', [NoteController::class, 'update'])->name('note.update');
Route::get('/note/show/{note}', [NoteController::class, 'show'])->name('note.show');
Route::delete('/note/destroy/{note}', [NoteController::class, 'destroy'])->name('note.destroy');

/*/El metodo abreviado para hacer un crud es el siguiente, si lo hago con la ruta note no es necesario trabajar en todas las rutas una por una, solo bastará con completar el controlador, es decír me quedarían ambos recursos con dos líneas de código .Por supuesto debemos hacer el controlador con el comando php artisan make:controller NombreControlador --resource*/
Route::resource('/post', PostController::class);
