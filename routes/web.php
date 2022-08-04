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
    return view('welcome');
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::get('/clear-config', function() {
    Artisan::call('config:clear');
    return "Config is cleared";
});

Route::get('/clear-route', function() {
    Artisan::call('route:clear');
    return "Route is cleared";
});

Route::get('/clear-view', function() {
    Artisan::call('view:clear');
    return "View is cleared";
});

Route::get('/customers', function () {
        return view('front.customers');
    })->name('customers');

Route::get('/tailwind', function () {
        return view('tailwind');
    })->name('tailwind');

/*
Route::view('/', 'tailwind')->name('tailwind');
*/
Route::view('bootstrap', 'bootstrap')->name('bootstrap');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/test', function () {
    return view('test');
})->name('test');

Route::get('/test2', function () {
    return view('test2');
})->name('test2');

Route::get('/test6', function () {
    return view('test6');
})->name('test6');

