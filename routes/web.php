<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ReController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/custom-signin', [AuthController::class, 'createSignin'])->name('signin.custom');


Route::get('/register', [AuthController::class, 'signup'])->name('register');
Route::post('/create-user', [AuthController::class, 'customSignup'])->name('user.registration');


Route::get('/dashboard', [AuthController::class, 'dashboardView'])->name('dashboard');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/dashboarduser',[DashboardController::class,'dashboard'])->name('dashboarduser');


/////user section
Route::get('/normalUsers',[UserController::class,'getNormals']);
Route::get('/ownerUsers',[UserController::class,'getOwners']);

Route::delete('/deleteuser/{id}',[UserController::class, 'delete']);
Route::get('/favorites',[UserController::class,'favorite']);
////endsection

////service section
Route::get('services',[ServiceController::class,'services']);
Route::get('addService',[ServiceController::class,'addShow']);
Route::post('/addService',[ServiceController::class,'add']);
Route::get('editService/{id}',[ServiceController::class,'editShow']);
Route::post('editService',[ServiceController::class,'edit']);
Route::delete('/deleteService/{id}',[ServiceController::class, 'delete']);

///endsection


////RealEstate section
Route::get('equip',[ReController::class,'equip']);
Route::get('property',[ReController::class,'property']);
Route::get('active_real_estates',[ReController::class,'active']);
Route::get('edit_real_estate/{id}',[ReController::class,'editShow']);
Route::post('edit_real_estate',[ReController::class,'edit']);
Route::get('categories',[ReController::class,'categories']);
Route::get('create-real-estate',[ReController::class,'create_real_estate']);


///endsection








