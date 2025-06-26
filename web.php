<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassRoomController;
use App\Http\Controllers\CrudFourController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
use App\Models\CrudFour;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/',[AuthController::class,'index']);
// Route::get('/register',[AuthController::class,'register']);
// Route::get('/user-save',[AuthController::class,'save']);

// Route::get('/login', [AuthController::class, 'login'])->name('login');
// Route::get('/logout', [AuthController::class, 'logout']);
// Route::post('/login-user', [AuthController::class, 'loginuser']);
// Route::get('/register', [AuthController::class, 'register']);

// Route::post('/user-save', [UserController::class, 'save']);

// Route::get('/user-list', [UserController::class, 'list']);
// Route::get('/user-edit/{id}', [UserController::class, 'edit']);
// Route::get('/user-delete/{id}', [UserController::class, 'delete']);
// Route::get('/user-add', [UserController::class, 'add']);


// Route::get('/list',[StudentController::class,'index']);
// Route::post('/save',[StudentController::class,'save']);
// Route::get('/add',[StudentController::class,'add']);
// Route::get('/delete/{id}',[StudentController::class,'delete']);
// Route::get('/edit/{id}',[StudentController::class,'edit']);

// Route::get('/list',[ClassRoomController::class,'list']);
// Route::get('/add',[ClassRoomController::class,'add']);
// Route::post('/save',[ClassRoomController::class,'save']);
// Route::get('/edit/{id}',[ClassRoomController::class,'edit']);
// Route::get('/delete/{id}',[ClassRoomController::class,'delete']);


Route::get('/list',[CrudFourController::class,'list'])->name('listofindex');
Route::get('/add',[CrudFourController::class,'add']);
Route::post('/save',[CrudFourController::class,'save']);
Route::get('/edit/{id?}',[CrudFourController::class,'edit']);
Route::get('/delete/{id?}',[CrudFourController::class,'delete']);