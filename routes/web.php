<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\IncidentReportController;
use App\Http\Controllers\ProfileController;
use App\Models\OccurrenceBook;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocketController;
use App\Models\Docket;
use App\Http\Controllers\OccurrenceBookController;
use App\Http\Controllers\DailyRegisterController;
use App\Http\Controllers\StatementPadController;
use App\Http\Controllers\InvestigatorDiaryController;

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
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('create-occurrence-book',[OccurrenceBookController::class,'store']);
});

require __DIR__.'/auth.php';
/*
Routes for OccurrenceBook
*/


/**
 * NOTE TO BILLS 
 * 
 * Read the laravel documentation on controllers to understand what this code does
 */

 Route::resources([
    'occurrence' => OccurrenceBookController::class,
    'create-occurrenche-book' => OccurrenceBookController::class,
    'docket' => DocketController::class,
    'daily-register' => DailyRegisterController::class,
    'incident-report'=> IncidentReportController::class,
    'statement-pad'=> StatementPadController:: class,
    'investigator-diary'=> InvestigatorDiaryController:: class
  
]);
