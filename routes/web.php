<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AttractiesController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\TicketsController;
use App\http\Controllers\AccomodatiesController;
use App\http\Controllers\AccoDetailsController;
use App\http\Controllers\BoekingenController;
use App\http\Controllers\AuthController;
use App\Http\Controllers\BoekOverzichtController;
use App\Http\Controllers\ContactOverzichtController;
use App\Http\Controllers\AccomodatieOverzichtController;
use App\http\Controllers\AttractieOverzichtController;
use App\http\Controllers\TicketOverzichtController;


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

Route::get('/accomodatie', [AccomodatiesController::class, 'index']);

Route::get('/accomodatie/{id}', [AccoDetailsController::class, 'show'])->name('accoDetails');

Route::get('/boeken', [BoekingenController::class, 'index']);

Route::post('/boeken/insert', [BoekingenController::class, 'store']);

Route::get('/geboekt', function () {
    return view('geboekt');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});
 
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
 
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');

Route::post('/register', [AuthController::class, 'register']);

Route::get('/contactOverzicht', [ContactOverzichtController::class, 'index']);

Route::get('/boekOverzicht', [BoekOverzichtController::class, 'index']);

Route::get('/accomodatieOverzicht', [accomodatieOverzichtController::class, 'index']);

Route::post('/accomodatieOverzicht', [AccomodatieOverzichtController::class, 'store']);

Route::get('/ticketOverzicht', [TicketOverzichtController::class, 'index']);

Route::get('/attractieOverzicht', [AttractieOverzichtController::class, 'index']);