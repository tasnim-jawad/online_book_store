<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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

Route::get('admin', function () {
    return view('welcome');
});

Route::get('/', function () {
    // dd('jawad');
    return view('home');
});
Route::get('/details', function () {
    // dd('jawad');
    return view('book_details');
});
Route::get('/login', function () {
    // dd('jawad');
    return view('login');
});
Route::get('/registration', function () {
    // dd('jawad');
    return view('registration');
});

Route::resource('book', BookController::class);
// Route::post('book', function(){
//     dd("hi");
// });

// Route::get('/test_book_api', function () {
//     $responce = Http::get('https://openlibrary.org/search.json?q=web');
//     dd($responce->json()['docs']['0']);
// });

