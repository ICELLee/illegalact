<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('pages.home.index');
})->name('home');

Route::get('/timeline', function () {
    return view('pages.timeline.index');
})->name('timeline');

Route::get('/events', function () {
    return view('pages.events.index');
})->name('events');

Route::get('/residents', function () {
    return view('pages.residents.index');
})->name('residents');

Route::get('/releases', function () {
    return view('pages.releases.index');
})->name('releases');

Route::get('/shop', function () {
    return view('pages.shop.index');
})->name('shop');

Route::get('/ticketshop', function () {
    return view('pages.ticketshop.index');
})->name('ticketshop');

Route::get('/about', function () {
    return view('pages.about.index');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact.index');
})->name('contact');

