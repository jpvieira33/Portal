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

Route::get('/', function () {;
    return \Inertia\Inertia::render('Welcome');
});

Route::get('/admin', function (){
    return \Inertia\Inertia::render('Admin/Welcome');
});

Route::get('/client', function (){
    return \Inertia\Inertia::render('Client/Welcome');
});

