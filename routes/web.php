<?php

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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
});


Route::get('/resultat', [Controller::class, 'resultats'])->name('resultats');

Route::get('/test', function(){
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

        Route::get('/super-admin-pannel', [Controller::class, 'superAdminPannel'])->name('super-admin-pannel');


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});
