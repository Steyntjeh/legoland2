<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminOverzichtController;
use App\Http\Controllers\AttractiesController;
use App\Http\Controllers\AttractieOverzichtController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\TicketsController;
use App\http\Controllers\AccomodatiesController;
use App\http\Controllers\AccoDetailsController;
use App\http\Controllers\BoekingenController;
use App\http\Controllers\AuthController;
use App\Http\Controllers\BoekOverzichtController;
use App\Http\Controllers\ContactOverzichtController;
use App\Http\Controllers\AccomodatieOverzichtController;
use App\Http\Controllers\AccomodatieFormController;
use App\Http\Controllers\TicketOverzichtController;
use App\Http\Controllers\TicketOrderOverzichtController;


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

Route::get('/ticketOverzicht', [TicketOverzichtController::class, 'index']);

Route::get('/ticketOrderOverzicht', [TicketOrderOverzichtController::class, 'index']);

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

Route::get('/adminOverzicht', [AdminOverzichtController::class, 'index']);

Route::get('/contactOverzicht', [ContactOverzichtController::class, 'index']);

Route::get('/accomodatieOverzicht', [AccomodatieOverzichtController::class, 'index'])->name('accomodaties.accomodatieOverzicht');
Route::get('/accomodatieForm', [AccomodatieOverzichtController::class, 'create'])->name('accomodaties.accomodatieForm');
Route::post('/accomodaties', [AccomodatieOverzichtController::class, 'store'])->name('accomodaties.store');
Route::get('/accomodatieUpdate/{accomodatie}', [AccomodatieOverzichtController::class, 'edit'])->name('accomodaties.accomodatieUpdate');
Route::put('/accomodaties/{accomodatie}', [AccomodatieOverzichtController::class, 'update'])->name('accomodaties.update');
Route::delete('/accomodaties/{accomodatie}', [AccomodatieOverzichtController::class, 'destroy'])->name('accomodaties.destroy');

Route::get('/attractieOverzicht', [AttractieOverzichtController::class, 'index'])->name('attracties.attractieOverzicht');
Route::get('/attractieForm', [AttractieOverzichtController::class, 'create'])->name('attracties.attractieForm');
Route::post('/attracties', [AttractieOverzichtController::class, 'store'])->name('attracties.store');
Route::get('/attractieUpdate/{attractie}', [AttractieOverzichtController::class, 'edit'])->name('attracties.attractieUpdate');
Route::put('/attracties/{attractie}', [AttractieOverzichtController::class, 'update'])->name('attracties.update');
Route::delete('/attracties/{attractie}', [AttractieOverzichtController::class, 'destroy'])->name('attracties.destroy');

Route::get('/boekOverzicht', [BoekOverzichtController::class, 'index'])->name('boekingen.boekOverzicht');
Route::get('/boekUpdate/{boeking}', [BoekOverzichtController::class, 'edit'])->name('boekingen.boekUpdate');
Route::put('/boekingen/{boeking}', [BoekOverzichtController::class, 'update'])->name('boekingen.update');
Route::delete('/boekingen/{boeking}', [BoekOverzichtController::class, 'destroy'])->name('boekingen.destroy');