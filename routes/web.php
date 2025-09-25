<?php

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function() {
    return User::all();
});

Route::get('/categories', function() {
    return Category::all();
});
