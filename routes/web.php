<?php

use App\Http\Controllers\Register\AddressController;
use App\Http\Controllers\Register\CompleteController;
use App\Http\Controllers\Register\DetailsController;
use App\Http\Controllers\Register\SubscriptionController;
use App\Http\Controllers\WelcomeController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::prefix('/')->group(function() {
    Route::get('', [WelcomeController::class, 'index']);
});

Route::prefix('/register')->group(function() {
    Route::get('/', [DetailsController::class, 'index']);
    Route::get('/address', [AddressController::class, 'index']);
    Route::get('/subscription', [SubscriptionController::class, 'index']);
    Route::get('/complete', [CompleteController::class, 'index']);
});

Route::fallback(function() {
    return "<h1>Sorry, the page does not exist</h1>";
});



