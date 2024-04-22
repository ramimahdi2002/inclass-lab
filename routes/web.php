<?php

use App\Http\Controllers\ListDoctorsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\firstController;
use App\Http\Controllers\plainController;
use App\Http\Controllers\APIController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\InvokableController;
use App\Http\Controllers\categories;
use App\Http\Controllers\DoctorAvailibilityController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\imageUpload;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\userController as ControllersUserController;
use App\Http\Controllers\TaskController;

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


Route::post('/register', [UserController::class, 'store'])->name('register.user');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/display', [ControllersUserController::class, 'index'])->name('list-users');
Route::get('delete-shop/{id}',[ControllersUserController::class,'destroy'])->name('delete-user');
Route::get('/display/{id}', [ControllersUserController::class, 'edit'])->name('edit-user');
Route::post('update-user/{id}',[ControllersUserController::class,'update'])->name('update-user');


Route::get('/post-image', function(){
    return view('imageform');
});
Route::post('/post-image', [ImageUploadController::class, 'uploadImg'])->name('upload-image');
Route::get('display-image', [ImageUploadController::class, 'getImg'])->name('displayImage');



// // Movies



// // Reviews
// Route::post('/movies/{movie}/reviews', [ReviewsController::class, 'store'])->name('reviews.store');

// // Search
// Route::get('/search', [MovieController::class, 'search'])->name('movies.search');


Route::get('/add-movie', function(){
    return view('addMovie');
});

Route::post('/add-movie', [MovieController::class, 'store'])->name('addMovie');
// Route::post('/get-movie', [MovieController::class, 'searchMovie'])->name('SearchMovie');



// list movies
Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
Route::get('/movies/{movie}', [MovieController::class, 'show'])->name('movies.show');
// Route::post('/movies/{movie}/reviews', [ReviewsController::class, 'store'])->name('reviews.store');
Route::get('delete-movie/{id}',[MovieController::class,'destroy'])->name('delete-movie');


//dr

Route::get('register',function() {
    return view('Register');
});
Route::post('register', [RegisterController::class, 'store'])->name('registerForm');

Route::get('login',function(){
    return view('login');
})->name('login');


Route::post('/login/check', [loginController::class, 'checkRole'])->name('login.check');


Route::get('add-doctor', function() {
    return view('addDoctor');
})->name('addDoctor');

Route::post('add-doctor', [DoctorsController::class, 'addDr'])->name('storeDoctor');
Route::post('addSchedule', [DoctorAvailibilityController::class, 'store'])->name('addSchedule');
// Route::get('addScheduleDr', [DoctorsController::class, 'addDr'])->name('addScheduleDr');

Route::get('/listDr', [ListDoctorsController::class, 'index'])->name('listDr');


Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
Route::get('/tasks/sortByPriority', [TaskController::class, 'sortByPriority'])->name('tasks.sortByPriority');
