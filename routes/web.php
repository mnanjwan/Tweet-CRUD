<?php

use App\Models\Tweet;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetController;

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

// get all tweet
Route::get('/', [TweetController::class,'index'])->name('home');

Route::post('/tweets', [TweetController::class,'store']);

# Edit
Route::get('/tweets/{id}', [TweetController::class,'edit'])->name('create.edit');
Route::post('/process/tweets/{id}', [TweetController::class,'editProcess'])->name('create.edit.process');
