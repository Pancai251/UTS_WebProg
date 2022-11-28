<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\BookCategoryController;

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

Route::get('/home', function () {
    return view('home');
}); Route::get('/home', [BookController::class,'showAll']);

Route::get('/publisher', function () {
    return view('publisher');
}); Route::get('/publisher', [PublisherController::class,'show']);

Route::get('/biography', function () {
    return view('/biography');
}); Route::get('/biography', [BookCategoryController::class,'showbio']);

Route::get('/comic', function () {
    return view('/comic');
}); Route::get('/comic', [BookCategoryController::class,'showcom']);

Route::get('/encyclopedia', function () {
    return view('/encyclopedia');
}); Route::get('/encyclopedia', [BookCategoryController::class,'showen']);

Route::get('/novel', function () {
    return view('/novel');
}); Route::get('/novel', [BookCategoryController::class,'shownov']);

Route::get('/contact', function () {
    return view('contact');
});


