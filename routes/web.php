<?php
use Illuminate\Support\Facades\Auth;


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
Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/', function () {
       echo "test";
    });

    Route::get('user/profile', function () {
        // Uses first & second Middleware
    });
});