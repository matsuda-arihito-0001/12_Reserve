<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LivewireTestController;
use App\Http\Controllers\AlpineTestController;

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
});

Route::prefix('manager')
    ->middleware('can:manager-higher')
    ->group(function() {
        Route::get('index', function()
        {
            dd('manager');
        });
        // Route::get('index', 'index')->name('index');
    });
Route::middleware('can:user-higher')
    ->group(function() {
        Route::get('index', function()
        {
            dd('user');
        });
        // Route::get('index', 'index')->name('index');
    });


Route::controller(LivewireTestController::class)
    ->prefix('livewire-test')
    ->name('livewire-test.')
    ->group(function() {
        Route::get('index', 'index')->name('index');
        Route::get('register', 'register')->name('register');
});

Route::get('alpine-test/index', [AlpineTestController::class, 'index']);

require __DIR__.'/auth.php';
