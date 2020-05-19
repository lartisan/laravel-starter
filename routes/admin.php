<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', 'admin/home');
Route::get('/home', 'DashboardController')->name('home');
Route::get('/{page}', 'PageController');
