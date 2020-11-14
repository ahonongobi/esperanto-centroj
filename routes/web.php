<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SaveUserAfrisoj;
use App\Http\Controllers\Postiafichoj;
use App\Http\Controllers\MembrojController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CentroAgado;

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


Route::get('/',[IndexController::class,'indexPost']);
Route::get('/respondeculo', function () {
    return view('respondeculo/index');
});


Route::get('/info/{id}',[CentroAgado::class,'display']);
Route::get('/anoncoj',function(){
    return view('respondeculo/anoncoj');
 })->name('anoncoj');

 Route::get('/videoj',function(){
    return view('respondeculo/videoj');
 })->name('videoj');

 Route::get('/aldoni',function(){
    return view('respondeculo/aldoni');
 })->name('aldoni');
 Route::get('/eventoj',function(){
    return view('respondeculo/eventoj');
 })->name('eventoj');

Route::post('/register',[RegisterController::class,'store'])->name('register');
Route::get('/register',[RegisterController::class,'loginPage'])->name('registerpage');
Route::get('/logon',[LoginController::class,'loginIndex'])->name('loginPage');
Route::post('/loginUser',[LoginController::class,'loginUser'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/wi-zkl10_va/{email}',[LoginController::class,'indexRespondeculo'])->middleware('auth');

Route::get('/contact',function(){
   return view('simpleuser/contact');
});

Route::post('/savepost',[SaveUserAfrisoj::class,'savedata'])->name('savepost');
Route::post('/uploadVideo',[SaveUserAfrisoj::class,'uploadVideoj'])->name('uploadVideo');
Route::post('/afichoj',[Postiafichoj::class,'afichoj'])->name('afichoj');
Route::post('/membroj',[MembrojController::class,'membroj'])->name('membroj');
Route::post('/informoj',[MembrojController::class,'informoj'])->name('informoj');
Route::get('/informoj',[MembrojController::class,'indexInfor'])->name('informojInfo');

Route::post('/contact',[contactController::class,'store'])->name('contact');

