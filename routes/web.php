<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

//Clients Controllers
use App\Http\Controllers\Home;
use App\Http\Controllers\About;
use App\Http\Controllers\FAQ;
use App\Http\Controllers\Contact;

//Dashboard Controllers
use App\Http\Controllers\AuthenticationDashboard;
use App\Http\Controllers\ViewsDashboard;
use App\Http\Controllers\FAQDashboard;
use App\Http\Controllers\UsersDashboard;
use App\Http\Controllers\DiscountsDashboard;

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

Route::domain('dashboard.achieverentacar.com')->group(function () {
    
    Route::get('/', function(){ return redirect()->route('views'); })->name('dashboard');

    Route::get('/views', [ViewsDashboard::class, 'index'])->name('views');

    Route::name('faq.')->group(function () {

        Route::get('/faq', [FAQDashboard::class, 'index'])->name('list');
        
        Route::delete('/faq/delete', [FAQDashboard::class, 'delete'])->name('delete');
        
        Route::post('/faq/add', [FAQDashboard::class, 'add'])->name('add');

    });

    Route::name('discount.')->group(function () {

        Route::get('/discounts', [DiscountsDashboard::class, 'index'])->name('list');

        Route::get('/discounts/enable', [DiscountsDashboard::class, 'enable'])->name('enable');

        Route::get('/discounts/disable', [DiscountsDashboard::class, 'disable'])->name('disable');
        
        Route::delete('/discounts/delete', [DiscountsDashboard::class, 'delete'])->name('delete');
        
        Route::post('/discounts/add', [DiscountsDashboard::class, 'add'])->name('add');

    });

    Route::name('user.')->group(function () {

        Route::get('/users', [UsersDashboard::class, 'index'])->name('list');
        
        Route::delete('/user/delete', [UsersDashboard::class, 'delete'])->name('delete');
        
        Route::post('/user/add', [UsersDashboard::class, 'add'])->name('add');
        
        Route::get('/user/setup', [UsersDashboard::class, 'setup'])->name('setup');
        
        Route::post('/user/setup', [UsersDashboard::class, 'settingup'])->name('settingup');

    });

    Route::name('sign.')->group(function(){

        Route::get('/signin', [AuthenticationDashboard::class, 'signin'])->name('in');
        
        Route::get('/signout', [AuthenticationDashboard::class, 'signout'])->name('out');
        
        Route::post('/signin', [AuthenticationDashboard::class, 'signing_in'])->name('ing-in');
    
    });

});

Route::get('/', function(){
  return redirect()->route('home', ['en']);
})->name('root');

Route::prefix('/{locale}')->group(function(){

  Route::get('/', [Home::class, 'index'])->name('home');

  Route::get('/about', [About::class, 'index'])->name('about');

  Route::get('/faq', [FAQ::class, 'index'])->name('faq');

  Route::get('/contact', [Contact::class, 'index'])->name('contact');

});

Route::post('/contact', [Contact::class, 'send'])->name('contact-send');
