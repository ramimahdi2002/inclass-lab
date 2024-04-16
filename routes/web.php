<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\firstController;
use App\Http\Controllers\plainController;
use App\Http\Controllers\APIController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\InvokableController;
use App\Http\Controllers\categories;
use App\Http\Controllers\UserController;

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

Route::get('/',


 function () {
    return view('welcome');
});

Route::get('route1', [firstController::class, 'testing']);

Route::get('route2/{id}', [firstController::class, 'testingParameter']);


Route::get('route3', [firstController::class, 'returnJson']);


Route::get('plain', [plainController::class, 'plainControllerFunction']);

Route::apiResource('apiUrl', APIController::class);

Route::get('invoke', InvokableController::class);

Route::resource('resource', ResourceController::class);

Route::get('method1', [categories::class, 'method1']);
Route::get('method2', [categories::class, 'method2']);

Route::post('method3',[categories::class, 'method3']);

Route::get('retrieve',[categories::class, 'retrieve']);
Route::get('updateById/{id}', [categories::class, 'updateById']);
Route::get('updateMass', [categories::class, 'updateMass']);
Route::get('deleteById/{id}', [categories::class, 'deleteById']);
Route::get('deleteMass', [categories::class, 'deleteMass']);


Route::post('/signup', [UserController::class, 'register'])->name('register.user');
Route::get('/signup', function () {
    return view('signup');
})->name('signup');