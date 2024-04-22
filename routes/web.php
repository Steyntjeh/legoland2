<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AttractiesController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\AccomodatiesController;


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

Route::get('/attracties', [AttractiesController::class, 'index']);

Route::get('/details', [DetailsController::class, 'index']);

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

Route::get('/accomodatie', [AccomodatiesController::class, 'index']);