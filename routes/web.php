<?php

use App\Http\Controllers\Admin\OptionController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController as ControllersPropertyController;
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

$idRegex = '[0-9]+';
$slugRegex = '[0-9a-z\-]+';

Route::get('/', [HomeController::class, 'index']);
Route::get('/propriétés', [ControllersPropertyController::class, 'index'])->name('property.index');
Route::get('/propriétés/{slug}-{property}', [ControllersPropertyController::class, 'show'])->name('property.show')->where([
    'slug' => $slugRegex,
    'property' => $idRegex
]);
Route::post('propriétés/{property}/contact', [ControllersPropertyController::class, 'contact'])->name('property.contact')->where([
    'property' => $idRegex
]);
Route::get('/login', [AuthController::class, 'login'])
    ->middleware('guest')
    ->name('login');
Route::post('/ login', [AuthController::class, 'doLogin']);
Route::delete('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('property', PropertyController::class);
    Route::resource('option', OptionController::class);
});
