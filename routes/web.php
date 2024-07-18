<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GitHubController;

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

Route::get('/user/{username}', [GitHubController::class, 'getUser']);
Route::get('/user/{username}/followings', [GitHubController::class, 'getFollowings']);