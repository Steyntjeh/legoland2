<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AttractiesController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\TicketsController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

// hier worden alle routes aangemaakt

Route::get('', function () {
    return view('Home');
});

Route::get('/attracties', [AttractiesController::class, 'show']);

Route::get('/attracties/{id}', [DetailsController::class, 'show'])->name('details');

Route::get('/contact', function () {
    return view('Contact');
});

Route::post('/contact/insert', [ContactController::class, 'store']);

Route::get('/verzonden', function() {
    return view('verzonden');
});

Route::get('/openingstijden', function () {
    return view('Openingstijden');
});

Route::get('/tickets', [TicketsController::class, 'index']);

Route::post('/tickets/insert', [TicketsController::class, 'store']);

Route::get('/besteld', function () {
    return view('Bestelling');
});

Route::get('/aboutUs', function () {
    return view('aboutUs');
});

Route::get('/accomodatie', function () {
    return view('accomodatie');
});