<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('simpleuser/index');
});

Route::get('/respondeculo', function () {
    return view('respondeculo/index');
});
Route::get('/info',function(){
   return view('simpleuser/centre-info');
})->name('centro.info');

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


