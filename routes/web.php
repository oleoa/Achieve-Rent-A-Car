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
use App\Http\Controllers\Client\Iframes;
use App\Http\Controllers\Client\Fleet;

//Dashboard Controllers
use App\Http\Controllers\Dashboard\Authentication;
use App\Http\Controllers\Dashboard\Profile;
use App\Http\Controllers\Dashboard\Views;
use App\Http\Controllers\Dashboard\FAQ as FAQDashboard;
use App\Http\Controllers\Dashboard\Users;
use App\Http\Controllers\Dashboard\Discounts;
use App\Http\Controllers\Dashboard\Pages;
use App\Http\Controllers\Dashboard\Debug;

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
    Route::prefix('/dashboard')->name('dashboard.')->group(function () {
*/

// DASHBOARD ROUTES
Route::domain('dashboard.achieverentacar.com')->name('dashboard.')->group(function () {

    // To create a home page
    Route::get('/', function(){
        return redirect()->route('dashboard.views.list');
    })->name('home');

    Route::name('profile.')->group(function(){

        Route::get('/profile', [Profile::class, 'index'])->name('editor');

        Route::get('/validate', [Profile::class, 'email'])->name('email');

        Route::post('/profile', [Profile::class, 'update'])->name('update');

    });

    Route::name('views.')->group(function(){

        Route::get('/views', [Views::class, 'index'])->name('list');

        Route::delete('/views/delete', [Views::class, 'delete'])->name('delete');

    });

    Route::name('pages.')->group(function(){

        Route::get('/pages', [Pages::class, 'index'])->name('index');

    });

    Route::name('faq.')->group(function () {

        Route::get('/faq', [FAQDashboard::class, 'index'])->name('list');
        
        Route::delete('/faq/delete', [FAQDashboard::class, 'delete'])->name('delete');
        
        Route::get('/faq/add', [FAQDashboard::class, 'add'])->name('add');
        Route::post('/faq/add', [FAQDashboard::class, 'add'])->name('add');

    });

    Route::name('discount.')->group(function () {

        Route::get('/discounts', [Discounts::class, 'index'])->name('list');

        Route::get('/discounts/enable', [Discounts::class, 'enable'])->name('enable');

        Route::get('/discounts/disable', [Discounts::class, 'disable'])->name('disable');
        
        Route::delete('/discounts/delete', [Discounts::class, 'delete'])->name('delete');
        
        Route::get('/discounts/add', [Discounts::class, 'add'])->name('add');
        Route::post('/discounts/add', [Discounts::class, 'add'])->name('add');

    });

    Route::name('user.')->group(function () {

        Route::get('/users', [Users::class, 'index'])->name('list');
        
        Route::delete('/user/delete', [Users::class, 'delete'])->name('delete');
        
        Route::post('/user/add', [Users::class, 'add'])->name('add');
        
        Route::get('/user/setup', [Users::class, 'setup'])->name('setup');
        
        Route::post('/user/setup', [Users::class, 'settingup'])->name('settingup');

    });

    Route::name('debug.')->group(function(){

        Route::get('/debug/on', [Debug::class, 'on'])->name('on');
        
        Route::get('/debug/off', [Debug::class, 'off'])->name('off');
    
    });

    Route::name('sign.')->group(function(){

        Route::get('/signin', [Authentication::class, 'signin'])->name('in');
        
        Route::get('/signout', [Authentication::class, 'signout'])->name('out');
        
        Route::post('/signin', [Authentication::class, 'signing_in'])->name('ing-in');
    
    });

});

// CLIENT ROUTES
Route::get('/', function(){
    return redirect()->route('home', ['en']);
})->name('root');


Route::prefix('/{locale}')->group(function(){
    
    Route::get('/', [Home::class, 'index'])->name('home');
    
    Route::get('/reviews', [Iframes::class, 'reviews'])->name('reviews');
    
    Route::get('/about', [About::class, 'index'])->name('about');
    
    Route::get('/seats', [Seats::class, 'index'])->name('seats');
    
    Route::get('/fleet', [Fleet::class, 'index'])->name('fleet');
    
    Route::get('/faq', [FAQ::class, 'index'])->name('faq');
    
    Route::get('/contact', [Contact::class, 'index'])->name('contact');
    Route::post('/contact', [Contact::class, 'send'])->name('contact-send');
    
    Route::get('/terms', [Legal::class, 'terms'])->name('terms');
    
    Route::get('/privacy', [Legal::class, 'privacy'])->name('privacy');
    
});
