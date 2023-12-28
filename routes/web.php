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
    return view('home');
})->name('home');

Route::get('advertiser', function() {
    return view('advertiser');
})->name('advertiser');
Route::get('blogs', function() {
    return view('blogs');
})->name('blogs');
Route::get('register', function() {
    return view('register');
})->name('register');
Route::get('faq', function() {
    return view('faq');
})->name('faq');
Route::get('publisher', function() {
    return view('publisher');
})->name('publisher');
Route::get('ssp', function() {
    return view('ssp');
})->name('ssp');
Route::get('media_kit', function() {
    return view('media_kit');
})->name('media_kit');
Route::get('login', function() {
    return view('login');
})->name('login');

// Advertiser routes
Route::get('advertiser/login', function() {
    return view('advertiser/login');
})->name('advertiser.login');
Route::get('advertiser/dashboard', function(){
    return view('advertiser/dashboard');
})->name('advertiser.dashboard');
Route::get('advertiser/campaigns', function(){
    return view('advertiser/campaigns');
})->name('advertiser.campaigns');
Route::get('advertiser/profile', function(){
    return view('advertiser/profile');
})->name('advertiser.profile');
Route::get('advertiser/help', function(){
    return view('advertiser/help');
})->name('advertiser.help');
Route::get('advertiser/inventory', function(){
    return view('advertiser/inventory');
})->name('advertiser.inventory');

Route::get('advertiser/add_funds', function(){
    return view('advertiser/add_funds');
})->name('advertiser.add_funds');
Route::get('advertiser/finance', function(){
    return view('advertiser/finance');
})->name('advertiser.finance');