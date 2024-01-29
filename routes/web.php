<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;



Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/home', function () {
    return view('home');
});

Route::post('/contact/submit', [ContactController::class, 'submit']);
Route::get('/contact/all', [ContactController::class, 'alldata']);
Route::get('/contact/all/{id}', [ContactController::class, 'oneMessage'])->name('one');
Route::get('/contact/all/{id}/update', [ContactController::class, 'updateMessage'])->name('contact-update');
Route::post('/contact/all/{id}/update', [ContactController::class, 'updateMessageSubmit'])->name('contact-update-Submit');
Route::get('/contact/all/{id}/delete', [ContactController::class, 'deleteMessage'])->name('contact-delete');