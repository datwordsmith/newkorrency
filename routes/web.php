<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/home', App\Http\Livewire\Main\Index::class)->name('homepage');
Route::get('/', App\Http\Livewire\Main\Index::class)->name('homepage');
Route::get('/register', App\Http\Livewire\Main\Index::class)->name('homepage');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function (){
    Route::get('/', App\Http\Livewire\Admin\Index::class);
});

