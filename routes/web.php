<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\livewire\about;
use App\livewire\contact;

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

Route::get('/',home::class);

Route::get('/home',home::class);


Route::get('/about',about::class );


Route::get('/contact',contact::class );