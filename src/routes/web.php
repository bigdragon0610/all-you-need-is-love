<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChannelController;

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

//ログイン済み
Route::middleware(['auth'])->group(function () {
    Route::resource('/', ChannelController::class);
});

require __DIR__ . '/auth.php';
