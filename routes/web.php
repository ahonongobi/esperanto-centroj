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
use App\Http\Controllers\RespondeculoController;
use App\Http\Controllers\DeleteUpdateController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\UpdateavatarController;
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



Route::get('/info/token={id}',[CentroAgado::class,'display']);

Route::get('/eventoj',[RespondeculoController::class,'eventoj'])->name('eventoj');
Route::get('/aldoni',[RespondeculoController::class,'aldoni'])->name('aldoni');
Route::get('/videoj',[RespondeculoController::class,'videoj'])->middleware('auth')->name('videoj');
Route::get('/anoncoj',[RespondeculoController::class,'anoncoj'])->name('anoncoj');
Route::get('/respondeculo',[RespondeculoController::class,'respondeculo'])->name('respondeculo');

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
Route::post('/ajax',[CommentController::class,'ajaxpost']);
Route::post('/likes',[LikesController::class,'likes']);
Route::post('/avatar',[UpdateavatarController::class,'update'])->name('avatar');

Route::get('/delete/{id}',[DeleteUpdateController::class,'delete']);
Route::post('/update/{id}',[DeleteUpdateController::class,'update']);
Route::get('/update/{id}',[DeleteUpdateController::class,'updateView']);

