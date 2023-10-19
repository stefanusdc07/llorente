<?php

declare(strict_types=1);

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

Route::get('/', App\Livewire\Home::class);
Route::get('/about', App\Livewire\About::class)->name('about-us');
Route::get('/contact', App\Livewire\Contact::class);
Route::get('/all', App\Livewire\All::class);

Route::supportBubble();
