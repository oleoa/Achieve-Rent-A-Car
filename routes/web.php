<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

//Clients Controllers
use App\Http\Controllers\Client\Home;
use App\Http\Controllers\Client\About;
use App\Http\Controllers\Client\Seats;
use App\Http\Controllers\Client\FAQ;
use App\Http\Controllers\Client\Contact;
use App\Http\Controllers\Client\Legal;

//Dashboard Controllers
use App\Http\Controllers\Dashboard\Authentication;
use App\Http\Controllers\Dashboard\Views;
use App\Http\Controllers\Dashboard\FAQ as FAQDashboard;
use App\Http\Controllers\Dashboard\Users;
use App\Http\Controllers\Dashboard\Discounts;

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

/*
Route::prefix('/dashboard')->group(function () {
*/
Route::domain('dashboard.achieverentacar.com')->group(function () {
    
    Route::get('/', function(){ return redirect()->route('views'); })->name('dashboard');

    Route::get('/views', [Views::class, 'index'])->name('views');

    Route::name('faq.')->group(function () {

        Route::get('/faq', [FAQDashboard::class, 'index'])->name('list');
        
        Route::delete('/faq/delete', [FAQDashboard::class, 'delete'])->name('delete');
        
        Route::post('/faq/add', [FAQDashboard::class, 'add'])->name('add');

    });

    Route::name('discount.')->group(function () {

        Route::get('/discounts', [Discounts::class, 'index'])->name('list');

        Route::get('/discounts/enable', [Discounts::class, 'enable'])->name('enable');

        Route::get('/discounts/disable', [Discounts::class, 'disable'])->name('disable');
        
        Route::delete('/discounts/delete', [Discounts::class, 'delete'])->name('delete');
        
        Route::post('/discounts/add', [Discounts::class, 'add'])->name('add');

    });

    Route::name('user.')->group(function () {

        Route::get('/users', [Users::class, 'index'])->name('list');
        
        Route::delete('/user/delete', [Users::class, 'delete'])->name('delete');
        
        Route::post('/user/add', [Users::class, 'add'])->name('add');
        
        Route::get('/user/setup', [Users::class, 'setup'])->name('setup');
        
        Route::post('/user/setup', [Users::class, 'settingup'])->name('settingup');

    });

    Route::name('sign.')->group(function(){

        Route::get('/signin', [Authentication::class, 'signin'])->name('in');
        
        Route::get('/signout', [Authentication::class, 'signout'])->name('out');
        
        Route::post('/signin', [Authentication::class, 'signing_in'])->name('ing-in');
    
    });

});

Route::get('/', function(){
    return redirect()->route('home', ['en']);
})->name('root');

Route::prefix('/{locale}')->group(function(){

    Route::get('/', [Home::class, 'index'])->name('home');

    Route::get('/about', [About::class, 'index'])->name('about');

    Route::get('/seats', [Seats::class, 'index'])->name('seats');

    Route::get('/faq', [FAQ::class, 'index'])->name('faq');

    Route::get('/contact', [Contact::class, 'index'])->name('contact');
    Route::post('/contact', [Contact::class, 'send'])->name('contact-send');

    Route::get('/terms', [Legal::class, 'terms'])->name('terms');

    Route::get('/privacy', [Legal::class, 'privacy'])->name('privacy');

});

