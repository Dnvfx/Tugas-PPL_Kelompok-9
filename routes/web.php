<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AddressController;

Route::view('/', 'index');

Route::get('/register', function () {
    return view('register');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/address', function () {
    return view('address');
});


// Routes untuk User
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::put('/users/{id}', [UserController::class, 'update']);
Route::get('/users/{id}', [UserController::class, 'getUser']);
Route::post('/logout', [UserController::class, 'logout']);

// Routes untuk Contact
Route::post('/contacts', [ContactController::class, 'create']);
Route::put('/contacts/{id}', [ContactController::class, 'update']);
Route::get('/contacts/{id}', [ContactController::class, 'getContact']);
Route::post('/contacts/search', [ContactController::class, 'search']);
Route::delete('/contacts/{id}', [ContactController::class, 'remove']);

// Routes untuk Address
Route::post('/addresses', [AddressController::class, 'create']);
Route::put('/addresses/{id}', [AddressController::class, 'update']);
Route::get('/addresses/{id}', [AddressController::class, 'getAddress']);
Route::post('/addresses/search', [AddressController::class, 'search']);
Route::delete('/addresses/{id}', [AddressController::class, 'remove']);
