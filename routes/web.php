<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

use App\Http\Controllers\Home;
use App\Http\Controllers\About;
use App\Http\Controllers\FAQ;
use App\Http\Controllers\Contact;
use App\Http\Controllers\API;

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

Route::get('/', function(){
  return redirect()->route('home', ['en']);
});

Route::prefix('/{locale}')->group(function(){

  Route::get('/', [Home::class, 'index'])->name('home');

  Route::get('/about', [About::class, 'index'])->name('about');

  Route::get('/faq', [FAQ::class, 'index'])->name('faq');

  Route::get('/contact', [Contact::class, 'index'])->name('contact');

});

Route::prefix('/api')->group(function(){

  Route::get('/views', [API::class, 'views'])->name('api');

});
