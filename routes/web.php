<?php

use Illuminate\Http\Request;
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
    return view('welcome');
});

Route::match(['get', 'post'], '/product/{id}/{comment}', function($product_id, $comment, Request $request) {
    return $request->method();
});

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return 'admin main';
    });
    Route::any('/auth', function () {
        return 'admin auth';
    });
    Route::match(['get', 'post'],'/products', function () {
        return 'admin products';
    });
    Route::any('/clients', function () {
        return 'admin clients';
    });
});
