<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcomes');
});

Route::get('notes', function(){

    $note=\App\Note::all();

    //dd($note);
<<<<<<< HEAD
	return view('notes', compact('note1'));

<<<<<<< .merge_file_a04424
=======
	return view('notes', compact('note1'));
>>>>>>> .merge_file_a05260
=======

	return view('notes', compact('note2'));
>>>>>>> username
});