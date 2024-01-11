<?php

use Illuminate\Support\Facades\Route;
use Gotenberg\Gotenberg;
use Gotenberg\Stream;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FinanceController;

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


Route::get('invoice', function() {
    $html = view('invoice_pdf')->render(); // 'your.view' is the name of your Blade template
    $request = Gotenberg::chromium('http://127.0.0.1:3000')
        ->url("http://<domain_name:port[80]>/invoice/view");
    $response = Gotenberg::send($request);
    return $response;
})->name('invoice');

Route::get('invoice/view', function() {
    return view('invoice_pdf', ['logo' => asset('images/logopdf.png'), 'stamp' => asset('images/stamp.png')]);
})->name('invoice.view');

// Advertiser routes
Route::get('advertiser/login', function() {
    return view('advertiser/login');
})->name('advertiser.login');

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
Route::post('advertiser/add_funds.store', function() {
    return view('advertiser/add_funds_store');
})->name('advertiser.add_funds.store');

Route::get('advertiser/dashboard', [DashboardController::class, 'index'])->name('advertiser.dashboard');
Route::get('advertiser/finance', [FinanceController::class, 'index'])->name('advertiser.finance');
// Campaign routes
Route::get('advertiser/create_campaign', [CampaignController::class, 'create'])->name('advertiser.create_campaign');
Route::post('advertiser/campaign', [CampaignController::class, 'store']);
Route::get('advertiser/campaigns', [CampaignController::class, 'index'])->name('advertiser.campaigns');