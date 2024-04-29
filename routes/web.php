<?php

use App\Http\Controllers\PDFController;
use App\Models\Categorie;
use App\Models\Simulation;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\is_logged;

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
    return view('accueil');
})->middleware(is_logged::class);;


Route::get('/resultat', [Controller::class, 'resultats'])->name('resultats');

Route::get('/test', function () {
    $user = User::find(4);
    dd($user->permission);
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/simulateur', [Controller::class, 'simulateur'])->name('simulateur');

    Route::get('/resultats', [Controller::class, 'resultats'])->name('resultats');

    Route::get('/pannel', [Controller::class, 'pannel'])->name('pannel');

    Route::get('/categories/{categorie}/edit', function (Categorie $categorie){
        return view('livewire.edit-category', compact('categorie'));
    })->name('categories.edit');

    Route::get('/super-admin-pannel', [Controller::class, 'superAdminPannel'])->name('super-admin-pannel');

    Route::get('/resultats/{simulation}/generate', [PDFController::class, 'generatePDF'])->name('generatePDF');

    Route::get("/resultats/{simulation}", function (Simulation $simulation){
        return view('pdf.simulation', compact('simulation'));
    })->name('resultat');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
