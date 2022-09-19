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
use App\Http\Controllers\LikeController;
use App\Http\Controllers\UpdateavatarController;
use App\Http\Controllers\SubscribeController;
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

Route::get("/about", function(){
    return view("simpleuser.about");
});
Route::get('/',[IndexController::class,'indexPost']);
Route::get('/test',[IndexController::class,'indexPost']);

//details of a center
Route::get('/details/{title}/{id}',[CentroAgado::class,'displaydetails']);
Route::get('/details-post/{title}/{id}',[CentroAgado::class,'displaydetailsPost']);



Route::get('/info/token={id}',[CentroAgado::class,'display']);
Route::get('/update_video/{id}',[\App\Http\Controllers\UpdateAndOtherController::class,'update_video'])->name('update_video')->middleware('auth');

Route::post('/updateuserVideo',[\App\Http\Controllers\UpdateAndOtherController::class,'updateuserVideo'])->name('updateuserVideo')->middleware('auth');

Route::get("miaj-videoj",[RespondeculoController::class,'miajvideoj'])->name('miaj-videoj')->middleware('auth');
Route::get('/eventoj',[RespondeculoController::class,'eventoj'])->name('eventoj')->middleware('auth');
Route::get('/aldoni',[RespondeculoController::class,'aldoni'])->name('aldoni')->middleware('auth');
Route::get('/videoj',[RespondeculoController::class,'videoj'])->middleware('auth')->name('videoj')->middleware('auth');
Route::get('/anoncoj',[RespondeculoController::class,'anoncoj'])->name('anoncoj')->middleware('auth');
Route::get('/respondeculo',[RespondeculoController::class,'respondeculo'])->name('respondeculo')->middleware('auth');
Route::get('forigurespondeculo/{id}',[DeleteUpdateController::class,'deleteRespondeculo'])->name('forigirespondeculo')->middleware('auth');
Route::post('/register',[RegisterController::class,'store'])->name('register');
Route::get('/register',[RegisterController::class,'loginPage'])->name('registerpage');
Route::get('/logon',[LoginController::class,'loginIndex'])->name('loginPage');

Route::post('/loginUser',[LoginController::class,'loginUser'])->name('login');
Route::get('/loginUser',[LoginController::class,'loginIndex'])->name('login');

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
//search
Route::post('/search',[IndexController::class,'search'])->name('search');

Route::post('/contact',[contactController::class,'store'])->name('contact');
Route::post('/ajax',[CommentController::class,'ajaxpost']);
Route::post('/likes',[LikesController::class,'likes']);
Route::post('/avatar',[UpdateavatarController::class,'update'])->name('avatar')->middleware('auth');

Route::get('/delete2/{id}',[DeleteUpdateController::class,'delete_second'])->middleware('auth');
Route::get('/delete/{id}',[DeleteUpdateController::class,'delete'])->middleware('auth');
Route::post('/update/{id}',[DeleteUpdateController::class,'update'])->middleware('auth');
Route::get('/update/{id}',[DeleteUpdateController::class,'updateView'])->middleware('auth');
Route::get('/likes/{id}/{id_user}/{image}',[LikeController::class,'store'])->middleware('auth');
Route::post('/subscribe',[SubscribeController::class,'store']);
Route::get('/agadoj',[RespondeculoController::class,'displayed'])->name('agadoj')->middleware('auth');

Route::get("/guest",[LoginController::class,'guest']);
Route::get('/email-verification/{email}/',[LoginController::class,'verified']);
