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

Route::get('admin', function () {
    return view('welcome');
});

// Route::get('/{any}', function () {
//     return view('welcome'); // Replace 'app' with the name of your main Vue component
//     // return "ok";
// })->where('any', '.*');

// Route::get('/book', function () {
//     return view('welcome');
// });

// Route::get('backendss', function () {
//     // dd('backend');
//     return view('layout.backend.master');
// });
// Route::get('dashboard', function () {
//     // dd('backend');
//     return view('admin.dashboard');
// });
