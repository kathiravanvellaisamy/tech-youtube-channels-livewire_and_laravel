<?php

use App\Livewire\AddYoutuber;
use App\Livewire\Youtubers;
use App\Models\Youtuber;
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
Route::get('/youtubers/store',AddYoutuber::class);
Route::get('/youtubers',Youtubers::class);
