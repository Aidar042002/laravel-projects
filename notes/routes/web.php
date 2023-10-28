<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('notes.index');
});

Route::get('/notes','NoteController@index')->name('notes.index');

Route::get('/notes/create','NoteController@create')->name('notes.create');
Route::post('notes','NoteController@store')->name('notes.store');

Route::get('/notes/{note}', 'NoteController@show')->name('notes.show');

Route::get('/notes/{note}/edit','NoteController@edit')->name('notes.edit');
Route::patch('/notes/{note}', 'NoteController@update')->name('notes.update');

Route::delete('/notes/{note}/destroy','NoteController@destroy')->name('notes.destroy');