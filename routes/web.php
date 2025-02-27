<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Home;
use App\Http\Controllers\Fleet;
use App\Http\Controllers\Seats;
use App\Http\Controllers\Stays;
use App\Http\Controllers\Recommendations;
use App\Http\Controllers\About;
use App\Http\Controllers\FAQ;
use App\Http\Controllers\Contact;
use App\Http\Controllers\Legal;
use App\Http\Controllers\Instructions;
use App\Http\Controllers\Videos;
use App\Http\Controllers\Insurance;

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

// CLIENT ROUTES
Route::get('/', function(){
  return redirect()->route('home', ['en']);
})->name('root');

Route::prefix('/{locale}')->group(function(){
    
  Route::get('/', [Home::class, 'index'])->name('home');
    
  Route::get('/instructions/{arrival}/{departure}', [Instructions::class, 'index'])->name('instructions');
  
  Route::get('/fleet', [Fleet::class, 'index'])->name('fleet');
  
  Route::get('/seats', [Seats::class, 'index'])->name('seats');
  
  Route::get('/stays', [Stays::class, 'index'])->name('stays');
  
  Route::get('/recommendations', [Recommendations::class, 'index'])->name('recommendations');

  Route::get('/about', [About::class, 'index'])->name('about');

  Route::get('/video/{name}', [Videos::class, 'index'])->name('videos');
  
  //Route::get('/faq', [FAQ::class, 'index'])->name('faq');
  
  Route::get('/contact', [Contact::class, 'index'])->name('contact');
  
  Route::post('/contact', [Contact::class, 'send'])->name('contact-send');
  
  Route::get('/terms', [Legal::class, 'terms'])->name('terms');
  
  Route::get('/privacy', [Legal::class, 'privacy'])->name('privacy');

  Route::get('/booking', [Home::class, 'anyrent'])->name('booking');
  Route::post('/booking', [Home::class, 'booking'])->name('booking');
  Route::get('/vehiclesUpdate', [Home::class, 'vehicles'])->name('vehicles');
  Route::get('/verification', [Home::class, 'verification'])->name('verification');
  Route::get('/verification2', [Home::class, 'verification2'])->name('verification2');
    
  Route::get('/insurance/{vehicle}', [Insurance::class, 'insurance'])->name('insurance');

});
