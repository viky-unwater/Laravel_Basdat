<?php

use App\Http\Controllers\ContactsController;
use Illuminate\Support\Facades\Route;

# Route::get('/', function () {
#     return view('welcome');
# });

Route::get('/', function () {
    return view('bio');
});

Route::get('/cv', function () {
    return view('cv');
});

Route::get('/portofolio', function () {
    return view('portofolio');
});

Route::get('/interests', function () {
    return view('interests');
});

Route::get('/social-media', function () {
    return view('socials');
});

Route::resource('contacts', ContactsController::class);