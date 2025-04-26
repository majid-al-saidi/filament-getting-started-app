<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('welcome'); });


//auth routes: 
Route::get('/login', function () { return redirect('/admin/login'); })->name('login');
