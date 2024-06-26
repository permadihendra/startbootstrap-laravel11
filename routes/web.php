<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Admin\Dashboard;
use App\Livewire\Blog\Homepage;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Livewire Route
Route::get('/', Homepage::class);
Route::get('/admin/dashboard', Dashboard::class);