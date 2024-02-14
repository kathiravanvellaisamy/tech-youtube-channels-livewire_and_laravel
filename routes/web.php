<?php

use App\Livewire\AddYoutuber;
use App\Livewire\EditYoutuber;
use App\Livewire\HomePage;
use App\Livewire\ViewYoutuber;
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

Route::get('/', HomePage::class);
Route::get('/youtubers/store',AddYoutuber::class);
Route::get('/youtubers',Youtubers::class);
Route::get('/youtubers/{youtuber}',ViewYoutuber::class);

Route::get('/youtubers/edit/{youtuber}',EditYoutuber::class);
